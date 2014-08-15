<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="后台管理系统登录模板页面">
    <meta name="author" content="">
    <title>后台管理系统登录模板页面</title>
    <!-- Bootstrap core CSS -->
    <link href="/upcms/Public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/upcms/Public/js/bootstrap.min.js" rel="stylesheet">
  
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
 * { margin:0; padding:0; outline:none; }
html, body { width:100%; height:100%; background: #eee;}
body { display:table; position:static; }
#menu {position:absolute;top:50%;}
#inner {width:300px;position: relative;top: -50%;margin: 0 auto;}
#menu { display: table-cell; vertical-align: middle; position:static; +position:absolute;}
.ov{height: 10px; width:100%;}
</style>

  </head>
  <body>
    <div  id="menu">
    <div id="inner" class="container">
      <form action="/upcms/Home/User/checklog" method="post" class="form-signin" role="form">
        <h2 style="text-align:center;">网站后台管理系统</h2>
        <input type="text" class="form-control" placeholder="用户名" name="email" required autofocus>
        <div class="ov"></div>
        <input type="password" class="form-control" placeholder="密码" name="pwd" required>
        <div class="ov"></div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登 陆</button>
      </form>
</div>
    </div> <!-- /container -->
  </body>
</html>