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
    
js验证匹配等页面定了以后再做
<div>
<h1>主玩-自动匹配</h1>
<form method="post" action="<?php echo U('saveAutoMatch');?>" >
<h2>可匹配结果</h2>
<button>一键保存</button>
<table>
	<tr>
		<th>英雄名</th>
		<th>匹配结果</th>
		<th>可选用户(下拉框): </th>
		<th>操作</th>
	</tr>
	<?php if(is_array($auto_match)): foreach($auto_match as $key=>$item): ?><tr>
		<td>
			<input type="hidden" name="hero_id[]" value="<?php echo ($item["hero_id"]); ?>" />
			<?php echo ($item["hero_name"]); ?>
		</td>
		<td>
			<?php echo ($item["name"]); ?>
			<?php if($item["type"] == 1): ?>微信<?php endif; ?>
			<?php if($item["type"] == 2): ?>QQ<?php endif; ?>
			<?php echo ($item["account"]); ?> 
			<?php echo ($item["area_no"]); ?>区
			<?php echo ($item["level"]); ?>级
			<?php echo ($item["money"]); ?>金
		</td>
		<td>
			<select name="user_id[]">
				<option value="<?php echo ($item["user_id"]); ?>">
					<?php echo ($item["name"]); ?>
					<?php if($item["type"] == 1): ?>微信<?php endif; ?>
					<?php if($item["type"] == 2): ?>QQ<?php endif; ?>
					<?php echo ($item["account"]); ?> 
					<?php echo ($item["area_no"]); ?>区
					<?php echo ($item["level"]); ?>级
					<?php echo ($item["money"]); ?>金
				</option>
				<?php if(is_array($hero_type)): $i = 0; $__LIST__ = $hero_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$heros): $mod = ($i % 2 );++$i; endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</td>
		<td>
			<a href="">详情</a>
			<a href="">保存</a>
		</td>
	</tr><?php endforeach; endif; ?>
</table>
<h2>手动匹配</h2>
<table>
	<tr>
		<th>英雄名</th>
		<th>可选用户(下拉框): </th>
		<th>操作</th>
	</tr>
	<?php if(is_array($no_auto)): foreach($no_auto as $key=>$noauto): ?><tr>
		<td>
			<input type="hidden" name="hero_id[]" value="<?php echo ($noauto["hero_id"]); ?>" />
			<?php echo ($noauto["hero_name"]); ?>
		</td>
		<td>
			<select name="user_id[]">
				<?php if(is_array($noauto['having_users'])): $i = 0; $__LIST__ = $noauto['having_users'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$having_users): $mod = ($i % 2 );++$i;?><option value="<?php echo ($having_users["user_id"]); ?>">
						<?php echo ($having_users['name']); ?>
						<?php if($having_users["type"] == 1): ?>微信<?php endif; ?>
						<?php if($having_users["type"] == 2): ?>QQ<?php endif; ?>
						<?php echo ($having_users["account"]); ?> 
						<?php echo ($having_users["area_no"]); ?>区
						<?php echo ($having_users["level"]); ?>级
						<?php echo ($having_users["money"]); ?>金
						<?php echo ($having_users["cc"]); ?>场数
					</option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</td>
		<td>
			<a href="">详情</a>
			<a href="">保存</a>
		</td>
	</tr><?php endforeach; endif; ?>
</table>
</form>
<h2>未拥有英雄</h2>
<?php if (!empty($unown_hero)): ?>
<table>
	<tr>
		<th>英雄名</th>
		<th>金</th>
	</tr>
	<?php if(is_array($unown_hero)): foreach($unown_hero as $key=>$unown_hero): ?><tr>
		<td><?php echo ($unown_hero["hero_name"]); ?></td>
		<td><?php echo ($unown_hero["money"]); ?></td>
	</tr><?php endforeach; endif; ?>
</table>
<?php endif; ?>

<h2>未匹配角色</h2>
<?php if (!empty($unown_user)): ?>
<table>
	<tr>
		<th>类型</th>
		<th>账号</th>
		<th>大区</th>
		<th>用户名</th>
		<th>等级</th>
		<th>金</th>
		<th>拥有英雄</th>
	</tr>
	<?php if(is_array($unown_user)): foreach($unown_user as $key=>$unown_user): ?><tr>
		<td>
			<?php if($unown_user["type"] == 1): ?>微信
			<?php elseif($unown_user["type"] == 2): ?>QQ<?php endif; ?>
		</td>
		<td><?php echo ($unown_user["account"]); ?></td>
		<td><?php echo ($unown_user["area_no"]); ?></td>
		<td><?php echo ($unown_user["name"]); ?></td>
		<td><?php echo ($unown_user["level"]); ?></td>
		<td><?php echo ($unown_user["money"]); ?></td>
		<td><?php echo ($unown_user["having_hero"]); ?></td>
	</tr><?php endforeach; endif; ?>
</table>
<?php endif; ?>
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