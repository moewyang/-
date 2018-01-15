<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WOX评分系统——管理端</title>
</head>
<body>
	<div style="border:1px ;width:500px;height:380px;position:absolute;left:50%;margin-left:-250px;top:50%;margin-top:-190px;">
	<h1 style="text-align: center;">WOX评分系统</h1>
	<h1 style="text-align: center;">管理端</h1>
	<div>
		<div style="text-align: center;">
			<input type="button" name="participants" value="参评者注册" onclick="participants()">
		</div>
		<div style="text-align: center;">
			<input type="button" name="judge" value="评委注册" onclick="judge()">
		</div>
		<div style="text-align: center;">
			<input type="button" name="set" value="创建活动" onclick="set()">
		</div>
		<div style="text-align: center;">
			<input type="button" name="set" value="查看成绩" onclick="check()">
		</div>
		<div style="text-align: center;">
			<input type="button" name="judge" value="评委登陆" onclick="judgelogin()">
		</div>
	</div>	
	</div>
</body>
<script type="text/javascript">
	function set(){
		window.location.href = "https://www.wocourse.com/rate/set_activity.php";
	}
	function check(){
		window.location.href = "https://www.wocourse.com/rate/check.php";
	}
	function judge(){
		window.location.href = "https://www.wocourse.com/rate/judgesign.php";
	}
	function judgelogin(){
		window.location.href = "https://www.wocourse.com/rate/judge_login.php";
	}
	function participants(){
		window.location.href = "https://www.wocourse.com/rate/sign.php";
	}
</script>
</html>