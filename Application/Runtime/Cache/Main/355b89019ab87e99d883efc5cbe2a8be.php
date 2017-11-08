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
    
<div class="container">
	
	<div class="panel panel-default">
		<div class="panel-heading">
			
			<?php if($account["type"] == 1): ?><i class="fa fa-weixin font-mid color-red" aria-hidden="true"></i>
			<?php elseif($account["type"] == 2): ?> <i class="fa fa-qq font-mid color-red" aria-hidden="true"></i><?php endif; ?>
			
			<?php echo ($account["account"]); ?>  
			<span class="badge"> 共<?php echo ($account["user_num"]); ?>个角色</span>
		</div>
		<div class="panel-body">
			<div class="row">
				<?php if(is_array($users)): foreach($users as $key=>$item): ?><div class="col-xs-12 col-sm-6 col-md-3">
					<ul class="list-group">
						 <li class="list-group-item">
							<?php echo ($item["name"]); ?> <i class="fa fa-home" aria-hidden="true"></i><?php echo ($item["area_no"]); ?>区 <?php echo ($item["area_name"]); ?> 
							<input type="hidden" name="user_id" value="<?php echo ($item["user_id"]); ?>" />
						</li>
						
						<li class="list-group-item">
						<?php if(is_array($item['hero'])): $i = 0; $__LIST__ = $item['hero'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$heros): $mod = ($i % 2 );++$i; echo ($heros["hero_name"]); ?> ,<?php endforeach; endif; else: echo "" ;endif; ?>
						</li>
						
						<li class="list-group-item">
						
							<i class="fa fa-gbp color-red font-icon-common" aria-hidden="true"></i>  <?php echo ($item["level"]); ?>
							<i class="fa fa-dollar color-red font-icon-common" aria-hidden="true"></i>  <?php echo ($item["money"]); ?>
							<i class="fa fa-diamond color-red font-icon-common" aria-hidden="true"></i> 钻石: <?php echo ($item["diamond"]); ?>
						</li>
						<li class="list-group-item">
						
						主玩: 
						<?php if(is_array($item['main_hero'])): $i = 0; $__LIST__ = $item['main_hero'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$main_hero): $mod = ($i % 2 );++$i; echo ($main_hero['hero_name']); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
						</li>
						<li  class="list-group-item"><?php echo date('Y-m-d H:i:s',$item['last_time']);?></li>
						<li  class="list-group-item">
							<span class="label label-info color-light"><a href="<?php echo U('User/dodel',array('user_id'=>$item['user_id']));?>">删除</a></span>
							<span class="label label-info color-light"><a href="<?php echo U('User/edit',array('user_id'=>$item['user_id']));?>">编辑</a></span>
							<span class="label label-info color-light"><a href="<?php echo U('User/setMain',array('user_id'=>$item['user_id']));?>">设置主玩英雄</a></span>
						</li>
					</ul>
				</div><?php endforeach; endif; ?>
				
			</div>
		</div>
		<div class="panel-footer"></div>
	</div>
	


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