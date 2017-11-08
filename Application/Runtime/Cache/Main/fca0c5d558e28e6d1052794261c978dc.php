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
    

<div class="container"><div class="panel panel-default"><div class="panel-body">
<div class="modal fade" id="add_area" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<form action="<?php echo U('Account/add');?>" method="post" id="form_add_area" class="form-inline">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">添加新区</h4>
			</div>
			<div class="modal-body">
				<div class="main">
					<form method="post" action="<?php echo U('dosave');?>" id="form_add_account"  class="form-inline">
						<input type="hidden" name="account_id" value="<?php echo ($account["account_id"]); ?>" />
						<div class="form-group">
							<label class="" for="type">类型</label>
							<select  name="type" class="form-control" id="type">
								<option value="1" <?php if($account["type"] == 1): ?>selected<?php endif; ?> >微信</option>
							<option value="2" <?php if($account["type"] == 2): ?>selected<?php endif; ?> >QQ</option>
							</select>
						</div>
						<div class="form-group">
							<label class="sr-only" for="area_no">大区</label>
							<input type="text" class="form-control input-size-max" id="area_no" placeholder="大区" name="area_no">
						</div>
										
						
					</form>
				</div>
			</div>
			<div class="modal-footer">
				
				<button type="button" class="btn btn-primary" id="btn_add_area">提交</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			</div>
		</form>
		</div>
	</div>
</div>
		
<form method="post" action="<?php echo U('User/dosave');?>" class="form-inline">
	<p><?php echo ($account); ?></p>
	<div class="my-block">
		<input type="hidden" name="back_url" value="<?php echo ($back_url); ?>" />
		<input type="hidden" name="account_id" value="<?php echo ($account_id); ?>" />
		<label class="sr-only" for="area_id">大区选择  </label>
		<select name="area_id"  class="form-control" id="area_id">
			<?php if(is_array($areas)): foreach($areas as $key=>$item): ?><option value="<?php echo ($item["area_id"]); ?>"><?php echo ($item["area_no"]); ?> <?php echo ($item["area_name"]); ?></option><?php endforeach; endif; ?>
		</select>
		<a class="btn btn-primary" href="javascript:void(0)"  id="link_add_area">添加新区</a>
		
		<div class="form-group">
			<label  class="sr-only" for="name">角色名</label>
			<input type="text" class="form-control input-size-mid" placeholder="角色名" name="name"  id="name" />
		</div>


		<div class="form-group">
			<label  class="sr-only" for="level">等级</label>
			<input type="text" class="form-control input-size-min" placeholder="等级" name="level"  id="level" />
		</div>
		
		<div class="form-group">
			<label  class="sr-only" for="changshu">场数</label>
			<input type="text" class="form-control input-size-min" placeholder="场数" name="changshu"  id="changshu" />
		</div>
		
		<div class="form-group">
			<label  class="sr-only" for="mingwen">铭文</label>
			<input type="text" class="form-control input-size-min" placeholder="铭文" name="mingwen"  id="mingwen" />
		</div>
		
		<div class="form-group">
			<label  class="sr-only" for="paiwei">排位</label>
			<input type="text" class="form-control input-size-mid" placeholder="排位" name="paiwei"  id="paiwei" />
		</div>
		
		<div class="form-group">
			<label  class="sr-only" for="money">金钱</label>
			<input type="text" class="form-control input-size-min" placeholder="金钱" name="money"  id="money" />
		</div>
		
		<div class="form-group">
			<label  class="sr-only" for="diamond">钻石</label>
			<input type="text" class="form-control input-size-min" placeholder="钻石" name="diamond"  id="diamond" />
		</div>
		
		<div class="form-group">
			<label  class="sr-only" for="pfsp">皮肤碎片</label>
			<input type="text" class="form-control input-size-min" placeholder="皮肤碎片" name="pfsp"  id="pfsp" />
		</div>
		
		<div class="form-group">
			<label  class="sr-only" for="yxsp">英雄碎片</label>
			<input type="text" class="form-control input-size-min" placeholder="英雄碎片" name="yxsp"  id="yxsp" />
		</div>
		
		<div class="form-group">
			<label  class="sr-only" for="xyz">幸运值</label>
			<input type="text" class="form-control input-size-min" placeholder="幸运值" name="xyz"  id="xyz" />
		</div>
		
		<div class="form-group">
			<label  class="sr-only" for="mwz">铭文值</label>
			<input type="text" class="form-control input-size-min" placeholder="铭文值" name="mwz"  id="mwz" />
		</div>
		
		<div class="form-group">
			<div class="radio">
			  <label>
				<input type="radio" name="zd" id="optionsRadios1" value="1" checked> 是
				<input type="radio" name="zd" id="optionsRadios2" value="0" checked> 否
			  </label>
			</div>
		</div>
		

		
		<button id="test" class="btn btn-primary">提交</button>
	</div>
	
	
	<!-- <div> -->
		<!-- <label>英雄查询</label> -->
		<!-- <input type="text" /> -->
		<!-- <button>查询</button> -->
	<!-- </div> -->
	<div class="well well-sm">
		<p class="color-orange">已选英雄:  <span id="selected_hero_num" class="badge">0</span></p>
		<div id="div_show_hero" class=""><p></p> </div>
	</div>
	<div class="clearfix"></div>
	<div id="checkbox_hero" class="row">
		<?php if(is_array($hero)): foreach($hero as $key=>$hero_type): ?><div class="col-xs-6 col-sm-4 col-md-2">
				<div class="panel panel-default">
					<?php if($key == 't'): ?><div class="panel-heading">坦克</div><?php endif; ?>
					<?php if($key == 'zs'): ?><div class="panel-heading">战士</div><?php endif; ?>
					<?php if($key == 'ck'): ?><div class="panel-heading">刺客</div><?php endif; ?>
					<?php if($key == 'fs'): ?><div class="panel-heading">法师</div><?php endif; ?>
					<?php if($key == 'lr'): ?><div class="panel-heading">射手</div><?php endif; ?>
					<?php if($key == 'fz'): ?><div class="panel-heading">辅助</div><?php endif; ?>
				  
				  <div class="panel-body">
					<?php if(is_array($hero_type)): $i = 0; $__LIST__ = $hero_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$heros): $mod = ($i % 2 );++$i;?><label><input class="my-checkbox" type="checkbox"  value="<?php echo ($heros["hero_id"]); ?>" data-name="<?php echo ($heros["hero_name"]); ?>" > <?php echo ($heros["hero_name"]); ?></label>
						</br><?php endforeach; endif; else: echo "" ;endif; ?>
				  </div>
				</div>

				
				
			</div><?php endforeach; endif; ?>
		
	</div>
	
	
	<div id="hide_example">
	<input type="hidden"  value="" id="hide_hero_show" />
