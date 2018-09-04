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
<script type="text/javascript" src="/douyin/Public/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/douyin/Public/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/douyin/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/douyin/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/douyin/Public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/douyin/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/douyin/Public/admin/static/h-ui.admin/css/style.css" />
	<!--layer-->
	<link href="/douyin/Public/admin/static/h-ui/js/layer/css/layui.css" rel="stylesheet">
	<script src="/douyin/Public/admin/static/h-ui/js/layer/layui.js" charset="utf-8"></script>
<!--[if IE 6]>
<script type="text/javascript" src="/douyin/Public/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>编辑子账号</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
		<input type="hidden" value="<?php echo ($detail["did"]); ?>" name="did">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>公司名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<?php echo ($detail["dcompanyname"]); ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>曝光最低值：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($detail["g_showglsmall"]); ?>" placeholder="" id="showglsmall" name="g_showglsmall">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>曝光最高值：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($detail["g_showgltall"]); ?>" placeholder="" id="showgltall" name="g_showgltall">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>点击最低值：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($detail["g_clicksmall"]); ?>" placeholder="" id="clicksmall" name="g_clicksmall">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>点击最高值：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($detail["g_clicktall"]); ?>" placeholder="" id="clicktall" name="g_clicktall">
			</div>
		</div>
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<a onclick="save_submit();" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe632;</i> 保存</a>
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/douyin/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/douyin/Public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/douyin/Public/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/douyin/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本--> 
<script type="text/javascript" src="/douyin/Public/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/douyin/Public/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/douyin/Public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/douyin/Public/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>


<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-member-add").validate({
		rules:{
			username:{
				required:true,
				minlength:2,
				maxlength:16
			},
			sex:{
				required:true,
			},
			mobile:{
				required:true,
				isMobile:true,
			},
			email:{
				required:true,
				email:true,
			},
			uploadfile:{
				required:true,
			},
			
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			//$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			//parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});
</script>
<script>
    layui.use('upload', function(){
        var $ = layui.jquery
            ,upload = layui.upload
            ,laydate = layui.laydate;
        //营业执照上传
        var uploadInst1 = upload.render({
            elem: '#test1'
            ,url: "<?php echo U('image/uploadfortp');?>"
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    $('#demo1').attr('src', result); //图片链接（base64）
                });
            }
            ,done: function(res){
                //如果上传失败
                if(res.code > 0){
                    return layer.msg('上传失败');
                }
                console.log(res);
                //var obj=JSON.parse(res);
                console.log(res.data);
                $("#uploadyyimg").attr('value',"admin/uploads/"+res.data);
                $('#deleteyy').show();
                $('#demo1').show();
                //上传成功
            }
            ,error: function(){
                //演示失败状态，并实现重传
                var demoText = $('#demoText1');
                demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
                demoText.find('.demo-reload').on('click', function(){
                    uploadInst1.upload();
                });
            }
        });
        //icp图片
        var uploadInst2 = upload.render({
            elem: '#test2'
            ,url: "<?php echo U('image/uploadfortp');?>"
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    $('#demo2').attr('src', result); //图片链接（base64）
                });
            }
            ,done: function(res){
                //如果上传失败
                if(res.code > 0){
                    return layer.msg('上传失败');
                }
                console.log(res);
                //var obj=JSON.parse(res);
                console.log(res.data);
                $("#uploadicpimg").attr('value',"admin/uploads/"+res.data);
                $('#deleteicp').show();
                $('#demo2').show();
                //上传成功
            }
            ,error: function(){
                //演示失败状态，并实现重传
                var demoText = $('#demoText2');
                demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
                demoText.find('.demo-reload').on('click', function(){
                    uploadInst2.upload();
                });
            }
        });
        //其他图片
        var uploadInst3 = upload.render({
            elem: '#test3'
            ,url: "<?php echo U('image/uploadfortp');?>"
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    $('#demo3').attr('src', result); //图片链接（base64）
                });
            }
            ,done: function(res){
                //如果上传失败
                if(res.code > 0){
                    return layer.msg('上传失败');
                }
                console.log(res);
                //var obj=JSON.parse(res);
                console.log(res.data);
                $("#uploadother").attr('value',"admin/uploads/"+res.data);
                $('#deleteother').show();
                $('#demo3').show();
                //上传成功
            }
            ,error: function(){
                //演示失败状态，并实现重传
                var demoText = $('#demoText3');
                demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
                demoText.find('.demo-reload').on('click', function(){
                    uploadInst3.upload();
                });
            }
        });

    });
</script>
<script>
    function deleteyinyeimg() {
        $("#uploadyinye").attr('value','');
        $("#demo1").attr('src','');
        $('#deleteyy').hide();
        $('#demo1').hide();
    }
    function deleteicpimg() {
        $("#uploadicp").attr('value','');
        $("#demo2").attr('src','');
        $('#deleteicp').hide();
        $('#demo2').hide();
    }
    function deleteotherimg() {
        $("#uploadotherimg").attr('value','');
        $("#demo3").attr('src','');
        $('#deleteother').hide();
        $('#demo3').hide();
    }
</script>
<script>
    function save_submit() {
        if($('#showglsmall').val().length<=0||$('#showglsmall').val()<0){
            alert('最低曝光率值不可为空并不小于0');
            return false;
        }else if($('#showgltall').val().length<=0||$('#showgltall').val()<0){
            alert('最高曝光率值不可为空并不小于0');
            return false;
        }else if($('#clicksmall').val().length<=0||$('#clicksmall').val()<0){
            alert('最低点击率不可为空并不小于0');
            return false;
        }else if($('#clicktall').val().length<=0||$('#clicktall').val()<0){
            alert('最高点击率不可为空并不小于0');
            return false;
        }else{
            var getdata=$('#form-member-add').serializeArray();
            var index = layer.load(0, {shade: false});
            var index = layer.load(1, {
                shade: [0.1,'#fff']
            });
           $.post("/douyin/Superadmin/Gailv/editgailv.html?did=5/editgailv",
			   {
			       data:getdata
			   },function (e) {
				e=JSON.parse(e);
				console.log(e)
				if (e.status){
				    parent.location.reload();
				    console.log(e.msg);
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
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>