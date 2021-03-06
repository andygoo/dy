<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
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
<title>H-ui.admin v3.1</title>
<meta name="keywords" content="斗音后台">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<style>
	.header_tips {
		border: 1px solid #DBDEE1;
		background-color: white;
		padding: 10px 15px;
		line-height: 25px;
		margin-top: 20px;
	}
	#ggzs p {
		margin-bottom: 0px;
	}
	.dtit .td1 {
		font-size: 30px;
	}
	.hbox {
		border: 1px solid #999999;
		border-radius: 20px;
		padding: 22px;
		background-color: #F1F4F5;
		height:104px;
	}
	p.vipp { font-size:36px; }
	td.yetd { font-size:25px;color:#000}
	td.img1 img{ max-width:60px;}
	td.img2 img { max-width: 88px;    }
	.tdbox1{ text-align:center;}
</style>

<div class="page-container">
	<div class="header_tips" style=" display:flex;">
		<div style="float: left; flex: none;"><img src="/dy/Public/admin/static/h-ui.admin/images/ggt.jpg" /></div>
		<div id="ggzs" style="overflow:hidden; height:100px; font-size:18px; line-height:35px; width:100%; ">
			<p>1、为保持投放效果，广告主广告上线之前先联系销售客服进行广告流量的配置，防止广告曝光不出去。</p>
			<p>2、信息流广告采用先审后发的规则，为了保证你的广告能够顺利投放，请先仔细阅读广告审核规则。</p>
			<p>3、“启用中”状态的广告，不直接进行删除，请先暂停再进行操作。</p>
			<p>4、为了更好的统计广告效果，广告主只允许创建一个广告计划，广告主有更多的分组需要可以在广告计划下创建更多的广告单元跟广告创意。</p>
			<p>5、广告的后台不定时更新，平台为了更好的优化广告效果配置更优质的广告流量，广告主或代理有更好的建议可以邮件到1018774866@qq.com，根据建议的质量，优质的广告建议给予奖励1000-10000不等的广告币</p>
		</div>
		<div data="hide" id="ckgd" style=" text-align: center; font-size: 18px; width:150px; line-height: 100px; cursor: pointer; float: right; flex: none; font-weight:600;"> 查看更多 》</div>
	</div>

	<div style="background:#FFF;margin:22px auto;">
		<div class="dtit">
			<table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
				<tr><td width="30%" class="td1">广告概况</td><td width="5%">&nbsp;</td><td width="30%" class="td1">账号余额</td><td width="5%">&nbsp;</td><td width="30%" class="td1">联系客服</td></tr>
				<tr>
					<td class="img1">

						<div class="hbox">
							<table cellpadding="0" cellspacing="0" border="0" class="tdbox1" style="width:99%;">
								<tr>
									<td width="25%"><img src="/dy/Public/admin/static/h-ui.admin/images/icon1.png" style="width: 98%;" /></td>
									<td width="25%"><img src="/dy/Public/admin/static/h-ui.admin/images/icon2.png" style="width: 98%;" /></td>
									<td width="25%"><img src="/dy/Public/admin/static/h-ui.admin/images/icon3.png" style="width: 98%;" /></td>
									<td width="25%"><img src="/dy/Public/admin/static/h-ui.admin/images/icon4.png" style="width: 98%;" /></td>
								</tr>
								<tr>
									<td><?php echo ((isset($todayclick) && ($todayclick !== ""))?($todayclick):'0'); ?><br />今日点击</td>
									<td><?php echo ((isset($todayuse) && ($todayuse !== ""))?($todayuse):'0.00'); ?><br />今日消耗</td>
									<td><?php echo ((isset($yesdayclick) && ($yesdayclick !== ""))?($yesdayclick):'0'); ?><br />昨日点击</td>
									<td><?php echo ((isset($yesyuse) && ($yesyuse !== ""))?($yesyuse):'0.00'); ?><br />昨日消耗</td>
								</tr>
							</table>
						</div>
					</td>
					<td width="5%">&nbsp;</td>
					<td class="img2">
						<div class="hbox">
							<table cellpadding="0" cellspacing="0" border="0" style="width:99%;">
								<tr>
									<td width="25%"><img src="/dy/Public/admin/static/h-ui.admin/images/icon5.png" style="width:100%;" /></td>
									<td width="75%" class="yetd">您的账户余额为<span style="color:#9AB8FE"><?php echo ($yue); ?></span> 元，<br />请联系客服充值</td>
								</tr>
							</table>

						</div>
					</td>
					<td width="5%">&nbsp;</td>
					<td class="img2">
						<div class="hbox">
							<table cellpadding="0" cellspacing="0" border="0" style="width:99%;">
								<tr>
									<td width="25%"><img src="/dy/Public/admin/static/h-ui.admin/images/icon6.png" style="width:100%;" /></td>
									<td width="75%">
										<p class="vipp">VIP专属客服</p>
										<a href="tencent://message/?uin=1710600973&Site=在线QQ&Menu=yes" target="_blank"> <img src="/dy/Public/admin/static/h-ui.admin/images/icon7.jpg" style=" max-width:121px; margin:5px;cursor:pointer;" class="QQ"></a>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div style="clear:both"></div>
	</div>
	<table class="table table-border table-bordered table-hover table-bg">
		<thead>
		<tr>
			<th scope="col" colspan="13">计划总消耗</th>
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
		</tr>
		</thead>
		<tbody>
		<tr class="text-c">
			<td><input name="" type="checkbox" value="<?php echo ($plan["p_id"]); ?>"></td>
			<td><?php echo ($plan["p_id"]); ?></td>
			<td><?php echo ($plan["p_name"]); ?></td>
			<td class="td-status"><?php if($plan["p_status"] == 1): ?><span class='label label-success radius'>已开启</span><?php else: ?><span class='label label-default radius'>未开启</span><?php endif; ?></td>
			<td><?php echo ($plan["p_repnum"]); ?></td>
			<td width="70"><?php echo ($allshow); ?></td>
			<td width="70"><?php echo ($allclick); ?></td>
			<td width="70"><?php echo ($bili); ?></td>
			<td width="70"><?php echo ($plan["p_price"]); ?></td>
			<td width="70"><?php echo ($alluse); ?></td>
		</tr>

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
                    data: <?php echo ($showday); ?>
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
            ;
            if (option && typeof option === "object") {
                myChart.setOption(option, true);
            }
		</script>
		<div style=" padding: 30px 0px 20px 0px; text-align: center; background-color: #fff; font-size: 14px;">
			<a href="/Privacy.html" target="_blank">隐私政策 | 服务条款 </a><br />
		</div>
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
<script>
    $("#ckgd").click(function () {
        if ($(this).attr("data") == "hide") {
            $("#ggzs").css("height", "auto");
            $(this).attr("data", "show");
            $(this).html("收起更多 》");
        }
        else {
            $("#ggzs").css("height", "100px");
            $(this).attr("data", "hide");
            $(this).html("查看更多 》");
        }
    })
</script>
</body>




</html>