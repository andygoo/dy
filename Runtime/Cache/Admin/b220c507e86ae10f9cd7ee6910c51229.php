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
</head>
<body>


<div class="page-container">
	<form action="/Customer/AdUnitAdd/362" method="post" class="form form-horizontal" id="form-product-add" style="overflow: hidden;" enctype="multipart/form-data" >
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>推广计划名称：</label>
			<div class="formControls col-xs-8 col-sm-5">
				<?php echo ($p_name); ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>单元名称：</label>
			<div class="formControls col-xs-8 col-sm-5">
				<input type="text" class="input-text" value="" placeholder="" id="name" name="name" style=" width:200px;">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>推广方式：</label>
			<div class="formControls col-xs-8 col-sm-4 skin-minimal">
				<div class="radio-box">
					<input type="radio" value="cpc" checked id="cpc-1" name="cpc">
					<label for="cpc-1">cpc</label>
				</div>
				<div class="radio-box">
					<input type="radio" value="cpm" id="cpc-2" name="cpc" disabled="disabled">
					<label for="cpc-2">cpm</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>推广网络：</label>
			<div class="formControls col-xs-8 col-sm-5 skin-minimal">
				<div class="check-box">
					<input type="checkbox" aria-required="true" checked value="wifi" id="checkbox-1" name="wifi">
					<label for="checkbox-1">wifi</label>
				</div>
				<div class="check-box">
					<input type="checkbox" checked value="4G" id="checkbox-2" name="wifi">
					<label for="checkbox-2">4G</label>
				</div>
				<div class="check-box">
					<input type="checkbox" checked value="3G" id="checkbox-3" name="wifi">
					<label for="checkbox-3">3G</label>
				</div>
				<div class="check-box">
					<input type="checkbox" value="2G" id="checkbox-4" name="wifi">
					<label for="checkbox-4">2G</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>性别：</label>
			<div class="formControls col-xs-8 col-sm-4 skin-minimal">
				<div class="radio-box">
					<input type="radio" value="0" checked id="radio-1" name="sex">
					<label for="radio-1">不限</label>
				</div>
				<div class="radio-box">
					<input type="radio" value="1" id="radio-2" name="sex">
					<label for="radio-2">男</label>
				</div>
				<div class="radio-box">
					<input type="radio" value="2" id="radio-3" name="sex">
					<label for="radio-3">女</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>年龄：</label>
			<div class="formControls col-xs-8 col-sm-10 skin-minimal">
				<div class="check-box">
					<input type="checkbox" aria-required="true" value="<=18" checked id="wifi-1" name="age">
					<label for="wifi-1"><=18</label>
				</div>
				<div class="check-box">
					<input type="checkbox" value="19-24" checked id="wifi-2" name="age">
					<label for="wifi-2">19-24</label>
				</div>
				<div class="check-box">
					<input type="checkbox" value="25-29" checked id="wifi-3" name="age">
					<label for="wifi-3">25-29</label>
				</div>
				<div class="check-box">
					<input type="checkbox" value="30-39" checked id="wifi-4" name="age">
					<label for="wifi-4">30-39</label>
				</div>
				<div class="check-box">
					<input type="checkbox" value="40-49" checked id="checkbox-5" name="age">
					<label for="wifi-5">40-49</label>
				</div>
				<div class="check-box">
					<input type="checkbox" value=">=50" checked id="wifi-6" name="age">
					<label for="wifi-6">>=50</label>
				</div>
			</div>

		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>关键词定向<i class="Hui-iconfont" title="请填写定向关键词，这些关键词可以与您的产品或业务相关或者与您的目标用户相关。广告将定向展现给与所填关键词相关联的用户，比如用户曾经搜索过这些关键词或者浏览过与这些关键词有关的文章。每个单元中最多填写200个关键词，每个关键词长度不超过15个汉字或30个英文字符；填写时请注意，每个关键词占一行。">&#xe633;</i>：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<div class="radio-box">
					<input type="radio" value="0" checked id="gjc-1" name="gjc">
					<label for="gjc-1">不限</label>
				</div>
				<div class="radio-box">
					<input type="radio" value="1" id="gjc-2" name="gjc">
					<label for="gjc-2">自定义关键词</label>
				</div>
			</div>

			<div class="formControls col-xs-8 col-sm-5" id="xxxky" style="display:none;">
				<textarea id="keyword" name="keyword" maxlength="3000" style=" width:500px; height:220px;"></textarea>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>地区：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<div class="radio-box">
					<input type="radio" value="0" checked id="tfdq-1" name="tfdq">
					<label for="tfdq-1">不限</label>
				</div>
				<div class="radio-box">
					<input type="radio" value="1" id="tfdq-2" name="tfdq">
					<label for="tfdq-2">对不投放的城市打勾</label>
				</div>
			</div>
		</div>
		<div class="row cl" id="diqxuanz" style="display:none;">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"></label>
			<div class="formControls col-xs-8 col-sm-10 skin-minimal">
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_0">直辖市</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_0">
						<div class="check-box">
							<input type="checkbox" id="ck_35" value="北京市" name="region">
							<label for="ck_35">北京市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_36" value="天津市" name="region">
							<label for="ck_36">天津市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_37" value="上海市" name="region">
							<label for="ck_37">上海市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_38" value="重庆市" name="region">
							<label for="ck_38">重庆市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_5">河北省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_5">
						<div class="check-box">
							<input type="checkbox" id="ck_39" value="石家庄市" name="region">
							<label for="ck_39">石家庄市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_40" value="唐山市" name="region">
							<label for="ck_40">唐山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_41" value="秦皇岛市" name="region">
							<label for="ck_41">秦皇岛市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_42" value="邯郸市" name="region">
							<label for="ck_42">邯郸市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_43" value="邢台市" name="region">
							<label for="ck_43">邢台市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_44" value="保定市" name="region">
							<label for="ck_44">保定市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_45" value="张家口市" name="region">
							<label for="ck_45">张家口市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_46" value="承德市" name="region">
							<label for="ck_46">承德市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_47" value="沧州市" name="region">
							<label for="ck_47">沧州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_48" value="廊坊市" name="region">
							<label for="ck_48">廊坊市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_49" value="衡水市" name="region">
							<label for="ck_49">衡水市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_6">山西省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_6">
						<div class="check-box">
							<input type="checkbox" id="ck_50" value="太原市" name="region">
							<label for="ck_50">太原市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_51" value="大同市" name="region">
							<label for="ck_51">大同市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_52" value="阳泉市" name="region">
							<label for="ck_52">阳泉市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_53" value="长治市" name="region">
							<label for="ck_53">长治市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_54" value="晋城市" name="region">
							<label for="ck_54">晋城市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_55" value="朔州市" name="region">
							<label for="ck_55">朔州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_56" value="晋中市" name="region">
							<label for="ck_56">晋中市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_57" value="运城市" name="region">
							<label for="ck_57">运城市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_58" value="忻州市" name="region">
							<label for="ck_58">忻州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_59" value="临汾市" name="region">
							<label for="ck_59">临汾市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_60" value="吕梁市" name="region">
							<label for="ck_60">吕梁市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_7">辽宁省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_7">
						<div class="check-box">
							<input type="checkbox" id="ck_73" value="沈阳市" name="region">
							<label for="ck_73">沈阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_74" value="大连市" name="region">
							<label for="ck_74">大连市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_75" value="鞍山市" name="region">
							<label for="ck_75">鞍山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_76" value="抚顺市" name="region">
							<label for="ck_76">抚顺市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_77" value="本溪市" name="region">
							<label for="ck_77">本溪市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_78" value="丹东市" name="region">
							<label for="ck_78">丹东市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_79" value="锦州市" name="region">
							<label for="ck_79">锦州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_80" value="营口市" name="region">
							<label for="ck_80">营口市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_81" value="阜新市" name="region">
							<label for="ck_81">阜新市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_82" value="辽阳市" name="region">
							<label for="ck_82">辽阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_83" value="盘锦市" name="region">
							<label for="ck_83">盘锦市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_84" value="铁岭市" name="region">
							<label for="ck_84">铁岭市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_85" value="朝阳市" name="region">
							<label for="ck_85">朝阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_86" value="葫芦岛市" name="region">
							<label for="ck_86">葫芦岛市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_8">吉林省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_8">
						<div class="check-box">
							<input type="checkbox" id="ck_87" value="长春市" name="region">
							<label for="ck_87">长春市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_88" value="吉林市" name="region">
							<label for="ck_88">吉林市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_89" value="四平市" name="region">
							<label for="ck_89">四平市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_90" value="辽源市" name="region">
							<label for="ck_90">辽源市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_91" value="通化市" name="region">
							<label for="ck_91">通化市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_92" value="白山市" name="region">
							<label for="ck_92">白山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_93" value="松原市" name="region">
							<label for="ck_93">松原市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_94" value="白城市" name="region">
							<label for="ck_94">白城市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_95" value="延边朝鲜族自治州" name="region">
							<label for="ck_95">延边朝鲜族自治州</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_9">黑龙江省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_9">
						<div class="check-box">
							<input type="checkbox" id="ck_96" value="哈尔滨市" name="region">
							<label for="ck_96">哈尔滨市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_97" value="齐齐哈尔市" name="region">
							<label for="ck_97">齐齐哈尔市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_98" value="鸡西市" name="region">
							<label for="ck_98">鸡西市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_99" value="鹤岗市" name="region">
							<label for="ck_99">鹤岗市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_100" value="双鸭山市" name="region">
							<label for="ck_100">双鸭山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_101" value="大庆市" name="region">
							<label for="ck_101">大庆市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_102" value="伊春市" name="region">
							<label for="ck_102">伊春市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_103" value="佳木斯市" name="region">
							<label for="ck_103">佳木斯市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_104" value="七台河市" name="region">
							<label for="ck_104">七台河市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_105" value="牡丹江市" name="region">
							<label for="ck_105">牡丹江市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_106" value="黑河市" name="region">
							<label for="ck_106">黑河市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_107" value="绥化市" name="region">
							<label for="ck_107">绥化市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_108" value="大兴安岭地区" name="region">
							<label for="ck_108">大兴安岭地区</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_10">江苏省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_10">
						<div class="check-box">
							<input type="checkbox" id="ck_109" value="南京市" name="region">
							<label for="ck_109">南京市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_110" value="无锡市" name="region">
							<label for="ck_110">无锡市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_111" value="徐州市" name="region">
							<label for="ck_111">徐州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_112" value="常州市" name="region">
							<label for="ck_112">常州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_113" value="苏州市" name="region">
							<label for="ck_113">苏州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_114" value="南通市" name="region">
							<label for="ck_114">南通市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_115" value="连云港市" name="region">
							<label for="ck_115">连云港市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_116" value="淮安市" name="region">
							<label for="ck_116">淮安市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_117" value="盐城市" name="region">
							<label for="ck_117">盐城市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_118" value="扬州市" name="region">
							<label for="ck_118">扬州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_119" value="镇江市" name="region">
							<label for="ck_119">镇江市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_120" value="泰州市" name="region">
							<label for="ck_120">泰州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_121" value="宿迁市" name="region">
							<label for="ck_121">宿迁市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_11">浙江省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_11">
						<div class="check-box">
							<input type="checkbox" id="ck_122" value="杭州市" name="region">
							<label for="ck_122">杭州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_123" value="宁波市" name="region">
							<label for="ck_123">宁波市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_124" value="温州市" name="region">
							<label for="ck_124">温州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_125" value="嘉兴市" name="region">
							<label for="ck_125">嘉兴市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_126" value="湖州市" name="region">
							<label for="ck_126">湖州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_127" value="绍兴市" name="region">
							<label for="ck_127">绍兴市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_128" value="金华市" name="region">
							<label for="ck_128">金华市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_129" value="衢州市" name="region">
							<label for="ck_129">衢州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_130" value="舟山市" name="region">
							<label for="ck_130">舟山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_131" value="台州市" name="region">
							<label for="ck_131">台州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_132" value="丽水市" name="region">
							<label for="ck_132">丽水市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_12">安徽省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_12">
						<div class="check-box">
							<input type="checkbox" id="ck_133" value="合肥市" name="region">
							<label for="ck_133">合肥市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_134" value="抚湖市" name="region">
							<label for="ck_134">抚湖市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_135" value="蚌埠市" name="region">
							<label for="ck_135">蚌埠市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_136" value="淮南市" name="region">
							<label for="ck_136">淮南市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_137" value="马鞍山市" name="region">
							<label for="ck_137">马鞍山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_138" value="淮北市" name="region">
							<label for="ck_138">淮北市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_139" value="铜陵市" name="region">
							<label for="ck_139">铜陵市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_140" value="安庆市" name="region">
							<label for="ck_140">安庆市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_141" value="黄山市" name="region">
							<label for="ck_141">黄山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_142" value="滁州市" name="region">
							<label for="ck_142">滁州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_143" value="阜阳市" name="region">
							<label for="ck_143">阜阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_144" value="宿州市" name="region">
							<label for="ck_144">宿州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_145" value="六安市" name="region">
							<label for="ck_145">六安市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_146" value="亳州市" name="region">
							<label for="ck_146">亳州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_147" value="池州市" name="region">
							<label for="ck_147">池州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_148" value="宣城市" name="region">
							<label for="ck_148">宣城市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_13">福建省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_13">
						<div class="check-box">
							<input type="checkbox" id="ck_149" value="福州市" name="region">
							<label for="ck_149">福州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_150" value="厦门市" name="region">
							<label for="ck_150">厦门市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_151" value="莆田市" name="region">
							<label for="ck_151">莆田市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_152" value="三明市" name="region">
							<label for="ck_152">三明市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_153" value="泉州市" name="region">
							<label for="ck_153">泉州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_154" value="漳州市" name="region">
							<label for="ck_154">漳州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_155" value="南平市" name="region">
							<label for="ck_155">南平市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_156" value="龙岩市" name="region">
							<label for="ck_156">龙岩市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_157" value="宁德市" name="region">
							<label for="ck_157">宁德市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_14">江西省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_14">
						<div class="check-box">
							<input type="checkbox" id="ck_158" value="南昌市" name="region">
							<label for="ck_158">南昌市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_159" value="景德镇市" name="region">
							<label for="ck_159">景德镇市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_160" value="萍乡市" name="region">
							<label for="ck_160">萍乡市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_161" value="九江市" name="region">
							<label for="ck_161">九江市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_162" value="新余市" name="region">
							<label for="ck_162">新余市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_163" value="鹰潭市" name="region">
							<label for="ck_163">鹰潭市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_164" value="赣州市" name="region">
							<label for="ck_164">赣州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_165" value="吉安市" name="region">
							<label for="ck_165">吉安市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_166" value="宜春市" name="region">
							<label for="ck_166">宜春市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_167" value="抚州市" name="region">
							<label for="ck_167">抚州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_168" value="上饶市" name="region">
							<label for="ck_168">上饶市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_15">山东省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_15">
						<div class="check-box">
							<input type="checkbox" id="ck_169" value="济南市" name="region">
							<label for="ck_169">济南市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_170" value="青岛市" name="region">
							<label for="ck_170">青岛市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_171" value="淄博市" name="region">
							<label for="ck_171">淄博市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_172" value="枣庄市" name="region">
							<label for="ck_172">枣庄市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_173" value="东营市" name="region">
							<label for="ck_173">东营市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_174" value="烟台市" name="region">
							<label for="ck_174">烟台市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_175" value="潍坊市" name="region">
							<label for="ck_175">潍坊市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_176" value="济宁市" name="region">
							<label for="ck_176">济宁市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_177" value="泰安市" name="region">
							<label for="ck_177">泰安市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_178" value="威海市" name="region">
							<label for="ck_178">威海市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_179" value="日照市" name="region">
							<label for="ck_179">日照市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_180" value="莱芜市" name="region">
							<label for="ck_180">莱芜市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_181" value="临沂市" name="region">
							<label for="ck_181">临沂市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_182" value="德州市" name="region">
							<label for="ck_182">德州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_183" value="聊城市" name="region">
							<label for="ck_183">聊城市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_184" value="滨州市" name="region">
							<label for="ck_184">滨州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_185" value="菏泽市" name="region">
							<label for="ck_185">菏泽市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_16">河南省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_16">
						<div class="check-box">
							<input type="checkbox" id="ck_186" value="郑州市" name="region">
							<label for="ck_186">郑州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_187" value="开封市" name="region">
							<label for="ck_187">开封市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_188" value="洛阳市" name="region">
							<label for="ck_188">洛阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_189" value="平顶山市" name="region">
							<label for="ck_189">平顶山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_190" value="安阳市" name="region">
							<label for="ck_190">安阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_191" value="鹤壁市" name="region">
							<label for="ck_191">鹤壁市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_192" value="新乡市" name="region">
							<label for="ck_192">新乡市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_193" value="焦作市" name="region">
							<label for="ck_193">焦作市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_194" value="濮阳市" name="region">
							<label for="ck_194">濮阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_195" value="许昌市" name="region">
							<label for="ck_195">许昌市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_196" value="漯河市" name="region">
							<label for="ck_196">漯河市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_197" value="三门峡市" name="region">
							<label for="ck_197">三门峡市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_198" value="南阳市" name="region">
							<label for="ck_198">南阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_199" value="商丘市" name="region">
							<label for="ck_199">商丘市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_200" value="信阳市" name="region">
							<label for="ck_200">信阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_201" value="周口市" name="region">
							<label for="ck_201">周口市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_202" value="驻马店市" name="region">
							<label for="ck_202">驻马店市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_203" value="省直辖县级行政区划" name="region">
							<label for="ck_203">省直辖县级行政区划</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_17">湖北省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_17">
						<div class="check-box">
							<input type="checkbox" id="ck_204" value="武汉市" name="region">
							<label for="ck_204">武汉市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_205" value="黄石市" name="region">
							<label for="ck_205">黄石市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_206" value="十堰市" name="region">
							<label for="ck_206">十堰市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_207" value="宜昌市" name="region">
							<label for="ck_207">宜昌市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_208" value="襄阳市" name="region">
							<label for="ck_208">襄阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_209" value="鄂州市" name="region">
							<label for="ck_209">鄂州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_210" value="荆门市" name="region">
							<label for="ck_210">荆门市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_211" value="孝感市" name="region">
							<label for="ck_211">孝感市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_212" value="荆州市" name="region">
							<label for="ck_212">荆州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_213" value="黄冈市" name="region">
							<label for="ck_213">黄冈市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_214" value="咸宁市" name="region">
							<label for="ck_214">咸宁市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_215" value="随州市" name="region">
							<label for="ck_215">随州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_216" value="恩施土家族苗族自治州" name="region">
							<label for="ck_216">恩施土家族苗族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_217" value="省直辖县级行政区划" name="region">
							<label for="ck_217">省直辖县级行政区划</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_18">湖南省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_18">
						<div class="check-box">
							<input type="checkbox" id="ck_218" value="长沙市" name="region">
							<label for="ck_218">长沙市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_219" value="株洲市" name="region">
							<label for="ck_219">株洲市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_220" value="湘潭市" name="region">
							<label for="ck_220">湘潭市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_221" value="衡阳市" name="region">
							<label for="ck_221">衡阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_222" value="邵阳市" name="region">
							<label for="ck_222">邵阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_223" value="岳阳市" name="region">
							<label for="ck_223">岳阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_224" value="常德市" name="region">
							<label for="ck_224">常德市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_225" value="张家界市" name="region">
							<label for="ck_225">张家界市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_226" value="益阳市" name="region">
							<label for="ck_226">益阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_227" value="郴州市" name="region">
							<label for="ck_227">郴州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_228" value="永州市" name="region">
							<label for="ck_228">永州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_229" value="怀化市" name="region">
							<label for="ck_229">怀化市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_230" value="娄底市" name="region">
							<label for="ck_230">娄底市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_231" value="湘西土家族苗族自治州" name="region">
							<label for="ck_231">湘西土家族苗族自治州</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_19">广东省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_19">
						<div class="check-box">
							<input type="checkbox" id="ck_232" value="广州市" name="region">
							<label for="ck_232">广州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_233" value="韶关市" name="region">
							<label for="ck_233">韶关市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_234" value="深圳市" name="region">
							<label for="ck_234">深圳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_235" value="珠海市" name="region">
							<label for="ck_235">珠海市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_236" value="汕头市" name="region">
							<label for="ck_236">汕头市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_237" value="佛山市" name="region">
							<label for="ck_237">佛山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_238" value="江门市" name="region">
							<label for="ck_238">江门市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_239" value="湛江市" name="region">
							<label for="ck_239">湛江市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_240" value="茂名市" name="region">
							<label for="ck_240">茂名市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_241" value="肇庆市" name="region">
							<label for="ck_241">肇庆市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_242" value="惠州市" name="region">
							<label for="ck_242">惠州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_243" value="梅州市" name="region">
							<label for="ck_243">梅州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_244" value="汕尾市" name="region">
							<label for="ck_244">汕尾市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_245" value="河源市" name="region">
							<label for="ck_245">河源市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_246" value="阳江市" name="region">
							<label for="ck_246">阳江市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_247" value="清远市" name="region">
							<label for="ck_247">清远市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_248" value="东莞市" name="region">
							<label for="ck_248">东莞市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_249" value="中山市" name="region">
							<label for="ck_249">中山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_250" value="潮州市" name="region">
							<label for="ck_250">潮州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_251" value="揭阳市" name="region">
							<label for="ck_251">揭阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_252" value="云浮市" name="region">
							<label for="ck_252">云浮市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_20">海南省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_20">
						<div class="check-box">
							<input type="checkbox" id="ck_267" value="海口市" name="region">
							<label for="ck_267">海口市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_268" value="三亚市" name="region">
							<label for="ck_268">三亚市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_269" value="省直辖县级行政区划" name="region">
							<label for="ck_269">省直辖县级行政区划</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_21">四川省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_21">
						<div class="check-box">
							<input type="checkbox" id="ck_270" value="成都市" name="region">
							<label for="ck_270">成都市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_271" value="自贡市" name="region">
							<label for="ck_271">自贡市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_272" value="攀枝花市" name="region">
							<label for="ck_272">攀枝花市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_273" value="泸州市" name="region">
							<label for="ck_273">泸州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_274" value="德阳市" name="region">
							<label for="ck_274">德阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_275" value="绵阳市" name="region">
							<label for="ck_275">绵阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_276" value="广元市" name="region">
							<label for="ck_276">广元市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_277" value="遂宁市" name="region">
							<label for="ck_277">遂宁市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_278" value="内江市" name="region">
							<label for="ck_278">内江市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_279" value="乐山市" name="region">
							<label for="ck_279">乐山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_280" value="南充市" name="region">
							<label for="ck_280">南充市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_281" value="眉山市" name="region">
							<label for="ck_281">眉山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_282" value="宜宾市" name="region">
							<label for="ck_282">宜宾市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_283" value="广安市" name="region">
							<label for="ck_283">广安市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_284" value="达州市" name="region">
							<label for="ck_284">达州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_285" value="雅安市" name="region">
							<label for="ck_285">雅安市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_286" value="巴中市" name="region">
							<label for="ck_286">巴中市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_287" value="资阳市" name="region">
							<label for="ck_287">资阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_288" value="阿坝藏族羌族自治州" name="region">
							<label for="ck_288">阿坝藏族羌族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_289" value="甘孜藏族自治州" name="region">
							<label for="ck_289">甘孜藏族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_290" value="凉山彝族自治州" name="region">
							<label for="ck_290">凉山彝族自治州</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_22">贵州省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_22">
						<div class="check-box">
							<input type="checkbox" id="ck_291" value="贵阳市" name="region">
							<label for="ck_291">贵阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_292" value="六盘水市" name="region">
							<label for="ck_292">六盘水市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_293" value="遵义市" name="region">
							<label for="ck_293">遵义市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_294" value="安顺市" name="region">
							<label for="ck_294">安顺市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_295" value="毕节市" name="region">
							<label for="ck_295">毕节市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_296" value="铜仁市" name="region">
							<label for="ck_296">铜仁市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_297" value="黔西南布依族苗族自治州" name="region">
							<label for="ck_297">黔西南布依族苗族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_298" value="黔东南苗族侗族自治州" name="region">
							<label for="ck_298">黔东南苗族侗族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_299" value="黔南布依族苗族自治州" name="region">
							<label for="ck_299">黔南布依族苗族自治州</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_23">云南省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_23">
						<div class="check-box">
							<input type="checkbox" id="ck_300" value="昆明市" name="region">
							<label for="ck_300">昆明市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_301" value="曲靖市" name="region">
							<label for="ck_301">曲靖市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_302" value="玉溪市" name="region">
							<label for="ck_302">玉溪市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_303" value="保山市" name="region">
							<label for="ck_303">保山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_304" value="邵通市" name="region">
							<label for="ck_304">邵通市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_305" value="丽江市" name="region">
							<label for="ck_305">丽江市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_306" value="普洱市" name="region">
							<label for="ck_306">普洱市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_307" value="临沧市" name="region">
							<label for="ck_307">临沧市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_308" value="楚雄彝族自治州" name="region">
							<label for="ck_308">楚雄彝族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_309" value="红河哈尼族彝族自治州" name="region">
							<label for="ck_309">红河哈尼族彝族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_310" value="文山壮族苗族自治州" name="region">
							<label for="ck_310">文山壮族苗族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_311" value="西双版纳傣族自治州" name="region">
							<label for="ck_311">西双版纳傣族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_312" value="大理白族自治州" name="region">
							<label for="ck_312">大理白族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_313" value="德宏傣族景颇族自治州" name="region">
							<label for="ck_313">德宏傣族景颇族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_314" value="怒江傈僳族自治州" name="region">
							<label for="ck_314">怒江傈僳族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_315" value="迪庆藏族自治州" name="region">
							<label for="ck_315">迪庆藏族自治州</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_24">陕西省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_24">
						<div class="check-box">
							<input type="checkbox" id="ck_323" value="西安市" name="region">
							<label for="ck_323">西安市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_324" value="铜川市" name="region">
							<label for="ck_324">铜川市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_325" value="宝鸡市" name="region">
							<label for="ck_325">宝鸡市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_326" value="咸阳市" name="region">
							<label for="ck_326">咸阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_327" value="渭南市" name="region">
							<label for="ck_327">渭南市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_328" value="延安市" name="region">
							<label for="ck_328">延安市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_329" value="汉中市" name="region">
							<label for="ck_329">汉中市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_330" value="榆林市" name="region">
							<label for="ck_330">榆林市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_331" value="安康市" name="region">
							<label for="ck_331">安康市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_332" value="商洛市" name="region">
							<label for="ck_332">商洛市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_25">甘肃省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_25">
						<div class="check-box">
							<input type="checkbox" id="ck_333" value="兰州市" name="region">
							<label for="ck_333">兰州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_334" value="嘉峪关市" name="region">
							<label for="ck_334">嘉峪关市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_335" value="金昌市" name="region">
							<label for="ck_335">金昌市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_336" value="白银市" name="region">
							<label for="ck_336">白银市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_337" value="天水市" name="region">
							<label for="ck_337">天水市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_338" value="武威市" name="region">
							<label for="ck_338">武威市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_339" value="张掖市" name="region">
							<label for="ck_339">张掖市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_340" value="平凉市" name="region">
							<label for="ck_340">平凉市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_341" value="酒泉市" name="region">
							<label for="ck_341">酒泉市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_342" value="庆阳市" name="region">
							<label for="ck_342">庆阳市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_343" value="定西市" name="region">
							<label for="ck_343">定西市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_344" value="陇南市" name="region">
							<label for="ck_344">陇南市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_345" value="临夏回族自治州" name="region">
							<label for="ck_345">临夏回族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_346" value="甘南藏族自治州" name="region">
							<label for="ck_346">甘南藏族自治州</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_26">青海省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_26">
						<div class="check-box">
							<input type="checkbox" id="ck_347" value="西宁市" name="region">
							<label for="ck_347">西宁市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_348" value="海东地区" name="region">
							<label for="ck_348">海东地区</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_349" value="海北藏族自治州" name="region">
							<label for="ck_349">海北藏族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_350" value="黄南藏族自治州" name="region">
							<label for="ck_350">黄南藏族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_351" value="海南藏族自治州" name="region">
							<label for="ck_351">海南藏族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_352" value="果洛藏族自治州" name="region">
							<label for="ck_352">果洛藏族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_353" value="玉树藏族自治州" name="region">
							<label for="ck_353">玉树藏族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_354" value="海西蒙古族藏族自治州" name="region">
							<label for="ck_354">海西蒙古族藏族自治州</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_27">台湾省</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_27">
						<div class="check-box">
							<input type="checkbox" id="ck_377" value="台北市" name="region">
							<label for="ck_377">台北市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_378" value="高雄市" name="region">
							<label for="ck_378">高雄市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_379" value="基隆市" name="region">
							<label for="ck_379">基隆市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_380" value="台中市" name="region">
							<label for="ck_380">台中市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_381" value="台南市" name="region">
							<label for="ck_381">台南市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_382" value="新竹市" name="region">
							<label for="ck_382">新竹市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_383" value="嘉义市" name="region">
							<label for="ck_383">嘉义市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_384" value="县" name="region">
							<label for="ck_384">县</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_28">广西壮族自治区</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_28">
						<div class="check-box">
							<input type="checkbox" id="ck_253" value="南宁市" name="region">
							<label for="ck_253">南宁市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_254" value="柳州市" name="region">
							<label for="ck_254">柳州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_255" value="桂林市" name="region">
							<label for="ck_255">桂林市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_256" value="梧州市" name="region">
							<label for="ck_256">梧州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_257" value="北海市" name="region">
							<label for="ck_257">北海市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_258" value="防城港市" name="region">
							<label for="ck_258">防城港市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_259" value="钦州市" name="region">
							<label for="ck_259">钦州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_260" value="贵港市" name="region">
							<label for="ck_260">贵港市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_261" value="玉林市" name="region">
							<label for="ck_261">玉林市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_262" value="百色市" name="region">
							<label for="ck_262">百色市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_263" value="贺州市" name="region">
							<label for="ck_263">贺州市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_264" value="河池市" name="region">
							<label for="ck_264">河池市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_265" value="来宾市" name="region">
							<label for="ck_265">来宾市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_266" value="崇左市" name="region">
							<label for="ck_266">崇左市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_29">内蒙古自治区</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_29">
						<div class="check-box">
							<input type="checkbox" id="ck_61" value="呼和浩特市" name="region">
							<label for="ck_61">呼和浩特市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_62" value="包头市" name="region">
							<label for="ck_62">包头市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_63" value="乌海市" name="region">
							<label for="ck_63">乌海市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_64" value="赤峰市" name="region">
							<label for="ck_64">赤峰市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_65" value="通辽市" name="region">
							<label for="ck_65">通辽市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_66" value="鄂尔多斯市" name="region">
							<label for="ck_66">鄂尔多斯市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_67" value="呼伦贝尔市" name="region">
							<label for="ck_67">呼伦贝尔市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_68" value="巴彦淖尔市" name="region">
							<label for="ck_68">巴彦淖尔市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_69" value="乌兰察布市" name="region">
							<label for="ck_69">乌兰察布市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_70" value="兴安盟" name="region">
							<label for="ck_70">兴安盟</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_71" value="锡林郭勒盟" name="region">
							<label for="ck_71">锡林郭勒盟</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_72" value="阿拉善盟" name="region">
							<label for="ck_72">阿拉善盟</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_30">西藏自治区</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_30">
						<div class="check-box">
							<input type="checkbox" id="ck_316" value="拉萨市" name="region">
							<label for="ck_316">拉萨市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_317" value="昌都地区" name="region">
							<label for="ck_317">昌都地区</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_318" value="山南地区" name="region">
							<label for="ck_318">山南地区</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_319" value="日喀则地区" name="region">
							<label for="ck_319">日喀则地区</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_320" value="那曲地区" name="region">
							<label for="ck_320">那曲地区</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_321" value="阿里地区" name="region">
							<label for="ck_321">阿里地区</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_322" value="林芝地区" name="region">
							<label for="ck_322">林芝地区</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_31">宁夏回族自治区</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_31">
						<div class="check-box">
							<input type="checkbox" id="ck_355" value="银川市" name="region">
							<label for="ck_355">银川市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_356" value="石嘴山市" name="region">
							<label for="ck_356">石嘴山市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_357" value="吴忠市" name="region">
							<label for="ck_357">吴忠市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_358" value="固原市" name="region">
							<label for="ck_358">固原市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_359" value="中卫市" name="region">
							<label for="ck_359">中卫市</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_32">新疆维吾尔自治区</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_32">
						<div class="check-box">
							<input type="checkbox" id="ck_360" value="乌鲁木齐市" name="region">
							<label for="ck_360">乌鲁木齐市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_361" value="克拉玛依市" name="region">
							<label for="ck_361">克拉玛依市</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_362" value="吐鲁番地区" name="region">
							<label for="ck_362">吐鲁番地区</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_363" value="哈密地区" name="region">
							<label for="ck_363">哈密地区</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_364" value="昌吉回族自治州" name="region">
							<label for="ck_364">昌吉回族自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_365" value="博尔塔拉蒙古自治州" name="region">
							<label for="ck_365">博尔塔拉蒙古自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_366" value="巴音郭楞蒙古自治州" name="region">
							<label for="ck_366">巴音郭楞蒙古自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_367" value="阿克苏地区" name="region">
							<label for="ck_367">阿克苏地区</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_368" value="克孜勒苏柯尔克孜自治州" name="region">
							<label for="ck_368">克孜勒苏柯尔克孜自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_369" value="喀什地区" name="region">
							<label for="ck_369">喀什地区</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_370" value="和田地区" name="region">
							<label for="ck_370">和田地区</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_371" value="伊犁哈萨克自治州" name="region">
							<label for="ck_371">伊犁哈萨克自治州</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_372" value="塔城地区" name="region">
							<label for="ck_372">塔城地区</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_373" value="阿勒泰地区" name="region">
							<label for="ck_373">阿勒泰地区</label>
						</div>
						<div class="check-box">
							<input type="checkbox" id="ck_374" value="自治区直辖县级行政区划" name="region">
							<label for="ck_374">自治区直辖县级行政区划</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_33">香港特别行政区</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_33">
						<div class="check-box">
							<input type="checkbox" id="ck_375" value="香港" name="region">
							<label for="ck_375">香港</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-sm-2 skin-minimal">
						<div class="check-box">

							<label for="ck_34">澳门特别行政区</label>
						</div>
					</div>
					<div class="formControls col-xs-8 col-sm-10 skin-minimal" id="td_dq_34">
						<div class="check-box">
							<input type="checkbox" id="ck_376" value="澳门" name="region">
							<label for="ck_376">澳门</label>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-11 col-xs-offset-3 col-sm-offset-2">
				<button onclick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
				<button onclick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
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
<script type="text/javascript" src="/dy/Public/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/dy/Public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/dy/Public/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>

<script type="text/javascript">
    $("#gjc-1").click(function () {
        $("#xxxky").hide();
    })
    $("#gjc-2").click(function () {
        $("#xxxky").show();
    })

    $("#tfdq-1").click(function () {
        $("#diqxuanz").hide();
    })
    $("#tfdq-2").click(function () {
        $("#diqxuanz").show();
    })
    function selectCheckBoxes(domId, value) {
        alert(222);
        var inputs = document.getElementById(domId).getElementsByTagName("input");
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].type == 'checkbox') {
                inputs[i].checked = value.checked;
            }
        }
    }
    $(function () {

        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });
        //表单验证
        $("#form-product-add").validate({
            rules: {
                name: { required: true, },
                wifi: { required: true, },
                age: { required: true, },
                keyword: { required: true, },
                region: { required: true, },
            },
            onkeyup: false,
            focusCleanup: true,
            success: "valid"
        });
    });
</script>

</body>
</html>