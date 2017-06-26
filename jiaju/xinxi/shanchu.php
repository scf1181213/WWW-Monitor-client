<?php
include("db_config.php");
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
/////////////////////////////////////
mysql_query("set names 'utf8'"); //数据库输出编码
 
mysql_select_db($mysql_database); //打开数据库
$username = htmlspecialchars($_POST['username']);  
$password = htmlspecialchars($_POST['password']); 
$sql ="select * from data_user limit 1"; //SQL语句
$result = mysql_query($sql); //查询
$row=mysql_fetch_row($result);
if($username==$row[1])
{
	echo"root用户不可删除";
	}
else
{  
$sql3 = "delete from data_user where username='$username' and password='$password'";
mysql_query($sql3);
echo "用户 $username 已被删除";
}
?>