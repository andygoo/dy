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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 计划管理 <span class="c-gray en">&gt;</span> 推广计划 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20">
        <span class="l">
            <a class="btn btn-primary radius" href="javascript:;" onclick="AdPlan_add('添加计划', '<?php echo U('Addplan/index');?>?did=<?php echo ($did); ?>', '450', '310')"><i class="Hui-iconfont">&#xe600;</i> 添加计划</a>
        </span>
	</div>
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
			<th width="70">每日投放预算</th>
			<th width="70">展示量</th>
			<th width="70">点击量</th>
			<th width="70">点击率</th>
			<th width="70">广告出价</th>
			<th width="70">消耗</th>
			<th width="70">操作</th>
		</tr>
		</thead>
		<tbody>
		<tr class="text-c">
			<?php if($planinfo["p_id"] > 0): ?><td><input name="" type="checkbox" value="<?php echo ($planinfo["p_id"]); ?>"></td>
			<td><?php echo ($planinfo["p_id"]); ?></td>
			<td><?php echo ($planinfo["p_name"]); ?></td>
			<td><?php if($planinfo["p_status"] == 1): ?><span class='label label-success radius'>已开启</span><?php elseif($v["dshstatus"] == 0): ?><span class='label label-defaunt radius'>待审核</span><?php else: ?><span class='label label-defaunt radius'>已暂停</span><?php endif; ?></td>
			<td><?php echo ($planinfo["p_repnum"]); ?></td>
			<td width="70"><?php echo ((isset($planinfo["p_allshownum"]) && ($planinfo["p_allshownum"] !== ""))?($planinfo["p_allshownum"]):'0'); ?></td>
			<td width="70"><?php echo ((isset($planinfo["p_allclicknum"]) && ($planinfo["p_allclicknum"] !== ""))?($planinfo["p_allclicknum"]):'0'); ?></td>
			<td width="70"><?php echo ((isset($planinfo["djlv"]) && ($planinfo["djlv"] !== ""))?($planinfo["djlv"]):'0.00'); ?>%</td>
			<td width="70"><?php echo ($planinfo["p_price"]); ?></td>
			<td width="70"><?php echo ((isset($planinfo["alluse"]) && ($planinfo["alluse"] !== ""))?($planinfo["alluse"]):'0.00'); ?></td>
			<td class="f-14">
				<a title="广告单元" href="<?php echo U('Adutilplan/index');?>?id=<?php echo ($planinfo["p_id"]); ?>" style="text-decoration:none"><i class="Hui-iconfont">&#xe6f5;广告单元</i></a>&nbsp;&nbsp;
				<a title="编辑" href="javascript:;" onclick="AdPlan_edit('修改计划', '<?php echo U('Editplan/index');?>?id=<?php echo ($planinfo["p_id"]); ?>', '362', '450','310')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>&nbsp;&nbsp;
				<a title="删除" href="javascript:;" onclick="AdPlan_del(this, <?php echo ($planinfo["p_id"]); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
			</td><?php else: endif; ?>
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
    function AdPlan_del(obj, id) {
        layer.confirm('删除须谨慎，确认要删除吗？', function (index) {
            $.post("<?php echo U('Editplan/deleleplan');?>",{id:id},function (e) {
				data=JSON.parse(e);
				if(data.status==1){
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!', { icon: 1, time: 1000 });
				}else{
                    layer.msg(data.msg, { icon: 5, time: 1000 });
				}
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