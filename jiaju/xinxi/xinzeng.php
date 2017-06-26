<?php
include("db_config.php");
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
/////////////////////////////////////
mysql_query("set names 'utf8'"); //数据库输出编码
 
mysql_select_db($mysql_database); //打开数据库
$username = htmlspecialchars($_POST['username']);  
$password = htmlspecialchars($_POST['password']);  
$userid=rand(); 
$sql="select username from data_user where username='$username'";
$con=mysql_query($sql);
if($row=mysql_fetch_row($con))
{
	echo"此用户已存在";
}else
{
	$sql3 = "insert into data_user (username, password, userid) VALUES ('$username', '$password', '$userid')";
mysql_query($sql3);
echo "已新增用户 $username 密码为 $password";

	}
?>