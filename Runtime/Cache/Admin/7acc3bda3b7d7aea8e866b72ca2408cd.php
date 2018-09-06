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
<![endif]-->
<title>添加计划</title>
</head>
<body>


<div class="page-container" style=" padding-left:50px;">
	<form action="" method="post" class="form form-horizontal" id="form-product-add" enctype="multipart/form-data" onkeydown="if(event.keyCode==13)return false;">
		<div class="row cl">
			<input type="hidden" value="<?php echo ($did); ?>" name="p_sid">
			<label class="form-label col-xs-4 col-sm-1" style=" width:115px;"><span class="c-red">*</span>计划名称：</label>
			<div class="formControls col-xs-8 col-sm-8">
				<input type="text" class="input-text" value="" placeholder="" id="name" name="p_name" style=" width:200px;">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width:115px;"><span class="c-red">*</span>每日预算：</label>
			<div class="formControls col-xs-8 col-sm-8">
				<input type="text" class="input-text" value="" placeholder="每日预算不能少于100" id="maxRmb" name="p_repnum" style=" width: 200px;">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width:115px;"><span class="c-red">*</span>广告出价：</label>
			<div class="formControls col-xs-8 col-sm-8">
				<input type="text" class="input-text" value="<?php echo ($adprice); ?>" readonly placeholder="" id="price" name="p_price" style=" width: 200px;" />
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-11 col-xs-offset-3 col-sm-offset-2">
				<a onclick="save_submit();" id="savebt" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</a>
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
<script type="text/javascript">

    $(function () {

        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        //表单验证
        $("#form-product-add").validate({
            rules: {
                password: { required: true, },
                newPassword: { required: true, maxlength: 6, },
                newPassword2: { required: true, equalTo: "#password" },
            },
            onkeyup: false,
            focusCleanup: true,
            success: "valid"
        });
    });
    function save_submit() {
        if($('#name').val().length<=0){
            alert('请输入计划名称');
            return false;
        }else if($('#maxRmb').val().length<=0||$('#maxRmb').val()<100){
            alert('每日预算不能少于100');
            return false;
        }else{
            var getdata=$('#form-product-add').serializeArray();
            var index = layer.load(0, {shade: false});
            var index = layer.load(1, {
                shade: [0.1,'#fff']
            });
            $('#savebt').attr('onclick','');
            $('#savebt').removeClass("btn-primary");
            $.post("<?php echo U('Addplan/index');?>",
                {
                    data:getdata
                },function (e) {
                    e=JSON.parse(e);
                    console.log(e)
                    if (e.status==1){
                        parent.location.reload();
                        $('#savebt').attr('onclick','save_submit();');
                        $('#savebt').addClass("btn-primary");
                        console.log(e.msg);
                    }else if(e.status==-1){
                        alert('最多添加一个计划');
                        layer_close();
                    }else{
                        alert('添加失败');
                        parent.location.reload();
                        console.log(e.msg);
                    }
                })

            //$('#form-member-add').submit();
        }

    }
</script>

</body>
</html>