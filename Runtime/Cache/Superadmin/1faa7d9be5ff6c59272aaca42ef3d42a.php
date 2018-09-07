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

<title>添加用户 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="<?php echo U('Addchild/index');?>" method="post" class="form form-horizontal" id="form-member-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="username" name="dloginname" required="required">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>密&nbsp;码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="password" name="dpassword" required="required">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>公司名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="companyname" name="dcompanyname" required="required">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>开户链接：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="durl" name="durl" required="required">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>营业执照：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<button type="button" class="layui-btn" style="background-color: #5a98de;display: block;"  id="test1">上传营业执照</button>
				<span class="btn-upload form-group" style="height: auto;">
				<input type="hidden" id="uploadyinye" required="required" name="dyinyeimg" multiple="true" value="images/nopic.png"/>
					<a href="javascript:deleteyinyeimg();" title="点击删除"><img style="display: none;margin-left: 120px;" id="deleteyinye" src="/dy/Public/admin/static/h-ui/images/uploadify-cancel.png">
					</a>
					<img class="layui-upload-img"  id="demo1" style="display: none;margin-left: -140px;" width="100" height="100">
					<p id="demoText1"></p>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>ICP备案：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<button type="button" class="layui-btn" style="background-color: #5a98de;display: block;"  id="test2">上传ICP备案执照</button>
				<span class="btn-upload form-group" style="height: auto;">
				<input type="hidden" id="uploadicp" required="required" name="dicpimg" multiple="true" value="images/nopic.png"/>
					<a href="javascript:deleteicpimg();" title="点击删除"><img style="display: none;margin-left: 120px;" id="deleteicp" src="/dy/Public/admin/static/h-ui/images/uploadify-cancel.png">
					</a>
					<img class="layui-upload-img"  id="demo2" style="display: none;margin-left: -140px;" width="100" height="100">
					<p id="demoText2"></p>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>其他图片：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<button type="button" class="layui-btn" style="background-color: #5a98de;display: block;" id="test3">上传图片</button>
				<span class="btn-upload form-group" style="height: auto;">
				<input type="hidden" id="uploadother" required="required" name="dotherimg" multiple="true" value="images/nopic.png"/>
					<a href="javascript:deleteotherimg();" title="点击删除"><img style="display: none;margin-left: 120px;" id="deleteother" src="/dy/Public/admin/static/h-ui/images/uploadify-cancel.png">
					</a>
					<img class="layui-upload-img"  id="demo3" style="display: none;margin-left: -140px;" width="100" height="100">
					<p id="demoText3"></p>
				</span>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<button onclick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 提交</button>
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
    function article_save_submit() {
        if($('#username').val().length<=0){
            alert('用户名不可为空');
            return false;
		}else if($('#password').val().length<=0){
            alert('密码不可为空');
            return false;
        }else if($('#companyname').val().length<=0){
            alert('公司名称不可为空');
            return false;
        }else if($('#durl').val().length<=0){
            alert('开户链接不可为空');
            return false;
        }else{
            $('form').submit();
		}

    }
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
                $("#uploadyinye").attr('value',"admin/uploads/"+res.data);
                $('#deleteyinye').show();
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
                $("#uploadicp").attr('value',"admin/uploads/"+res.data);
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
        $('#deleteyinye').hide();
        $('#demo1').hide();
    }
    function deleteicpimg() {
        $("#uploadicp").attr('value','');
        $("#demo2").attr('src','');
        $('#deleteicp').hide();
        $('#demo2').hide();
    }
    function deleteotherimg() {
        $("#uploadother").attr('value','');
        $("#demo3").attr('src','');
        $('#deleteother').hide();
        $('#demo3').hide();
    }

</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>