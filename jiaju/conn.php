<?php   
  
$conn = mysql_connect("112.74.161.74","vill","hao5jx") or die("数据库链接错误".mysql_error());  
mysql_select_db("jiaju",$conn) or die("数据库访问错误".mysql_error());  
mysql_query("set names 'gb2312'"); //数据库输出编码  
?>  