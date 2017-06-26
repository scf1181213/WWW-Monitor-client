<html>
<head>
<link rel="stylesheet" type="text/css" href="data.css" />
</head>
<body>
<center>
<?php
include("db_config.php");
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
/////////////////////////////////////
mysql_query("set names 'utf8'"); //数据库输出编码
 
mysql_select_db($mysql_database); //打开数据库
 

//////////////////////////////
$sql ="select * from livingroom order by time desc limit 1"; //SQL语句
$result = mysql_query($sql); //查询
	echo "<table border='0' style='font-size:20px' cellspacing='20'>";  
	    echo "<tr><td colspan='3'> 这里是客厅</td></tr>";
		echo "<tr>";
		echo "<td> 温度 </td><td> 湿度 </td><td> 光照 </td>";
		echo "</tr>";
	while($row=mysql_fetch_row($result))
	{

		echo "<tr>";
        echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";

	}
	echo "</table>";


 	
?>
<p style="font-size:20px">近来客厅光照强度变化</p>
<script>
function changesrc(){
var pic=document.getElementById('change');
pic.src='accbarex1.php?t='+Math.random();
var pic=document.getElementById('change2');
pic.src='guangqiang.php?'+Math.random();
var pic=document.getElementById('change1');
pic.src='yanwu.php?t='+Math.random();
setTimeout(changesrc,1000);
}
</script>
<img src="../guangqiang.php" id="change2" />
<br />

</center>
</body>
</html>