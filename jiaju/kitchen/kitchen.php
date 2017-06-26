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
$sql ="select * from kitchen order by time desc limit 1"; //SQL语句
$result = mysql_query($sql); //查询
	echo "<table border='0' style='font-size:20px' cellspacing='20'>";  
	    echo "<tr><td colspan='3'> 这里是厨房</td></tr>";
		echo "<tr>";
		echo "<td> 温度 </td><td> 湿度 </td><td> 烟雾 </td>";
		echo "</tr>";
	while($row=mysql_fetch_row($result))
	{

		echo "<tr>";
        echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";

	}
	echo "</table>";


 	
?>
<p style="font-size:20px">近来厨房气体浓度变化</p>
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
<img src="../yanwu.php" id="change3" />
<br />
<form action="" method="post"> 
<center><p>通风器开关</p></center>
<table>
<tr>

<td>
<input  align="center"type="submit" name="sumbit1" value="打开">
</td>
<td>
<input  align="center"type="submit" name="submit2" value="关闭">
</td>
</tr>
</table>
</form>
<?php
include("db_config.php");
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
/////////////////////////////////////
mysql_query("set names 'utf8'"); //数据库输出编码
 
mysql_select_db($mysql_database); //打开数据库


if(isset($_POST['sumbit1'])) //issset()函数的作用是：判断提交按钮是否单击，即是否已提交
{
	$sql3 = "UPDATE control SET kit_con='1' WHERE 1";
	mysql_query($sql3);
}else
{
	$sql4 = "UPDATE control SET kit_con='0' WHERE 1 ";
	mysql_query($sql4);
}
$sql ="select * from control";
$result = mysql_query($sql);
$row=mysql_fetch_row($result);
if($row[1]==0)
{
	echo"<p style='font-size:20px;'>通风器已关闭</p>";
}else
{echo"<p style='font-size:20px;'>通风器已打开</p>";
}
?>
</center>
</body>
</html>