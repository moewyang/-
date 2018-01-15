<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WOX评分系统——查看成绩</title>
</head>
<body>
	<div style="border:1px ;width:500px;height:380px;position:absolute;left:50%;margin-left:-250px;top:50%;margin-top:-190px;">
		<h1 style="text-align: center;">WOX评分系统——查看成绩</h1>
	<form id='sign' name='sign' method='post' action='https://wocourse.com/rate/check_result.php' >
		<div style="text-align: center;"><span>请输入查询的活动编号</span><input type="text" name="activity"></div>
		<div><span> </span></div>
		<div><span> </span></div>
		<div style="text-align: center;"><input type="submit" name="submit" value="提交"></div>
	</form>
	</div>
</body>
</html>