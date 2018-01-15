<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WOX评分系统——创建活动</title>
</head>
<body>
	<div style="border:1px ;width:500px;height:380px;position:absolute;left:50%;margin-left:-250px;top:50%;margin-top:-190px;">
		<h1 style="text-align: center;">WOX评分系统——创建活动</h1>
	<form id='create_activity' name='create_activity' method='post' action='https://wocourse.com/rate/create_activity.php' >
		<div style="text-align: center;"><span>活动编号</span><input type="text" name="aid"></div>
		<div style="text-align: center;"><span>活动名称</span><input type="text" name="name"></div>
		<div style="text-align: center;"><span>人数上限</span><input type="text" name="cap" value="999"></div>
		<div style="text-align: center;">邀请评委（请用“;”隔开）</div><div style="text-align: center;"><textarea rows="6" cols="30" name="judge" style="color: grey;"></textarea></div>
		<div style="text-align: center;">参评选手（请用“;”隔开）</div><div style="text-align: center;"><textarea rows="6" cols="30" name="participants" style="color: grey;"></textarea></div>
		<div style="text-align: center;">活动简介</div><div style="text-align: center;"><textarea rows="6" cols="30" name="detail" style="color: grey;"></textarea></div>
		<div><span> </span></div>
		<div><span> </span></div>
		<div style="text-align: center;"><input type="submit" name="submit" value="提交"></div>
	</form>
	</div>
</body>
</html>