</div>
	
</form>
</div></div></div>


<script>

(function(){
	
	var checkbox_hero = document.getElementById('checkbox_hero');
	var div_show_hero = document.getElementById('div_show_hero');
	cleanWhitespace(checkbox_hero);
	// console.log(checkbox_option);
	checkbox_option = getChild(checkbox_hero, 'input');
	// console.log(checkbox_option);
	// console.log(checkbox_option);
	
	var temp_jq_checkbox;
	var check_array = [];
	
	// check_array = checkHero(checkbox_option);
	writeShow(div_show_hero, checkHero(checkbox_option));
	
	for (var i = 0; i < checkbox_option.length; i++ ) {
		// dom对象 转换为 jquery 对象
		temp_jq_checkbox = $(checkbox_option[i]);
		temp_jq_checkbox.bind('change', function(){
			check_array = checkHero(checkbox_option);
			writeShow(div_show_hero, check_array);
			
			// 增加徽章
			// console.log();
			//$("#selected_hero_num").html()
			$("#selected_hero_num").text(check_array.length);
		});
	}
	
	
		
	// 点击添加新区按钮 加载modal模态框
	var url = "<?php echo U('Area/ajax_add');?>";
	$('#link_add_area').click(function(e){
		$('#add_area').modal('show');
		// initFileInput('input_import', "<?php echo U('excelImportArray');?>");
		// console.log($("#form_add_area").serialize());
		// 加载按钮事件
		$('#btn_add_area').click(function(e){
			$.ajax({
				type: "POST",
				url: url,
				dataType: "json",
				data: $("#form_add_area").serialize(),
				success: function(rs) {
					// alert(rs);console.log(rs);
					if (rs.msg_sign == '200') {
						swal("OK",rs.msg,"success"); 
					} else {
					    swal("出错了", rs.msg, "error");  
					}
					$('#add_area').modal('hide');
				}
			});
			
			
			// 阻止事件
			e.stopPropagation();
			e.preventDefault();
			return false;
		});
	});
	
	// modal关闭后
	$('#add_area').on('hidden.bs.modal', function(e){
		location.reload();
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