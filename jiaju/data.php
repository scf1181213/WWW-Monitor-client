<html>
<head>
<link rel="stylesheet" type="text/css" href="bedroom/data.css" />
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
      <hr>
<?php

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
      <hr>
	<?php
$sql ="select * from bedroom order by time desc limit 1"; //SQL语句
$result = mysql_query($sql); //查询
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
   <hr>
    <?php
$sql ="select * from outdoor order by time desc limit 1"; //SQL语句
$result = mysql_query($sql); //查询
	echo "<table border='0' style='font-size:20px' cellspacing='20'>";  
	    echo "<tr><td colspan='3'> 这里是阳台</td></tr>";
		echo "<tr>";
		echo "<td> 温度 </td><td> 湿度 </td><td> 光照 </td>";
		echo "</tr>";
	while($row=mysql_fetch_row($result))
	{

		echo "<tr>";
        echo "<td>".$row[1]."</td>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[2]."</td>";

	}
	echo "</table>";

 	
?>

</center>
</body>
</html>