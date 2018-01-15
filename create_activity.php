<?php
require_once "./db_connect.php";

	$aid = $_POST['aid'];
	$name = $_POST['name'];
	$cap = $_POST['cap'];
	$detail = $_POST['detail'];
	$judge = $_POST['judge'];
	$participants = $_POST['participants'];

	$con = new DB_CONNECT;
	$link = $con->connect();
	// echo $link;
	mysql_query('set names UTF8');

	$t = time();
	$date = date("Y-m-d",$t);
	$onf = 1;

	$rannum = rand(1000, 9999);
	$aid = $aid . $rannum;

	$mq = mysql_query("INSERT INTO activity (aid, name, detail, judge, participants, cap, createtime, onf) VALUES ('$aid', '$name', '$detail', '$judge', '$participants','$cap', '$date', '$onf')");
	if ($mq == 1) {
		$res = "创建成功！" . "活动编号是：" . $aid;
		$emoji = "^_^";
	}else{
		$res = "创建失败！";
		$emoji = "-_-#";
	}
	mysql_close();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WOX评分系统——创建活动结果</title>
	<style type="text/css">
    p{
        text-align: center;
        font-size: 50px; 
    }</style>
</head>
<body>
	<p>WOX评分系统——创建活动结果</p><p><?php echo $emoji;?></p><p><?php echo $res;?></p>
	<div style=" text-align: center;">
		<button id = "riji"  type="button" onclick="create()" style="font-size: font-size: 35px; height: 50px; width: 200px;color: white;background-color: orange;">继续创建活动</button>
	</div>
</body>
<script type="text/javascript">
	function create(){
		window.location.href = "https://wocourse.com/rate/set_activity.php";
	}
</script>
</html>