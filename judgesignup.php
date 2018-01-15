<?php
require_once "./db_connect.php";

	$phone = $_POST['phone'];
	$name = $_POST['name'];
	$password = $_POST['password'];

	// echo $name;
	$con = new DB_CONNECT;
	$link = $con->connect();
	// echo $link;
	mysql_query('set names UTF8');

	$t = time();
	$date = date("Y-m-d",$t);
	$onf = 1;

	$mq = mysql_query("INSERT INTO judge (phone, password, name, createtime, onf) VALUES ('$phone', '$password', '$name', '$date', '$onf')");
	if ($mq == 1) {
		$res = "注册成功！请牢记手机号和密码。";
		$emoji = "^_^";
	}else{
		$res = "注册失败！";
		$emoji = "-_-#";
	}
	mysql_close();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WOX评分系统——评委注册结果</title>
	<style type="text/css">
    p{
        text-align: center;
        font-size: 50px; 
    }</style>
</head>
<body>
	<p style="text-align: center;">WOX评分系统</p>
	<p style="text-align: center;">评委注册结果</p>
	<p><?php echo $emoji;?></p><p><?php echo $res;?></p>
	<div style=" text-align: center;">
		<button id = "riji"  type="button" onclick="create()" style="font-size: font-size: 35px; height: 50px; width: 200px;color: white;background-color: orange;">继续注册评委</button>
	</div>
</body>
<script type="text/javascript">
	function create(){
		window.location.href = "https://wocourse.com/rate/judgesign.php";
	}
</script>
</html>