<?php
require_once "./db_connect.php";

	$name = $_POST['name'];
	$activity = $_POST['activity'];

	// echo $name;
	$con = new DB_CONNECT;
	$link = $con->connect();
	// echo $link;
	mysql_query('set names UTF8');

	$mq = mysql_query("select * from activity where aid = '$activity'");
	$mqinfo = mysql_fetch_array($mq);
	$judge = explode(";", $mqinfo['judge']); 
	// print_r($judge);
	$res = 0;
	for ($i=0; $i < count($judge) ; $i++) { 
		if ($judge[$i] == $name) {
			$res = 1;
			break;
		}
	}

	// $password = 
	if ($res == 1) {
		$mqa = mysql_query("select * from activity where aid = '$activity'");
		$mqainfo = mysql_fetch_array($mqa);
		$aname = $mqainfo['name'];
		$adetail = $mqainfo['detail'];
		$participants = $mqainfo['participants'];
		echo "<form style='display:none;' id='form1' name='form1' method='post' action='https://www.wocourse.com/rate/show.php'><input name='name' value=$name /><input name='participants' value=$participants /><input name='aname' value=$aname /><input name='adetail' value=$adetail /><input name='activity' value=$activity /></form>
		<script type='text/javascript'>function load_submit(){document.form1.submit()}load_submit();</script>";
	}else{
		// echo "alert(登陆失败!)";
		echo "<form style='display:none;' id='form1' name='form1' method='post' action='https://www.wocourse.com/rate/select_activity.php'><input name='name' value=$name /><input name='res' value='输入的活动号码有误或您并未加入该活动' /></form>
		<script type='text/javascript'>function load_submit(){document.form1.submit()}load_submit();</script>";
	}

	mysql_close();
?>