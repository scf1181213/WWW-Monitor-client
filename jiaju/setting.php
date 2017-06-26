<html>  
<head>
<title>信息更改</title>
<link rel="stylesheet" type="text/css" href="css/UI1.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function xiugai()
{
document.form.action="xinxi/xiugai.php";  
document.form.submit();
}
function xinzeng()
{
document.form.action="xinxi/xinzeng.php";
document.form.submit();
}
function shanchu()
{
document.form.action="xinxi/shanchu.php";
document.form.submit();
}

</script>
</head>  
<body>
<h1><center>信息更改</center></h1>
<form name="form" method="post">  

<center>
<p>  
<label for="username" class="label">用户名:</label>  
<input align="right" id="username" name="username" type="text" class="input" />  
<p/>  
<p>  
<label for="password" class="label">密 码:</label>  
<input  align="right" id="password" name="password" type="password" class="input" />  
<p/>  
<p>  
<input type="submit"  value="修改" onclick="xiugai()"  style="background-color:#91cfa1"/>  
<input type="submit"  value="新增" onclick="xinzeng()" style="background-color:#91cfa1"/>
<input type="submit"  value="删除" onclick="shanchu()" style="background-color:#91cfa1"/>
</p>
</center>  
</form> 
</body>
</html> 