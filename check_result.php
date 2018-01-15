<?php
require_once "./db_connect.php";
	$activity = $_POST['activity'];

	// function points_one($points){
	// 	//	算术平均成绩
	// 	$num = count($points);
	// 	$sum =0;
	// 	for ($i=0; $i < $num; $i++) { 
	// 		$sum = $sum + $points[$i];
	// 	}
	// 	$point = $sum / $num;

	// 	return $point;
	// }

	$con = new DB_CONNECT;
	$link = $con->connect();
	// echo $link;
	mysql_query('set names UTF8');

	$mq = mysql_query("select * from activity where aid = '$activity'");
	$mqinfo = mysql_fetch_array($mq);
	$name = $mqinfo['name'];
	$res = $mqinfo['result'];
	$result = json_decode($res,true);
	$i = 0;
	foreach ($result as $key => $value) {
		$sum[$key] = 0;
		$num[$key] = 0;
		foreach ($value as $k => $v) {
			$sum[$key] = $sum[$key] + $v;
			$num[$key] = $num[$key] + 1;
		}
		$par[$i] = $key;
		$point[$i] = $sum[$key] / $num[$key];
		$i++;
	}

	mysql_close();

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WOX评分系统——查看成绩</title>
</head>
<body onload="check()">
	<form id="participants" style="text-align: center;">
		<h2 style="text-align: center;">您好，<?php echo $name ;?> 活动的评分结果如下</h3>
		<!-- <span style="font-size: 30px ;color: orange "><?php echo $name ?></span><span>的日记记录<br/></span> -->
		<!-- <button type="button" onclick="allriji()" style="height: 50px; background-color: #CCCCCC">查看全部日记</button>
				<button type="button" onclick="shouqiriji()" style="height: 50px; background-color: #CCCCCC">收起日记</button> -->
			
		<!-- <div>
			<textarea disabled = "disabled" rows = 2 cols = 10  style="text-align: center;">日期</textarea><textarea disabled = "disabled" rows = 2 cols = 70  style="text-align: center;">日记内容</textarea>
		</div> -->
	</form>
</body>
	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
	<script src="Scripts/jquery-form.js" type="text/javascript"></script>
	<script type="text/javascript">
function check(){

		var  par=<?php echo json_encode($par);?>;
		var  point=<?php echo json_encode($point);?>;
		// alert(participants);
		var TemO = document.getElementById("participants");
		for (var i =0; i < par.length ; i++) {
			var newdiv = document.createElement('div');
			newdiv.id = i;
			newdiv.style = "background-color: #DDDDDD; text-align: center; border: 30px";
			TemO.appendChild(newdiv);
			var Tem = document.getElementById(i);
			var newInput = document.createElement("input");
			newInput.disabled = "disabled";
			newInput.value = "姓名" + par[i];
			newInput.style = "background-color: #33CCFF; text-align: center; color: white; width: 5%; height: 80px;";
			var newInputa = document.createElement("input");
			newInputa.disabled = "disabled";
			newInputa.value = "平均得分：" + point[i];
			newInputa.style = "background-color: #DDDDDD; text-align: center; color: black; border: 0px";
			// var newInputb = document.createElement("input");
			// // newInputb.disabled = "disabled";
			// newInputb.type = "button";
			// newInputb.value = "点击进入评分";
			// newInputb.name = participants[i];
			// newInputb.onclick = function(){
			// 	// alert(this.name);
			// 	var url = "https://wocourse.com/rate/rating.php?name=<?php echo $name;?>&activity=<?php echo $activity;?>&participants="+ this.name;
			// 	window.location.href = url;
			// 	};
			// newInputb.style = "border: 0px";
			// var newInputd = document.createElement("input");
			// var newInputc = document.createElement("select");
			// var option = document.createElement("option");
			// option.value = "1";
			// var option1 = document.createElement();
			// option1.value = "2";
			// newInputb.cols = 50;
			Tem.appendChild(newInput);
			Tem.appendChild(newInputa);
			// Tem.appendChild(newInputb);
			// Tem.appendChild(newInputd);
			// Tem.appendChild(newInputc);
			// newInputc.appendChild(option);
			// option.appendChild(option1);

		}
	}
	</script>