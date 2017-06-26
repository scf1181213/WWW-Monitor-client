<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>智能家居监测系统网页版</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
<?php 
//包含数据库连接文件
session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];  
include('conn.php');  
//检测用户名及密码是否正确  
$check_query = mysql_query("select userid from data_user where password='$password' and username='$username' ");
if($_GET['action'] == "logout"){
	unset($_SESSION['userid']);  
    unset($_SESSION['username']);
	unset($_SESSION['password']);  
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';  
    exit;  
}   
if($result=mysql_fetch_row($check_query))
{}
else{exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');}

?>
		<div class="container">	
			<header class="clearfix">
				<h1 style="color:#000">智能家居监测系统网页版</h1>	
<div style="text-align:center;clear:both">
<p><script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script></p>
</div>
			</header>
<script src="/adsense.js" type="text/javascript"></script>
			<div class="main">
				
				<p><div class="side" id="left">
					<nav class="dr-menu">
						<div  style="color:#030001"class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a  style="color:#000000"class="dr-label">菜单</a></div>
						<ul >
							<li><a  style="color:#000000" class="dr-icon dr-icon-user" href="data.php" target="xianshi">主信息板</a></li>
							<li><a  style="color:#000000" class="dr-icon dr-icon-camera" href="kitchen/kitchen.php" target="xianshi">厨房</a></li>
							<li><a  style="color:#000000" class="dr-icon dr-icon-heart" href="bedroom/bedroom.php" target="xianshi">主卧</a></li>
							<li><a  style="color:#000000" class="dr-icon dr-icon-bullhorn" href="livingroom/livingroom.php" target="xianshi">客厅</a></li>
							<li><a  style="color:#000000" class="dr-icon dr-icon-download" href="yangtai/yangtai.php" target="xianshi">阳台</a></li>
							<li><a  style="color:#000000" class="dr-icon dr-icon-settings" href="setting.php" target="xianshi">设置</a></li>
							<li><a  style="color:#000000" class="dr-icon dr-icon-switch" href="index.php?action=logout">登出</a></li>
						</ul>
					</nav>
				</div>
                <div id="right">
                <iframe align="middle" name="xianshi" height="750" width="700" src="data.php" frameborder="0">
                </iframe>
                </div>
                </p>
				<div style="clear:both"></div>
			</div>
		</div><!-- /container -->
		<script src="js/ytmenu.js"></script>

	</body>
</html>