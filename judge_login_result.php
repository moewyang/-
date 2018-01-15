<?php
require_once "./db_connect.php";

	$name = $_POST['name'];
	$password = $_POST['password'];

	// echo $name;
	$con = new DB_CONNECT;
	$link = $con->connect();
	// echo $link;
	mysql_query('set names UTF8');

	$mq = mysql_query("select * from judge where name = '$name'");
	$mqinfo = mysql_fetch_array($mq);

	// $password = 
	if ($mqinfo['password'] == $password) {
		echo "<form style='display:none;' id='form1' name='form1' method='post' action='https://www.wocourse.com/rate/select_activity.php'><input name='name' value=$name /></form>
		<script type='text/javascript'>function load_submit(){document.form1.submit()}load_submit();</script>";
	}else{
		// echo "alert(登陆失败!)";
		echo "<form style='display:none;' id='form1' name='form1' method='post' action='https://www.wocourse.com/rate/judge_login.php'><input name='name' value=$name /><input name='res' value='帐号或密码错误，请重新登录' /></form>
		<script type='text/javascript'>function load_submit(){document.form1.submit()}load_submit();</script>";
	}

	mysql_close();
?>