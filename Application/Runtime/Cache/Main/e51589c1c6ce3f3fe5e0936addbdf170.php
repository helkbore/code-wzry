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
	<!-- 搜索框 -->
	<div class="panel panel-default"><div class="panel-body">
		<form class="form-inline" action="<?php echo U('Index/saveUpuser');?>" id="upuser_submit" method="post">
			<div class="form-group">
				<label class="" for="type">待更新的角色  </label>
				<select  name="type" class="form-control" id="type">
					<option value="1">微信</option>
					<option value="2">QQ</option>
				</select>
			</div>
			<div class="form-group">
				<label class="sr-only" for="account">账号</label>
				<input type="text" class="form-control input-size-max" id="account" placeholder="账号" name="account">
			</div>
			<div class="form-group">
				<label class="sr-only" for="area_no">大区</label>
				<input type="text" class="form-control input-size-min" id="area_no" placeholder="大区" name="area_no">
			</div>
			
			<div class="form-group">
				<label class="sr-only" for="user_name">角色名</label>
				<input type="text" class="form-control input-size- mid" id="user_name" placeholder="角色名" name="user_name">
			</div>
			<button type="submit" class="btn btn-primary"  id="submit_upuser_btn">提交</button>
		</form>
	</div></div>
	
	<!-- custom 左列 -->
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3">
			<h2 class="sr-only">待更新User</h2>
			<ul class="list-group">
				<?php if(is_array($update_hero)): foreach($update_hero as $key=>$update_hero): ?><li class="list-group-item">
					<div>
						<span class="font-mid "><?php echo ($update_hero["user_name"]); ?></span>
						<span class="font-min list-date "><?php echo date('Y-m-d',$update_hero['last_time']);?></span>
					</div>
					<div class="padding-mid " >
						<?php if($update_hero["type"] == 1): ?><i class="fa fa-weixin color-red font-icon-common" aria-hidden="true"></i>
						<?php elseif($update_hero["type"] == 2): ?><i class="fa fa-qq  color-red font-icon-common" aria-hidden="true"></i><?php endif; ?>
					
						<span><?php echo ($update_hero["account"]); ?>-<?php echo ($update_hero["area_no"]); ?>区</span>
					</div>
				</li><?php endforeach; endif; ?>
			</ul>
			
			<ul class="list-group">
				<p class="list-group-item title">未拥有的英雄</p>
				<?php if(is_array($unown_hero)): foreach($unown_hero as $key=>$unown_hero): ?><li class="list-group-item">
						<?php echo ($unown_hero["hero_name"]); echo ($unown_hero["money"]); ?>
					</li><?php endforeach; endif; ?>
			</ul>
			
			<ul class="list-group">
				<p class="list-group-item title">购买英雄参考角色</p>
				<li class="list-group-item">13888</li>
				<?php if(is_array($buy_hero)): foreach($buy_hero as $key=>$buy_hero): ?><li class="list-group-item">
						<?php echo ($buy_hero["area_no"]); ?>区
						<?php if($buy_hero["type"] == 1): ?><i class="fa fa-weixin color-red font-icon-common" aria-hidden="true"></i>
						<?php elseif($buy_hero["type"] == 2): ?><i class="fa fa-qq color-red font-icon-common" aria-hidden="true"></i><?php endif; ?>
						<?php echo ($buy_hero["account"]); ?>
						<i class="fa fa-dollar  color-red font-icon-common" aria-hidden="true"></i><?php echo ($buy_hero["money"]); ?>
						<i class="fa fa-user color-red"></i> <?php echo ($buy_hero["hcount"]); ?>
						
					</li><?php endforeach; endif; ?>
				
				<li class="list-group-item">18888</li>
				<?php if(is_array($buy_hero_eight)): foreach($buy_hero_eight as $key=>$buy_hero_eight): ?><li class="list-group-item">
						<?php echo ($buy_hero_eight["area_no"]); ?>区
						<?php if($buy_hero_eight["type"] == 1): ?><i class="fa fa-weixin color-red font-icon-common" aria-hidden="true"></i>
						<?php elseif($buy_hero_eight["type"] == 2): ?><i class="fa fa-qq color-red font-icon-common" aria-hidden="true"></i><?php endif; ?>
						<?php echo ($buy_hero_eight["account"]); ?>
						<i class="fa fa-dollar  color-red font-icon-common" aria-hidden="true"></i><?php echo ($buy_hero_eight["money"]); ?>
						<i class="fa fa-user color-red"></i> <?php echo ($buy_hero_eight["hcount"]); ?>
						
					</li><?php endforeach; endif; ?>
			</ul>
			
			<ul class="list-group">
				<p class="list-group-item title">主号</p>
				<?php if(is_array($max_level_user)): foreach($max_level_user as $key=>$max_level_user): ?><li class="list-group-item">
						<?php echo ($max_level_user["area_no"]); ?>区
						<?php if($max_level_user["type"] == 1): ?><i class="fa fa-weixin color-red font-icon-common" aria-hidden="true"></i>
						<?php elseif($max_level_user["type"] == 2): ?><i class="fa fa-qq color-red font-icon-common" aria-hidden="true"></i><?php endif; ?>
						<?php echo ($max_level_user["account"]); ?>
						<i class="fa fa-dollar  color-red font-icon-common" aria-hidden="true"></i><?php echo ($max_level_user["money"]); ?>
						<i class="fa fa-level-up color-red"></i> <?php echo ($max_level_user["level"]); ?>
						
					</li><?php endforeach; endif; ?>
			</ul>
			
			<ul class="list-group">
				<p class="list-group-item title">获取英雄数前10的角色</p>
				<?php if(is_array($hero_list)): foreach($hero_list as $key=>$hero_list): ?><li class="list-group-item">
						<?php echo ($hero_list["area_no"]); ?>区
						<?php if($hero_list["type"] == 1): ?><i class="fa fa-weixin color-red font-icon-common" aria-hidden="true"></i>
						<?php elseif($hero_list["type"] == 2): ?><i class="fa fa-qq color-red font-icon-common" aria-hidden="true"></i><?php endif; ?>
						<?php echo ($hero_list["account"]); ?>
						<i class="fa fa-dollar  color-red font-icon-common" aria-hidden="true"></i><?php echo ($hero_list["money"]); ?>
						<i class="fa fa-user color-red"></i> <?php echo ($hero_list["hcount"]); ?>
						
					</li><?php endforeach; endif; ?>
			</ul>
			
			<ul class="list-group">
				<p class="list-group-item title">获取铭文前10</p>
				<?php if(is_array($mingwen_list)): foreach($mingwen_list as $key=>$mingwen_list): ?><li class="list-group-item">
						<?php echo ($mingwen_list["area_no"]); ?>区
						<?php if($mingwen_list["type"] == 1): ?><i class="fa fa-weixin color-red font-icon-common" aria-hidden="true"></i>
						<?php elseif($mingwen_list["type"] == 2): ?><i class="fa fa-qq color-red font-icon-common" aria-hidden="true"></i><?php endif; ?>
						<?php echo ($mingwen_list["account"]); ?>
						<i class="fa fa-dollar  color-red font-icon-common" aria-hidden="true"></i><?php echo ($mingwen_list["money"]); ?>
						<i class="fa fa-lemon-o color-red"></i> <?php echo ($mingwen_list["mingwen"]); ?>
						
					</li><?php endforeach; endif; ?>
			</ul>
			
			<ul class="list-group">
				<p class="list-group-item title">获取总场数前10</p>
				<?php if(is_array($changshu_list)): foreach($changshu_list as $key=>$changshu_list): ?><li class="list-group-item">
						<?php echo ($changshu_list["area_no"]); ?>区
						<?php if($changshu_list["type"] == 1): ?><i class="fa fa-weixin color-red font-icon-common" aria-hidden="true"></i>
						<?php elseif($changshu_list["type"] == 2): ?><i class="fa fa-qq color-red font-icon-common" aria-hidden="true"></i><?php endif; ?>
						<?php echo ($changshu_list["account"]); ?>
						<i class="fa fa-dollar  color-red font-icon-common" aria-hidden="true"></i><?php echo ($changshu_list["money"]); ?>
						<i class="fa fa-pie-chart color-red"></i> <?php echo ($changshu_list["changshu"]); ?>
						
					</li><?php endforeach; endif; ?>
			</ul>
			
			<ul class="list-group">
				<p class="list-group-item title">账号角色数排行</p>
				<?php if(is_array($user_count)): foreach($user_count as $key=>$user_count): ?><li class="list-group-item">
						
						<?php if($user_count["type"] == 1): ?><i class="fa fa-weixin color-red font-icon-common" aria-hidden="true"></i>
						<?php elseif($user_count["type"] == 2): ?><i class="fa fa-qq color-red font-icon-common" aria-hidden="true"></i><?php endif; ?>
						<?php echo ($user_count["account"]); ?>
						<i class="fa fa-venus-mars color-red font-icon-common" aria-hidden="true"></i>
						<?php echo ($user_count["user_count"]); ?>
						
						
					</li><?php endforeach; endif; ?>
			</ul>
			
		</div>
		
		<!-- cutom 中列 -->
		<div class="col-xs-12 col-sm-6 col-md-6 span-list" >
		
			
			
			<!-- custom 金 -->
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<ul class="list-group">
						<p class="list-group-item title">微信</p>
						<?php if(is_array($wx_money_list)): foreach($wx_money_list as $key=>$wx_money_list): ?><li class="list-group-item">
								<?php echo ($wx_money_list["account"]); ?>:<?php echo ($wx_money_list["area_no"]); ?>区 <?php echo ($wx_money_list["name"]); ?> : 
								
								<span class=""><i class="fa fa-dollar  color-red font-icon-common" aria-hidden="true"></i> <?php echo ($wx_money_list["money"]); ?></span>
							</li><?php endforeach; endif; ?>
					</ul>
				</div>
				<div class="col-xs-12 col-md-6">
					<ul class="list-group">
						<p class="list-group-item title">QQ</p>
						<?php if(is_array($qq_money_list)): foreach($qq_money_list as $key=>$qq_money_list): ?><li class="list-group-item">
							<?php echo ($qq_money_list["account"]); ?>: <?php echo ($qq_money_list["area_no"]); ?>区 <?php echo ($qq_money_list["name"]); ?> : 
							<span class=""><i class="fa fa-dollar  color-red font-icon-common" aria-hidden="true"></i> <?php echo ($qq_money_list["money"]); ?>
						</li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
			
			
			<!-- custom 钻 -->
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<ul class="list-group">
						<p class="list-group-item title">微信</p>
						<?php if(is_array($wx_diamond_list)): foreach($wx_diamond_list as $key=>$wx_diamond_list): ?><li class="list-group-item">
								<?php echo ($wx_diamond_list["account"]); ?>: <?php echo ($wx_diamond_list["name"]); ?> : 
								<span class=""><i class="fa fa-diamond  color-red font-icon-common" aria-hidden="true"></i> <?php echo ($wx_diamond_list["diamond"]); ?></span>
							</li><?php endforeach; endif; ?>
					</ul>
				</div>
				<div class="col-xs-12 col-md-6">
					<ul class="list-group">
						<p class="list-group-item title">QQ</p>
						<?php if(is_array($qq_diamond_list)): foreach($qq_diamond_list as $key=>$qq_diamond_list): ?><li class="list-group-item">
							<?php echo ($qq_diamond_list["account"]); ?>: <?php echo ($qq_diamond_list["name"]); ?> : 
							<span class=""><i class="fa fa-diamond color-red font-icon-common" aria-hidden="true"></i> <?php echo ($qq_diamond_list["diamond"]); ?>
						</li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
			
			
			
			<!-- custom 等级 -->
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<ul class="list-group">
						<p class="list-group-item title">微信</p>
						<?php if(is_array($wx_level_list)): foreach($wx_level_list as $key=>$wx_level_list): ?><li class="list-group-item">
								<?php echo ($wx_level_list["account"]); ?>: <?php echo ($wx_level_list["name"]); ?> : 
								<span class=""><i class="fa fa-gbp  color-red font-icon-common" aria-hidden="true"></i> <?php echo ($wx_level_list["level"]); ?></span>
							</li><?php endforeach; endif; ?>
					</ul>
				</div>
				<div class="col-xs-12 col-md-6">
					<ul class="list-group">
						<p class="list-group-item title">QQ</p>
						<?php if(is_array($qq_level_list)): foreach($qq_level_list as $key=>$qq_level_list): ?><li class="list-group-item">
							<?php echo ($qq_level_list["account"]); ?>: <?php echo ($qq_level_list["name"]); ?> : 
							<span class=""><i class="fa fa-gbp color-red font-icon-common" aria-hidden="true"></i> <?php echo ($qq_level_list["level"]); ?>
						</li><?php endforeach; endif; ?>
					</ul>
				</div>

			</div>
			
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<ul class="list-group">
						<p class="list-group-item title">等级最低</p>
						<?php if(is_array($level_low_list)): foreach($level_low_list as $key=>$level_low_list): ?><li class="list-group-item">
								<?php echo ($level_low_list["account"]); ?>: <?php echo ($level_low_list["name"]); ?> : 
								<span class=""><i class="fa fa-gbp  color-red font-icon-common" aria-hidden="true"></i> <?php echo ($level_low_list["level"]); ?></span>
							</li><?php endforeach; endif; ?>
					</ul>
				</div>
				<div class="col-xs-12 col-md-6">
					<ul class="list-group">
						<p class="list-group-item title">铭文最低</p>
						<?php if(is_array($mingwen_low_list)): foreach($mingwen_low_list as $key=>$mingwen_low_list): ?><li class="list-group-item">
							<?php echo ($mingwen_low_list["account"]); ?>: <?php echo ($mingwen_low_list["name"]); ?> : 
							<span class=""><i class="fa fa-lemon-o color-red font-icon-common" aria-hidden="true"></i> <?php echo ($mingwen_low_list["level"]); ?>
						</li><?php endforeach; endif; ?>
					</ul>
				</div>

			</div>
			
			
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<ul class="list-group">
						<p class="list-group-item title">英雄角色数</p>
						<?php if(is_array($hero_user_num)): foreach($hero_user_num as $key=>$hero_user_num): ?><li class="list-group-item">
								<?php echo ($hero_user_num["hero_name"]); ?> 
								<i class="fa fa-venus-mars color-red font-icon-common" aria-hidden="true"></i>
								<?php echo ($hero_user_num["count"]); ?> 
							</li><?php endforeach; endif; ?>
					</ul>
				</div>
				<div class="col-xs-12 col-md-6">
					<ul class="list-group">
						<p class="list-group-item title">每个英雄场次最高的角色账号</p>
						<?php if(is_array($cc_hero_user)): foreach($cc_hero_user as $key=>$cc_hero_user): ?><li class="list-group-item">
							<?php echo ($cc_hero_user["hero_name"]); ?> 
							<?php if($cc_hero_user["type"] == 1): ?><i class="fa fa-weixin color-red font-icon-common" aria-hidden="true"></i>
							<?php elseif($cc_hero_user["type"] == 2): ?><i class="fa fa-qq color-red font-icon-common" aria-hidden="true"></i><?php endif; ?>
							<?php echo ($cc_hero_user["account"]); ?>:<?php echo ($cc_hero_user["area_no"]); ?>区 <?php echo ($cc_hero_user["cc"]); ?> 场
						</li><?php endforeach; endif; ?>
					</ul>
				</div>

			</div>
			
			
		</div>
		
		
		<!-- 右列 -->
		<div class="col-xs-12 col-sm-6 col-md-3">
			<ul class="list-group">
				<p class="list-group-item title">未设置主玩的角色</p>
				<?php if(is_array($unown_user)): foreach($unown_user as $key=>$unown_user): ?><li  class="list-group-item">
						<p>
							<?php if($unown_user["type"] == 1): ?><i class="fa fa-weixin color-red font-icon-common" aria-hidden="true"></i>
							<?php elseif($unown_user["type"] == 2): ?><i class="fa fa-qq color-red font-icon-common" aria-hidden="true"></i><?php endif; ?>
							<?php echo ($unown_user["account"]); ?> <?php echo ($unown_user["area_no"]); ?>区 <?php echo ($unown_user["name"]); ?>
						<p>
						<p><?php echo ($unown_user["having_hero"]); ?></p>
						<p>
							<i class="fa fa-dollar color-red font-icon-common" aria-hidden="true"></i> <?php echo ($unown_user["money"]); ?>
							<i class="fa fa-gbp color-red font-icon-common" aria-hidden="true"></i> <?php echo ($unown_user["level"]); ?>
							<i class="fa fa-diamond color-red font-icon-common" aria-hidden="true"></i> <?php echo ($unown_user["diamond"]); ?>
						</p>
					</li><?php endforeach; endif; ?>
			</ul>
			
			
			<ul class="list-group">
				<p class="list-group-item title">英雄主玩角色</p>
				<?php if(is_array($main_hero_list)): foreach($main_hero_list as $key=>$main_hero_list): ?><li  class="list-group-item">
						<p>
							<?php echo ($main_hero_list["hero_name"]); ?>
							<?php if($main_hero_list["type"] == 1): ?><i class="fa fa-weixin color-red font-icon-common" aria-hidden="true"></i>
							<?php elseif($main_hero_list["type"] == 2): ?><i class="fa fa-qq color-red font-icon-common" aria-hidden="true"></i><?php endif; ?>
							<?php echo ($main_hero_list["account"]); ?> <?php echo ($main_hero_list["area_no"]); ?>区 <?php echo ($main_hero_list["name"]); ?>
						<p>
						
						
					</li><?php endforeach; endif; ?>
			</ul>
		</div>
	</div>
</div>

<script>
(function(){
	$('#submit_upuser_btn').click(function(e){
		
		$('#upuser_submit').submit();
	});
})();
</script>
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