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
<title>用户管理</title>
</head>
<body>
<div class="page-container">
	<table class="table table-border table-bordered table-hover table-bg">
		<thead>
		<tr>
			<th scope="col" colspan="13">计划管理</th>
		</tr>
		<tr class="text-c">
			<th width="40"><input name="" type="checkbox" value=""></th>
			<th width="40">ID</th>
			<th width="40">广告计划名称</th>
			<th width="70">投放状态</th>
			<th width="70">时耗</th>
			<th width="70">展示量</th>
			<th width="70">点击量</th>
			<th width="70">点击率</th>
			<th width="70">广告出价</th>
			<th width="70">消耗</th>
			<th width="40">广告开关</th>
			<th width="70">操作</th>
		</tr>
		</thead>
		<tbody>
		<tr class="text-c">
			<?php if($planinfo["p_id"] > 0): ?><td><input name="" type="checkbox" value="<?php echo ($planinfo["p_id"]); ?>"></td>
			<td><?php echo ($planinfo["p_id"]); ?></td>
			<td><?php echo ($planinfo["p_name"]); ?></td>
			<td class="td-status"><?php if(($planinfo["p_status"] == 0) or ($planinfo["p_status"] == 2)): ?><span class='label label-defaunt radius'>已暂停</span>
				<?php else: ?><span class='label label-success radius'>已开启</span><?php endif; ?>
			</td>
			<td><?php echo ($planinfo["p_housuse"]); ?></td>
			<td width="70"><?php echo ((isset($planinfo["p_allshownum"]) && ($planinfo["p_allshownum"] !== ""))?($planinfo["p_allshownum"]):'0'); ?></td>
			<td width="70"><?php echo ((isset($planinfo["p_allclicknum"]) && ($planinfo["p_allclicknum"] !== ""))?($planinfo["p_allclicknum"]):'0'); ?></td>
			<td width="70"><?php echo ((isset($planinfo["djlv"]) && ($planinfo["djlv"] !== ""))?($planinfo["djlv"]):'0.00'); ?>%</td>
			<td width="70"><?php echo ($planinfo["p_price"]); ?></td>
			<td width="70"><?php echo ((isset($planinfo["alluse"]) && ($planinfo["alluse"] !== ""))?($planinfo["alluse"]):'0.00'); ?></td>
			<td class="td-manage" style="font-size: 17px;">
				<?php if(($planinfo["p_status"] == 0) or ($planinfo["p_status"] == 2)): ?><a style="text-decoration:none" onclick="AdPlan_start(this,<?php echo ($did); ?>)" href="javascript:;" title="开启"><i class="Hui-iconfont">&#xe6e6;</i></a>
					<?php else: ?><a style="text-decoration:none" onclick="AdPlan_stop(this, <?php echo ($did); ?>)" href="javascript:;" title="暂停"><i class="Hui-iconfont">&#xe6e4;</i></a><?php endif; ?>
			</td>
			<td class="f-14">
				<a title="编辑" href="javascript:;" onclick="AdPlan_edit('修改计划', '<?php echo U('Adplan/editplan');?>?id=<?php echo ($planinfo["p_id"]); ?>', '362', '450','310')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i> 编辑</a>&nbsp;&nbsp;
			</td>
				<?php else: endif; ?>
		</tr>

		</tbody>
	</table>
</div>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">

    function AdPlan_add(title, url, w, h) {
        layer_show(title, url, w, h);
    }

    function AdPlan_edit(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
    function AdPlan_stop(obj, id) {
        layer.confirm('确认要暂停吗？', function (index) {
            var index = layer.load(0, {shade: false});
            var index = layer.load(1, {
                shade: [0.1,'#fff']
            });
            $.post("<?php echo U('Adplan/Opening');?>",
				{did:id},
				function (data) {
                    data=JSON.parse(data);
					if (data.status == -1 ||data.status ==0) {
                        layer.msg(data.msg, { icon: 0, time: 1000 });
                        layer.close(index);
                    }else {
                        $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="AdPlan_start(this,' + id + ')" href="javascript:;" title="开启"><i class="Hui-iconfont">&#xe6e6;</i></a>');
                        $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已暂停</span>');
                        $(obj).remove();
                        layer.msg('已暂停!', { icon: 1, time: 1000 });
                        layer.close(index);
                    }
            });
        });
    }
    function AdPlan_start(obj, id) {
        layer.confirm('确认要开启吗？', function (index) {
            var index = layer.load(0, {shade: false});
            var index = layer.load(1, {
                shade: [0.1,'#fff']
            });
            $.post("<?php echo U('Adplan/Opening');?>",
                {did:id}
                ,function (data) {
                    data=JSON.parse(data);
                    if (data.status == -1 ||data.status ==0) {
                        layer.msg(data.msg, { icon: 0, time: 1000 });
                        layer.close(index);
                    } else {
                        $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="AdPlan_stop(this,' + id + ')" href="javascript:;" title="暂停"><i class="Hui-iconfont">&#xe6e4;</i></a>');
                        $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已开启</span>');
                        $(obj).remove();
                        layer.msg('已开启!', { icon: 1, time: 1000 });
                        layer.close(index);
                    }
            });
        });
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