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
    <script src="/wzry/Public/Static/js/jquery-3.2.1.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/wzry/Public/Static/bootstrap/js/bootstrap.min.js"></script>
	<script src="/wzry/Public/Static/js/myfunction.js?v=1.2"></script>
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
		   <li><a href="<?php echo U('Index/index');?>">首页</a></li>
           <li><a href="<?php echo U('Account/showAll');?>">账号管理</a></li>
		   <li><a href="<?php echo U('Area/showAll');?>">大区维护</a></li>
           <li><a href="<?php echo U('User/showAll');?>">查看角色</a></li>
           <li><a href="<?php echo U('Hero/showAll');?>">查看英雄</a></li>
           <li><a href="<?php echo U('Data/index');?>">数据查询</a></li>
		   <li><a href="<?php echo U('Data/index');?>">数据分析</a></li>
           
        </ul>
    </div>
</div>
<!-- 主体内容 -->
<section class="content">
    <!-- 您的网页内容在这里-->
    
<div>
<form id="main_hero" method="post" action="<?php echo U('saveSetMain');?>">
	<input type="hidden" name="user_id" value="<?php echo ($user["user_id"]); ?>" />
	<p>每个角色可设置两个主玩英雄</p>
	<ul>
	<p>角色信息</p>
		<li>
			<?php if($user["type"] == 1): ?>微信
			<?php elseif($user["type"] == 2): ?>QQ<?php endif; ?>
			-<?php echo ($user["account"]); ?>-<?php echo ($user["area_no"]); ?>区: <?php echo ($user["area_name"]); ?>
		</li>
		
		<li><?php echo ($user["name"]); ?>-<?php echo ($user["level"]); ?>级 -<?php echo ($user["money"]); ?>金- <?php echo ($user["diamond"]); ?>钻</li>
		
		<li>
			<ul>
				<?php if(is_array($user['hero'])): foreach($user['hero'] as $key=>$hero): ?><li><input type="checkbox" value="<?php echo ($hero['hero_id']); ?>" name="main_hero[]"/><?php echo ($hero['hero_name']); ?></li><?php endforeach; endif; ?>
			</ul>
		</li>
	</ul>

	<button>设为主玩</button>
</form>
</div>

<script>
// 检查复选框不能超过三个
var checked_array = [];
var checkboxes = $("input[type='checkbox']");
var i, j,jquery_checkboxex;


// 获取已选复选框数组
function doCheck() {
	var main_hero_limit = 2;
	for ( i = 0, j = 0; i < checkboxes.length; i++ ) {
		if ( checkboxes[i].checked ) {
			checked_array[j] = checkboxes[i];
			j++;
		}
	}

	if ( checked_array.length > main_hero_limit ) {
		return false;
	}
	
	return checked_array;
}


// console.log(checked_array);

for (i = 0; i < checkboxes.length; i++ ) {
	jquery_checkboxex = $(checkboxes[i]);
	jquery_checkboxex.bind('change', function() {
		var result = doCheck();
		if (!result) {
			alert('主玩英雄超出数量');
		}
	});
}

$('#main_hero').bind('submit', function(e){
	if ( !doCheck() ) {
		e.preventDefault();
		e.stopPropagation(); 
		return false;
	}
	
});

</script>
</section>
<!-- /.content -->
</body>
</html>