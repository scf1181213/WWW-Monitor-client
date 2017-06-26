<?php
include("db_config.php");
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
/////////////////////////////////////
mysql_query("set names 'utf8'"); //数据库输出编码
 
mysql_select_db($mysql_database); //打开数据库
$username = htmlspecialchars($_POST['username']);  
$password = htmlspecialchars($_POST['password']);   
$sql3 = "UPDATE data_user SET password='$password' WHERE username='$username'";
$sql="select username from data_user where username='$username'";
mysql_query($sql3);
$con=mysql_query($sql);
if($row=mysql_fetch_row($con))
echo "用户 $username 的密码已被修改为 $password";
else
echo "不存在此用户。";
?>