<?php if (!defined('THINK_PATH')) exit();?>﻿<head>
<meta http-equiv="Content-Type" content="text/html;" charset=utf-8/>
<title>用户登录</title>
<style type="text/css">
    html{font-size:12px;}
    fieldset{width:520px; margin: 0 auto;}
    legend{font-weight:bold; font-size:14px;}
    label{float:left; width:70px; margin-left:10px;}
    .left{margin-left:80px;}
    .input{width:150px;}
    span{color: #666666;}
</style>
<script language=JavaScript>
<!--

function InputCheck(LoginForm)
{
  if (LoginForm.username.value == "")
  {
    alert("请输入用户名!");
    LoginForm.username.focus();
    return (false);
  }
  if (LoginForm.password.value == "")
  {
    alert("请输入密码!");
    LoginForm.password.focus();
    return (false);
  }
}

//-->
</script>
</head>
<body>
<div>
<fieldset>
<legend>用户登录</legend>
<form name="LoginForm" method="post" action="/Home/User/login" onSubmit="return InputCheck(this)">
<p>
<label for="username" class="label">用户名:</label>
<input id="username" name="username" type="text" class="input" />
<p/>
<p>
<label for="password" class="label">密 码:</label>
<input id="password" name="password" type="password" class="input" />
<p/>
<p>
<label for="level" class="label">级别:</label>
<input id="level" name="level" type="text" class="input" />
<p/>
<p>
<input type="submit" name="submit" value="  确 定  " class="left" /> <a href="/Home/User/register">注册</a>
</p>
</form>
</fieldset>
</div>
</body>
</html>