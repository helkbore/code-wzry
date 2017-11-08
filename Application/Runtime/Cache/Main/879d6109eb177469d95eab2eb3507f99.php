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
    
<div>
	<p>
		<?php echo ($hero_info["hero_name"]); ?>: <?php echo ($hero_info["hero_type"]); echo ($hero_info["money"]); ?>金 角色: <?php echo ($hero_info["user_num"]); ?> 主玩: <?php echo ($hero_info["main_num"]); ?>
	</p>
	<ul>
		<li>拥有角色
			<ul>
				<?php if(is_array($users)): foreach($users as $key=>$user): ?><li>
					<?php if($user["type"] == 1): ?>微信
					<?php elseif($user["type"] == 2): ?>QQ<?php endif; ?>
					<?php echo ($user["account"]); ?>-<?php echo ($user["area_no"]); ?>区
				</li>
				<li>
					<?php echo ($user["name"]); ?>: <?php echo ($user["level"]); ?>级<?php echo ($user["money"]); ?>金<?php echo ($user["diamond"]); ?>钻
				</li>
				
				<li>
					英雄: 
					<?php if(is_array($user['hero'])): $i = 0; $__LIST__ = $user['hero'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$heros): $mod = ($i % 2 );++$i; echo ($heros["hero_name"]); ?>,<?php endforeach; endif; else: echo "" ;endif; ?>
				</li>
				<li>
					主玩:
					<?php if(is_array($user['main_hero'])): $i = 0; $__LIST__ = $user['main_hero'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$main_hero): $mod = ($i % 2 );++$i; echo ($main_hero["hero_name"]); ?>,<?php endforeach; endif; else: echo "" ;endif; ?>
				</li>
				<li><a href="<?php echo U('setMainUser',array('hero_id' => $hero_info['hero_id'], 'user_id' => $heros['user_id']));?>">设为主玩</a></li><?php endforeach; endif; ?>
			</ul>
		<li>主玩角色: 
			<?php if(is_array($main_heros)): foreach($main_heros as $key=>$mh): echo ($mh["name"]); endforeach; endif; ?>
			
		</li>
		
	</ul>
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