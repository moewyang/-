<?php
	$name = $_POST['name'];
	$res = $_POST['res'];
	echo $res;
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WOX评分系统——选择活动</title>
</head>
<body>
	<div style="border:1px ;width:500px;height:380px;position:absolute;left:50%;margin-left:-250px;top:50%;margin-top:-190px;">
		<h2 style="text-align: center;"><?php echo $name?>您好！请输入活动编号</h1>
	<form id='sign' name='sign' method='post' action='https://wocourse.com/rate/select_activity_result.php' >
		<div style="text-align: center;"><input type="text" name="activity"></div>
		<input type="hidden" name="name" value="<?php echo $name;?>">
		<div style="text-align: center;"><input type="submit" name="submit" value="确认"></div>
	</form>
	</div>
</body>
</html>