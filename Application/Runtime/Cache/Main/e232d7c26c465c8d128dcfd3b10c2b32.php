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
	<input type="hidden" id="selected_hero_json" value='<?php echo ($hero_selected); ?>' />
    <form method="post" action="<?php echo U('dosave');?>">
        <input type="hidden" name="user_id" value="<?php echo ($user["user_id"]); ?>" />
        <label>类型</label>
        <select name="type" id="select_type">
            <option value="1" <?php if($user["type"] == 1): ?>selected<?php endif; ?>>微信</option>
            <option value="2" <?php if($user["type"] == 2): ?>selected<?php endif; ?>>QQ</option>
        </select>
        <label>账号</label>
        <select name="account_id" id="select_account">
			<option>请选择</option>
			<?php if(is_array($account_wx)): foreach($account_wx as $key=>$account): ?><option value="<?php echo ($account["account_id"]); ?>" data-account-type="1" <?php if($user['account_id'] == $account['account_id']): ?>selected<?php endif; ?> ><?php echo ($account["account"]); ?></option><?php endforeach; endif; ?>
		
			<?php if(is_array($account_qq)): foreach($account_qq as $key=>$account): ?><option value="<?php echo ($account["account_id"]); ?>" data-account-type="2"  class="hide" <?php if($user['account_id'] == $account['account_id']): ?>selected<?php endif; ?> ><?php echo ($account["account"]); ?></option><?php endforeach; endif; ?>
        </select>
        <label>大区</label>
        <select name="area_id" id="select_area">
			<option>请选择</option>
            <?php if(is_array($area)): foreach($area as $key=>$area): ?><option value="<?php echo ($area["area_id"]); ?>" data-area-type="<?php echo ($area["type"]); ?>" 
						<?php if (empty($user) && $area['type'] == 2): ?>
							class="hide"
						<?php endif; ?>
						<?php if($user['area_id'] == $area['area_id']): ?>selected<?php endif; ?> >
					<?php echo ($area["area_no"]); ?> <?php echo ($area["area_name"]); ?>
				</option><?php endforeach; endif; ?>
        </select>
        <label>角色名</label>
        <input type="text" name="name" value="<?php echo ($user["name"]); ?>" />
        <label>等级</label>
        <input type="text" name="level" value="<?php echo ($user["level"]); ?>" />
        <label>金钱</label>
        <input type="text" name="money"  value="<?php echo ($user["money"]); ?>" />
        <label>钻石</label>
        <input type="text" name="diamond"  value="<?php echo ($user["diamond"]); ?>" />
        <!-- <div> -->
			<!-- <label>英雄查询</label> -->
			<!-- <input type="text" /> -->
			<!-- <button>查询</button> -->
		<!-- </div> -->
	<p>已选英雄: </p>
	<div id="div_show_hero"><p></p></div>
	<div id="checkbox_hero">
		<label>英雄</label>
		<?php if(is_array($hero)): foreach($hero as $key=>$hero_type): ?><div>
				<?php if($key == 't'): ?><p>坦克</p><?php endif; ?>
				<?php if($key == 'zs'): ?><p>战士</p><?php endif; ?>
				<?php if($key == 'ck'): ?><p>刺客</p><?php endif; ?>
				<?php if($key == 'fs'): ?><p>法师</p><?php endif; ?>
				<?php if($key == 'lr'): ?><p>射手</p><?php endif; ?>
				<?php if($key == 'fz'): ?><p>辅助</p><?php endif; ?>
				
				<?php if(is_array($hero_type)): $i = 0; $__LIST__ = $hero_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$heros): $mod = ($i % 2 );++$i;?><input type="checkbox"  value="<?php echo ($heros["hero_id"]); ?>"  data-name="<?php echo ($heros["hero_name"]); ?>" ><?php echo ($heros["hero_name"]); endforeach; endif; else: echo "" ;endif; ?>
			</div><?php endforeach; endif; ?>
	</div>
	<button>提交</button>
	
    </form>
	<div id="hide_example">
		<input type="hidden" name="hero_id[]" value="" id="hide_hero_show" />
	</div>
</div>
<script>
(function(){
	// 获取账号的下拉框
	var select_account = document.getElementById('select_account');
	cleanWhitespace(select_account);
	var option_account = getFirstLevelChild(select_account, 'option');
	
	// 获取大区的下拉框
	var select_area = document.getElementById('select_area');
	cleanWhitespace(select_area);
	var option_area = getFirstLevelChild(select_area, 'option');

	// 选择账号类型后 账号, 大区下拉框匹配类型
	$('#select_type').bind('change', function(e){
		option_account[0].className="";
		option_account[0].selected="true";
		option_area[0].className="";
		option_area[0].selected="true";
		
		
		var account_type, selected_type, area_type;
		selected_type = this.value;
		
		// 匹配账号下拉框
		for ( var i = 0; i < option_account.length; i++ ) {
			account_type = option_account[i].getAttribute('data-account-type');
			// area_typ = option_account[i].getAttribute('data-area-type');
			// console.log('selected_type' + selected_type);
			// console.log('account_type' + account_type);
			if (selected_type - account_type == 0) {
				// console.log(account_type);
				// console.log(option_account[i].className);
				option_account[i].className = "";
			} else {
				option_account[i].className = "hide";
			}
		}
		
		// console.log(option_area);
		// 匹配大区下拉框
		for (var i = 0; i < option_area.length; i++) {
			area_type = option_area[i].getAttribute('data-area-type');
			
			if (selected_type - area_type == 0) {
				option_area[i].className = "";
			} else {
				option_area[i].className = "hide";
			}
		}
		
	});

})();

// $('select_account').bind('change', function(e){});
// alert($('#test').attr('data-account-type'));
</script>


<script>
(function(){
	
	var checkbox_hero = document.getElementById('checkbox_hero');
	var div_show_hero = document.getElementById('div_show_hero');
	cleanWhitespace(checkbox_hero);
	// console.log(checkbox_option);
	checkbox_option = getChild(checkbox_hero, 'input');
	// console.log(checkbox_option);
	
	var temp_jq_checkbox;
	var check_array = [];
	
	// check_array = checkHero(checkbox_option);
	// writeShow(div_show_hero, checkHero(checkbox_option));
	
	var selected_hero_json = $('#selected_hero_json').val();
	var selected_hero_array = $.parseJSON(selected_hero_json);
	
	for (var i = 0; i < checkbox_option.length; i++ ) {
		// 若该英雄已选择, 则自动选上(适用于编辑)
		for (var j = 0; j < selected_hero_array.length; j++ ) {
			console.log('start');
			console.log(selected_hero_array[j]);
			console.log(checkbox_option[i].value);
			console.log('end');
			if ( selected_hero_array[j] == checkbox_option[i].value ) {
				checkbox_option[i].checked = true;
			}
		}
		
		writeShow(div_show_hero, checkHero(checkbox_option));
		// dom对象 转换为 jquery 对象
		temp_jq_checkbox = $(checkbox_option[i]);
		temp_jq_checkbox.bind('change', function(){
			check_array = checkHero(checkbox_option);
			writeShow(div_show_hero, check_array);
		});
	}
	
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