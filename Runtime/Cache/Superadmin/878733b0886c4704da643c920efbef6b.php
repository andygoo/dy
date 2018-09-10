<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
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
	<!--layer-->
	<link href="/dy/Public/admin/static/h-ui/js/layer/css/layui.css" rel="stylesheet">
	<script src="/dy/Public/admin/static/h-ui/js/layer/layui.js" charset="utf-8"></script>
<!--[if IE 6]>
<script type="text/javascript" src="/dy/Public/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>填写拒绝理由</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-product-add" enctype="multipart/form-data" onkeydown="if(event.keyCode==13)return false;">
		<div class="row cl">
			<input type="hidden" value="<?php echo ($did); ?>" name="did">
			<label class="form-label col-xs-4 col-sm-1" style=" width:115px;"><span class="c-red">*</span>拒绝理由：</label>
			<div class="formControls col-xs-8 col-sm-8">
				<textarea id="reson" name="dcomment" style=" width:300px; height:100px;"></textarea>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-11 col-xs-offset-3 col-sm-offset-2">
				<a onclick="save_submit();" id="savebt" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</a>
				<button onclick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/dy/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/dy/Public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/dy/Public/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/dy/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本--> 
<script type="text/javascript" src="/dy/Public/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/dy/Public/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/dy/Public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/dy/Public/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>


<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});

});
</script>
<script>

    function save_submit() {
        if($('#reson').val().length<=0||$('#total').val()<0){
            alert('请输入拒绝理由');
            return false;
        }else{
            var getdata=$('#form-product-add').serializeArray();
            $('#savebt').attr('onclick','');
            $('#savebt').removeClass("btn-primary");
           $.post("<?php echo U('Refuse/index');?>",
			   {
			       data:getdata
			   },function (e) {
				e=JSON.parse(e);
				console.log(e)
				if (e.status){
				    parent.location.reload();
                    $('#savebt').attr('onclick','save_submit();');
                    $('#savebt').addClass("btn-primary");
				    console.log(e.msg);
				}else{
				    alert('添加失败');
                    parent.location.reload();
                    console.log(e.msg);
				}
           })
        }

    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>