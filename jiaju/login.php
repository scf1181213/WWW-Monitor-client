<html>
<head>
<meta http-equiv="Refresh" content="3;url=index.php" />
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
</head>
<body>
<?php  
//登录  
if(isset($_POST['submit'])){  
 $username = htmlspecialchars($_POST['username']);  
$password = htmlspecialchars($_POST['password']);  
}  

  
//包含数据库连接文件  
include('conn.php');  
//检测用户名及密码是否正确  
$check_query = mysql_query("select userid from data_user where password='$password' and username='$username' ");  
if($result =mysql_fetch_row($check_query)){  
    //登录成功  
    session_start();  
    $_SESSION['username'] = $username;  
    $_SESSION['userid'] = $result['userid'];
	$_SESSION['password']=$password;  
    echo $username,' 欢迎你！进入 <a href="index.php">监测界面</a><br />';
	echo" <p>如果超过 3 秒后您仍然看到本消息，请点击上面的链接。</p>";    
    exit;  
} else {  
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');  
}  
  

  
?>  
</body>
</html>