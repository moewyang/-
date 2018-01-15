<?php
	$name = $_POST['name'];
	$res = $_POST['res'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WOX评分系统——评委登陆</title>
</head>
<body>
	<div style="border:1px ;width:500px;height:380px;position:absolute;left:50%;margin-left:-250px;top:50%;margin-top:-190px;">
		<h2 style="text-align: center;"><?php echo $res?></h2>
		<h1 style="text-align: center;">WOX评分系统</h1>
		<h1 style="text-align: center;">评委登陆</h1>
	<form id='sign' name='sign' method='post' action='https://wocourse.com/rate/judge_login_result.php' >
		<div style="text-align: center;"><span>姓名</span><input type="text" name="name" value="<?php echo $name?>"></div>
		<div style="text-align: center;"><span>密码</span><input type="text" name="password"></div>
		<div><span> </span></div>
		<div><span> </span></div>
		<div style="text-align: center;"><input type="submit" name="submit" value="提交"></div>
	</form>
	</div>
</body>
</html>