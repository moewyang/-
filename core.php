<?php
require_once "./db_connect.php";
	$participants = $_POST['participants'];
	$name = $_POST['name'];
	$activity = $_POST['activity'];
	$points = $_POST['points'];

	$con = new DB_CONNECT;
	$link = $con->connect();
	// echo $link;
	mysql_query('set names UTF8');

	$mq = mysql_query("select * from activity where aid = '$activity'");
	$mqinfo = mysql_fetch_array($mq);
	$res = $mqinfo['result'];
	$result = json_decode($res,true);
	// print_r($result);
	$result[$participants][$name] = $points;
	$result = json_encode($result);
	$mqa = mysql_query("UPDATE activity SET result = '$result'  WHERE aid = '$activity'");
	if ($mqa == 1) {
		echo "评分成功，请返回继续给其他参与者评分。";
		sleep(1);
		echo "<form style='display:none;' id='form1' name='form1' method='post' action='https://www.wocourse.com/rate/show.php'><input name='activity' value=$activity /></form>
		<script type='text/javascript'>function load_submit(){document.form1.submit()}load_submit();</script>";
	}else{
		echo "评分失败，请尝试再评一次或联系技术维护人员。";
	}
	mysql_close();
?>