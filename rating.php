<?php
	$participants = $_GET['participants'];
	$name = $_GET['name'];
	$activity = $_GET['activity'];


?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>WOX评分</title>
	<style type="text/css">
		button{
			height: 50px;
			width: 100px;
		}
		#qiandao{
			color: white;
			background-color: #66CCFF;
		}
		#qiantui{
			color: white;
			background-color: #CC9999;
		}
		#xieriji{
			font-size: 10px;
			height: 25px;
			width: 100px;
			color: white;
			background-color: orange;
		}
		#kanriji{
			font-size: 10px;
			height: 25px;
			width: 100px;
			color: white;
			background-color: green;
		}
	</style>
	
</head>
<body>
	<div>
		<div>
			<div"><span style="font-size: 50px ;text-align: left">WOX</span><p style="text-align: left">活动编号：<?php echo $activity;?></p></div>
			<div style="text-align: center"><img src="<?php echo $wximg?>"  width=100px height=100px value="头像" ></div>
			<p style="text-align: center">
				请为 <?php echo $participants?>  打分
			</p>
		</div>
		<div style="text-align: center">
			<form method='post' action='https://www.wocourse.com/rate/core.php'>
				<input type="hidden" name="participants" value="<?php echo $participants;?>">
				<input type="hidden" name="name" value="<?php echo $name;?>">
				<input type="hidden" name="activity" value="<?php echo $activity;?>">
				<select name = "points">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
				<input type="submit" name="submit">
			</form>
		</div>
	</div>
</body>
</html>