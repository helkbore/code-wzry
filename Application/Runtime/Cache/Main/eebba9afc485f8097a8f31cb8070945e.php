<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo (C("Admin.ADMIN_TITLE")); ?> </title>
    <!-- Tell the browser to be responsive to screen width 告诉浏览器响应屏幕宽度 -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/wzry/Public/Static/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/wzry/Public/Static/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/wzry/Public/Static/plugins/ionicons/css/ionicons.min.css">


    <!-- jQuery 2.2.3 -->
    <script src="/wzry/Public/Static/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/wzry/Public/Static/bootstrap/js/bootstrap.min.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<!-- Content Header (Page header) 内容标题（页眉）-->

<section class="content-header">
    <h1 class="text-aqua">

        <?php echo ((isset($meta_title) && ($meta_title !== ""))?($meta_title):$pageTitle[0]); ?>
        <small class="text-muted"><?php echo ($pageTitle[1]); ?><!--(动态的模块副标题)--></small>
    </h1>
    <ol class="breadcrumb">
        <!--<li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>-->
        <!--<li class="active">网点</li>-->
    </ol>
</section>


<div>
    <div id="#menu">
        <ul>
           <li><a href="<?php echo U('Account/add');?>">添加账号</a></li>
           <li><a href="<?php echo U('User/add');?>">添加角色</a></li>
           <li><a href="<?php echo U('User/list');?>">查看角色</a></li>
           <li><a href="<?php echo U('Hero/list');?>">查看英雄</a></li>
        </ul>
    </div>
</div>
<!-- 主体内容 -->
<section class="content">
    <!-- 您的网页内容在这里-->
    

<div class="main">
    <form>
        
        <label>类型</label>
        <select>
            <option>微信</option>
            <option>QQ</option>
        </select>
        
        <label>账号</label>
        <input type="" />
        <button></button>
    </form>
</div>
</section>
<!-- /.content -->
</body>
</html>