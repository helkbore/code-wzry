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
    <link rel="stylesheet" href="/wzry/Public/Static/bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/wzry/Public/Static/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/wzry/Public/Static/plugins/ionicons/css/ionicons.min.css">
	<!-- 自定义样式 -->
	<link rel="stylesheet" href="/wzry/Public/Static/css/style.css?v=1.7">
	
	
	<!-- sweetalert -->
	<link rel="stylesheet" href="/wzry/Public/Static/css/sweet-alert.css?v=1">


    <!-- jQuery 2.2.3 -->
    <script src="/wzry/Public/Static/js/jquery-3.2.1.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/wzry/Public/Static/bootstrap/js/bootstrap.min.js"></script>
	<script src="/wzry/Public/Static/js/myfunction.js?v=1.4"></script>
	
	<!-- sweetalert -->
	<script src="/wzry/Public/Static/js/sweet-alert.js"></script>
	
	
</head>

<body class="hold-transition skin-blue sidebar-mini">
<!-- Content Header (Page header) 内容标题（页眉）-->

<nav id="nav_bolck" class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid bg-black">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Whellote</a>
			</div>
		
			<ul class="nav navbar-nav  navbar-static-top">
			   <li class="nav-li " id="menu_index"><a href="<?php echo U('Index/index');?>">首页</a></li>
			   <li class="nav-li " id="menu_account"><a href="<?php echo U('Account/showAll');?>">账号</a></li>
			   <li class="nav-li "  id="menu_area"><a href="<?php echo U('Area/showAll');?>">大区</a></li>
			   <li class="nav-li "  id="menu_user"><a href="<?php echo U('User/showAll');?>">角色</a></li>
			   <li class="nav-li "  id="menu_hero"><a href="<?php echo U('Hero/showAll');?>">英雄</a></li>
			   <li class="nav-li "  id="menu_query"><a href="<?php echo U('Data/index');?>">查询</a></li>
			   <li class="nav-li "  id="menu_data"><a href="<?php echo U('Data/index');?>">分析</a></li>
			</ul>
		</div>
		
	</div>
</nav>
<!-- 主体内容 -->
<section class="content">
    <!-- 您的网页内容在这里-->
    

<div class="main">
    <a href="<?php echo U('Hero/add');?>">添加英雄</a>
    <a href="<?php echo U('Hero/showConfigMain');?>">英雄-主玩通配</a>
	<a href="<?php echo U('Hero/showCc');?>">英雄场次统计</a>
	<!-- 
	<select>
		<option value="1">微信</option>
		<option value="2">QQ</option>
	</select>
	<button>查询</button> 
	-->
    <table>
        <tr>
            <td>英雄名</td>
            <td>类型</td>
            <td>价格</td>
			<td>是否拥有</td>
			<td>拥有角色数</td>
			<td>管理</td>
        </tr>
        
        <?php if(is_array($_list)): foreach($_list as $key=>$item): ?><tr>
                <td><?php echo ($item["hero_name"]); ?></td>
                <td><?php echo ($item["hero_type"]); ?></td>
				<td><?php echo ($item["money"]); ?></td>
				<td><?php echo ($item["is_have"]); ?></td>
				<td><?php echo ($item["hero_nums"]); ?></td>
                <td>
                    <a href="<?php echo U('dodel',array('hero_id'=>$item['hero_id']));?>">删除</a>
					<a href="<?php echo U('edit',array('hero_id'=>$item['hero_id']));?>">编辑</a>
					<a href="<?php echo U('showDetail',array('hero_id'=>$item['hero_id']));?>">详情</a>
					<!-- <a href="<?php echo U('showMain',array('hero_id'=>$item['hero_id']));?>">主玩角色</a> -->
					<!-- <a href="<?php echo U('showOwn',array('hero_id'=>$item['hero_id']));?>">拥有角色</a> -->
                </td>
            </tr><?php endforeach; endif; ?>
    </table>
</div>
</section>
<!-- /.content -->

<script>
// $("#_bolck").offset().top;
(function(){
	var nav_height = $("#nav_bolck").outerHeight(true);
	var _body = $("body");
	console.log(_body);
	_body.css("padding-top", nav_height);
	
	var menu = "<?php echo ($menu); ?>";
	console.log("#menu_" + menu);
	// $("#" + menu).css();
	// $("#menu_" + menu + "").attr("class")
	
	$("#menu_" + menu + "").addClass("active");
	console.log($("#menu_" + menu + "").attr("class"));
	// console.log(menu);
})();
</script>
</body>
</html>