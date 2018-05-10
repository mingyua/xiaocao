<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:46:"D:\HT/application/manage\view\manage\role.html";i:1525854419;s:41:"D:\HT\application\manage\view\layout.html";i:1525854419;s:48:"D:\HT\application\manage\view\public\header.html";i:1525854419;s:48:"D:\HT\application\manage\view\public\footer.html";i:1525858100;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>贵州小草商务有限公司</title>
		<link href="/public/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
		<link href="/public/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="/public/manage/build/css/custom.css" rel="stylesheet">
		<link href='/public/nprogress/nprogress.css' rel='stylesheet' />
		<link rel="stylesheet" type="text/css" href="/public/manage/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="/public/layui/css/layui.css"/>
		<script src="/public/manage/js/jquery.min.js"></script>
		<script src="/public/layui/layui.js" type="text/javascript" charset="utf-8"></script>

	</head>
	<body class="nav-md">
 <div class="layui-fluid">
	<div class="row" style="margin-top: 20px;">
		<div id="headform"><span class="title">角色员表</span><button class="layui-btn mr-15 f-r addpro" title="添加角色" dataurl="<?php echo URL('manage/role'); ?>">添加角色</button></div>
		<table class="table table-bordered">
			<thead>
				<th width="40px">ID</th>
				<th>角色名称</th>
	
				<th width="300">操作</th>
			</thead>
			<tbody>
				<?php if(is_array($rolelist) || $rolelist instanceof \think\Collection || $rolelist instanceof \think\Paginator): $i = 0; $__LIST__ = $rolelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<tr>
					<td><?php echo $v['ID']; ?></td>
					<td><?php echo $v['Role_name']; ?></td>
					<td id="usebtn" class="text-center">
						<button class="btn btn-sm btn-primary add" title="权限设置" dataurl="<?php echo URL('manage/access',array('id'=>$v['ID'])); ?>">权限设置</button>
						<button class="btn btn-sm btn-default addpro" dataname="<?php echo $v['Role_name']; ?>" title="修改角色" dataid="<?php echo $v['ID']; ?>" dataurl="<?php echo URL('manage/role'); ?>">修改</button>
						<button class="btn btn-sm btn-danger del" arrid="<?php echo $v['ID']; ?>" dataurl="<?php echo URL('manage/delrole'); ?>">删除</button>
					</td>
				</tr>
					
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
			
		</table>
	</div>
</div>
		<script src='/public/nprogress/nprogress.js'></script>
		<script src="/public/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="/public/manage/build/js/custom.js"></script>
		<script src="/public/manage/js/jquery.nicescroll.js"></script>

		<script type="text/javascript">
			var statusurl ="/<?php echo $md_name; ?>/<?php echo $ct_name; ?>/status";
			var posturl ="/<?php echo $md_name; ?>/<?php echo $ct_name; ?>/";
			var rootimg = "";
			var access="<?php echo $access; ?>";
			$('body #kindsheight').niceScroll({
			    cursorcolor: "#ccc",//#CC0071 光标颜色
			    cursoropacitymax: 1, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
			    touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备
			    cursorwidth: "5px", //像素光标的宽度
			    cursorborder: "0", // 游标边框css定义
			    cursorborderradius: "5px",//以像素为光标边界半径
			    autohidemode: false //是否隐藏滚动条
			});		
		</script>
		<script src="/public/manage/js/common.js" type="text/javascript" charset="utf-8"></script>

		
	</body>

</html>
