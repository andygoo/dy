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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 数据统计
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<table class="table table-border table-bordered table-hover table-bg">
		<thead>
		<tr>
			<th scope="col" colspan="13">每日消耗</th>
		</tr>
		<tr class="text-c">
			<th width="40">ID</th>
			<th width="40">广告计划名称</th>
			<th width="70">消耗金额</th>
			<th width="70">曝光数</th>
			<th width="70">点击量</th>
			<th width="70">点击率</th>
			<th width="70">时间</th>
		</tr>
		</thead>
		<tbody>
		<?php if(is_array($everydayinfo)): foreach($everydayinfo as $key=>$v): ?><tr class="text-c">
				<td><?php echo ($v["e_id"]); ?></td>
				<td><?php echo ($v["e_planname"]); ?></td>
				<td><?php echo ($v["e_usenum"]); ?></td>
				<td><?php echo ($v["e_shownum"]); ?></td>
				<td width=""><?php echo ($v["e_clicknum"]); ?></td>
				<td width=""><?php echo ($v["bili"]); ?></td>
				<td width=""><?php echo ($v["time"]); ?></td>
			</tr><?php endforeach; endif; ?>

		</tbody>
	</table>

	<div>

		<div id="container" style="height: 550px;  margin-top: 30px; padding-top: 15px; width:100%; "></div>
		<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
		<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
		<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
		<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
		<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
		<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
		<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
		<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>
		<script type="text/javascript">
            var dom = document.getElementById("container");
            var myChart = echarts.init(dom);
            var app = {};
            option = null;
            option = {
                legend: {
                    data: [ '点击量', '消耗'],
                    x: 'center',
                },
                tooltip: {
                    trigger: 'axis'
                },
                xAxis: {
                    type: 'category',
                    data:<?php echo ($showday); ?>,
                },
                yAxis: [{
                    type: 'value',
                    name: '点击量'
                }, {
                    type: 'value',
                    name: '消耗'
                }],
                series: [{
                    name: '点击量',
                    data: <?php echo ($showclick); ?>,
                    type: 'line',
                    yAxisIndex: 0
                }, {
                    name: '消耗',
                    data: <?php echo ($showuse); ?>,
                    type: 'line',
                    yAxisIndex: 1
                }]
            };

            if (option && typeof option === "object") {
                myChart.setOption(option, true);
            }
		</script>
	</div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/dy/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/dy/Public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/dy/Public/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/dy/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/dy/Public/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/dy/Public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/dy/Public/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$(function(){

	
});
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*用户-查看*/
function member_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*用户-停用*/
function member_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
				$(obj).remove();
				layer.msg('已停用!',{icon: 5,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

/*用户-启用*/
function member_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
				$(obj).remove();
				layer.msg('已启用!',{icon: 6,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});
	});
}
/*用户-编辑*/
function member_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
function record_list(title,url,id,w,h){
    layer_show(title,url,w,h);
}
/*密码-修改*/
function change_password(title,url,id,w,h){
	layer_show(title,url,w,h);	
}
/*用户-删除*/
function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}
</script> 
</body>
</html>