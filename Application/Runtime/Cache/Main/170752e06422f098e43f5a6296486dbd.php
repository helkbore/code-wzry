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
    <!--
	<a class="btn btn-default" href="<?php echo U('Account/add');?>" data-toggle="modal" data-target="#add_account">添加账号</a>
	-->
	<a class="btn btn-primary btn-block" href="javascript:void(0)" id="modal_add_account">添加账号</a>
	<div class="modal fade" id="add_account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<form action="<?php echo U('Account/add');?>" method="post" id="form_add_account">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">添加账号</h4>
				</div>
				<div class="modal-body">
					<div class="main">
						<form  class="form-inline" method="post" action="<?php echo U('dosave');?>" id="form_add_account">
							<input type="hidden" name="account_id" value="<?php echo ($account["account_id"]); ?>" />
							<div class="form-group">
								<label class="" for="type">类型</label>
								<select  name="type" class="form-control" id="type">
									<option value="1" <?php if($account["type"] == 1): ?>selected<?php endif; ?> >微信</option>
								<option value="2" <?php if($account["type"] == 2): ?>selected<?php endif; ?> >QQ</option>
								</select>
							</div>
							<div class="form-group">
								<label class="sr-only" for="account">账号</label>
								<input type="text" class="form-control input-size-max" id="account" placeholder="账号" name="account">
							</div>
							
							
							
						</form>
					</div>
				</div>
				<div class="modal-footer">
					
					<button type="button" class="btn btn-primary" id="btn_add_account">提交</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				</div>
			</form>
			</div>
		</div>
	</div>
	
    <table class="table table-striped ">
        <tr>
            <td class="short-table-cell">类型</td>
            <td>账号</td>
			<td>角色数</td>
            <td>管理</td>
        </tr>
        
        <?php if(is_array($_list)): foreach($_list as $key=>$item): ?><tr>
                <td>
					<input type="hidden" id="id" value="<?php echo ($item["account_id"]); ?>" />
					<?php if($item["type"] == 1): ?><i class="fa fa-weixin font-mid color-red" aria-hidden="true"></i>
					<?php elseif($item["type"] == 2): ?> <i class="fa fa-qq font-mid color-red" aria-hidden="true"></i><?php endif; ?>
				</td>
                <td><?php echo ($item["account"]); ?></td>
				<td><i class="fa fa-user color-grey"></i> <?php echo ($item["user_count"]); ?></td>
                <td>
					<span class="label label-success color-light"> 
						<a  class="link_delete" data-aid="<?php echo ($item['account_id']); ?>" href="javascript:void(0)">删除</a>
					</span> 
					<span class="label label-info color-light"><a  class=""  href="<?php echo U('addUser',array('account_id'=>$item['account_id'], 'url' => 'Account_showAll'));?>">添加角色</a></span> 
					<span class="label label-warning color-light"><a  class=""  href="<?php echo U('showDetail',array('account_id'=>$item['account_id']));?>">详情</a></span> 
					<span class="label label-danger color-light"><a   class="" href="<?php echo U('edit',array('account_id'=>$item['account_id']));?>">编辑</a></span> 
                </td>
            </tr><?php endforeach; endif; ?>
    </table>
</div>

<script>
(function(){
	var url = "<?php echo U('Account/ajax_add');?>";
	
	// 点击添加账号按钮 加载modal模态框
	$('#modal_add_account').click(function(e){
		$('#add_account').modal('show');
		// initFileInput('input_import', "<?php echo U('excelImportArray');?>");
		
		// 加载按钮事件
		$('#btn_add_account').click(function(e){
			$.ajax({
				type: "POST",
				url: url,
				dataType: "json",
				data: $("#form_add_account").serialize(),
				success: function(rs) {
					// alert(rs);console.log(rs);
					if (rs.msg_sign == '200') {
						swal("OK",rs.msg,"success"); 
					} else {
					    swal("出错了", rs.msg, "error");  
					}
					$('#add_account').modal('hide');
				}
			});
			
			
			// 阻止事件
			e.stopPropagation();
			e.preventDefault();
			return false;
		});
	});
	
	// modal关闭后
	$('#add_account').on('hidden.bs.modal', function(e){
		location.reload();
	});
	
	
	
	// 删除按钮
	var delete_url = "<?php echo U('Account/dodel');?>";
	var account_id
	$(".link_delete").click(function(e){
		var target = e.currentTarget;
		// console.log(e);
		// console.log(target.getAttribute("data-aid"));
		// console.log(this.attr("data-aid"));
		// alert();
		account_id = target.getAttribute("data-aid");
		
		// console.log(delete_url);
		console.log(account_id);
		$.ajax({
			type: "POST",
			url: delete_url,
			dataType: "json",
			data: {
				account_id: account_id
			},
			success: function(rs) {
				// alert(rs);console.log(rs);
				if (rs.msg_sign == '200') {
					swal("OK",rs.msg,"success"); 
				} else {
					swal("出错了", rs.msg, "error");  
				}
				
				location.reload();
				// $('#add_account').modal('hide');
			}
		});
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