<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
	<!--[if lt IE 9]>
	<script type="text/javascript" src="/dy/Public/admin/lib/html5shiv.js"></script>
	<script type="text/javascript" src="/dy/Public/admin/lib/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="/dy/Public/admin/static/h-ui/css/H-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="/dy/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
	<link rel="stylesheet" type="text/css" href="/dy/Public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="/dy/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
	<link rel="stylesheet" type="text/css" href="/dy/Public/admin/static/h-ui.admin/css/style.css" />
	<!--[if IE 6]>
	<script type="text/javascript" src="/dy/Public/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
	<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>推广管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 推广管理 <span class="c-gray en">&gt;</span> 推广创意 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20">
        <span class="l">
            <a class="btn btn-primary radius" href="<?php echo U('Adutilplan/index');?>?id=<?php echo ($sid); ?>">返回单元</a>
        </span>
	</div>
	<table class="table table-border table-bordered table-hover table-bg">
		<thead>
		<tr>
			<th scope="col" colspan="13">创意管理</th>
		</tr>
		<tr class="text-c">
			<th width=""><input name="" type="checkbox" value=""></th>
			<th width="">ID</th>
			<th width="">推广单元名称</th>
			<th>推广类型</th>
			<th width="">创意名称</th>
			<th width="">创意标题</th>
			<th width="">创意描述</th>
			<th width="300">创意视频</th>
			<th width="">审核状态</th>
			<th width="">广告按钮</th>

		</tr>
		</thead>
		<tbody>
		<?php if(is_array($tgideainfo)): foreach($tgideainfo as $key=>$v): ?><tr class="text-c">
				<td><input name="" type="checkbox" value="<?php echo ($v["c_id"]); ?>"></td>
				<td><?php echo ($v["c_id"]); ?></td>
				<td><?php echo ($v["c_utilname"]); ?></td>
				<td>链接推广</td>
				<td><?php echo ($v["c_name"]); ?></td>
				<td><?php echo ($v["c_title"]); ?></td>
				<td><?php echo ($v["c_desc"]); ?></td>
				<td><a href="<?php echo ($v["c_url"]); ?>" target="_blank">
					<video width="240" height="100" controls>
						<source src="/dy/Public/<?php echo ($v["c_videourl"]); ?>" type="video/mp4">
						<source src="/dy/Public/<?php echo ($v["c_videourl"]); ?>" type="video/ogg">
						<source src="/dy/Public/<?php echo ($v["c_videourl"]); ?>" type="video/webm">
						<object data="/dy/Public/<?php echo ($v["c_videourl"]); ?>" width="240" height="100">
							<embed src="/dy/Public/<?php echo ($v["c_videourl"]); ?>" width="240" height="100">
						</object>
					</video>
				</a></td>
				<td><span><?php echo ($v['c_status']==1 ? '通过':'待审核'); ?></span> </td>
				<td><?php echo ($v["c_button"]); ?></td>
			</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
</div>
</div>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">

    function AdPlan_add(title, url, w, h) {
        layer_show(title, url, w, h);
    }

    function AdPlan_edit(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
    function AdPlan_del(obj, id) {
        layer.confirm('删除须谨慎，确认要删除吗？', function (index) {
            $.ajax({
                type: 'POST',
                url: '/Customer/AdPlanDelete/' + id,
                dataType: 'text',
                success: function (data) {
                    if (data == "NO") {
                        layer.msg('删除失败，广告开启时不能删除!', { icon: 5, time: 1000 });
                    } else {
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!', { icon: 1, time: 1000 });
                    }
                },
                error: function (data) {
                    console.log(data.msg);
                },
            });
        });
    }
    function AdPlan_show(title, url, w, h) {
        layer_show(title, url, w, h);
    }
</script>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/dy/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/dy/Public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/dy/Public/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/dy/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/dy/Public/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/dy/Public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/dy/Public/admin/lib/laypage/1.2/laypage.js"></script>
</body>
</html>