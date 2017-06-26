<html>
<head>
<link rel="stylesheet" type="text/css" href="css/data.css" />
</head>
<body>
<center>
<?php
include("db_config.php");
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
/////////////////////////////////////
mysql_query("set names 'utf8'"); //数据库输出编码
 
mysql_select_db($mysql_database); //打开数据库
 
 
mysql_query($sql);
//////////////////////////////
$sql ="select * from t1 order by time desc limit 1"; //SQL语句
$sql1="select * from t2 order by time desc limit 10";
$sql2="select * from t3 order by time desc limit 10";
$result = mysql_query($sql); //查询
$result1=mysql_query($sql1);
$result2=mysql_query($sql2);
$count=0;
	echo "<table border='0' style='font-size:20px' cellspacing='20'>";  
	    echo "<tr><td colspan='3'> 这里是卧室</td></tr>";
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
<p style="font-size:20px">近来室内温度变化</p>
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
<img src="accbarex1.php" id="change" />
<table>
<tr>
<td>
<input  align="center"type="submit" name="sumbit1" value="拉起">
</td>
<td>
<input  align="center"type="submit" name="submit2" value="合上">
</td>
</tr>
</table>
</center>
<?php
include("db_config.php");
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
/////////////////////////////////////
mysql_query("set names 'utf8'"); //数据库输出编码
 
mysql_select_db($mysql_database); //打开数据库

$sql ="select * from control";
$result = mysql_query($sql);
$row=mysql_fetch_row($result);
if($row[0]==0)
{
	echo"窗帘并未拉起";
}else
echo"窗帘已拉起"


?>
</body>
</html>