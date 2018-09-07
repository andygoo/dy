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
	<form action="<?php echo U('Addidea/index');?>" method="post" class="form form-horizontal" id="form-member-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width:135px;"><span class="c-red">*</span>推广单元名称：</label>
			<div class="formControls col-xs-8 col-sm-5">
				<?php echo ($u_name); ?>
			</div>
			<input type="hidden" value="<?php echo ($u_name); ?>" name="c_utilname">
			<input type="hidden" value="<?php echo ($id); ?>" name="c_danid">
			<input type="hidden" value="<?php echo ($did); ?>" name="did">
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>创意视频：</label>
			<div class="formControls col-xs-8 col-sm-8">
				<button type="button" class="layui-btn" id="test5"><i class="layui-icon"></i>选择视频</button>
				<div class="layui-upload-list" style="display: inherit">
					<input type="hidden" id="videos" required="required" name="c_videourl"  value=""/>
					<a href="javascript:deletevide();" title="点击删除"><img style="display: none;" id="deletevideo" src="/dy/Public/admin/js/img/uploadify-cancel.png">
					</a>
					<video class="" onclick="playPause()" autoplay="autoplay"  id="demo" style="display: none;" width="250" heigt="200"/>
					<div id="imglist" style=" width:320px; height:150px; border:1px solid #cdcdcd; text-align:center; line-height:150px; vertical-align:middle;"> 视频大小请不要超过50M  </div>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>创意名称：</label>
			<div class="formControls col-xs-8 col-sm-8">
				<input type="text" class="input-text" value="" placeholder="最长6个字" id="name" name="c_name" style="width: 350px; ">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>创意标题：</label>
			<div class="formControls col-xs-8 col-sm-8">
				<input type="text" class="input-text" value="" placeholder="最长20个字" id="title" name="c_title" style=" width: 350px;" />
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>创意链接：</label>
			<div class="formControls col-xs-8 col-sm-8">
				<input type="text" class="input-text" value="http://" placeholder="" id="url" name="c_url" style=" width: 350px;" />
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>广告按钮：</label>
			<div class="formControls col-xs-8 col-sm-8">
				<input type="text" class="input-text" value="立即点击" placeholder="" id="button" name="c_button" style=" width: 350px;" />
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-1" style=" width: 135px;"><span class="c-red">*</span>广告描述：</label>
			<div class="formControls col-xs-8 col-sm-8">
				<input type="text" class="input-text" value="" placeholder="" id="note" name="c_desc" style=" width: 350px;" />
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<a onclick="article_save_submit();" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe632;</i> 提交</a>
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
<script>
    layui.use('upload', function(){
        var $ = layui.jquery
            ,upload = layui.upload;
        upload.render({
            elem: '#test5'
            ,url:"<?php echo U('image/uploadvideo');?>"
            ,accept: 'video' //视频
            ,done: function(res){
                console.log(res.data)
                $("#videos").attr('value',"uploadvideo/"+res.data);
                $("#demo").attr('src',"/dy/Public/uploadvideo/"+res.data);
                $('#demo').show();
                $('#deletevideo').show();
            }
        });
    });
</script>
<script>
    function deletevide() {
        var src=$('#demo').attr('src');
        //alert(src);
        $.ajax({
            type: "POST", //访问WebService使用Post方式请求
            url: "<?php echo U('Addidea/del');?>", //调用WebService的地址和方法名称组合---WsURL/方法名
            data: "src=" + src,
            success: function(data){
                console.log(data);
            }
        });
        $("#videos").attr('value','');
        $("#demo").attr('src','');
        $('#deletevideo').hide();
        $('#demo').hide();

    }
</script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});

});
function playPause() {
    var myVideo = document.getElementsByTagName('video')[0];
    if (myVideo.paused){
        myVideo.play();
    }
    else{
        myVideo.pause();
    }
}
</script>

<script>
    function article_save_submit() {
        if($('#name').val().length<=0){
            alert('名称不可为空');
            return false;
		}else if($('#title').val().length<=0){
            alert('标题不可为空');
            return false;
        }else if($('#url').val().length<=0){
            alert('创意链接不可为空');
            return false;
        }else if($('#button').val().length<=0){
            alert('广告按钮不可为空');
            return false;
        }else{
            $('form').submit();
            alert('添加成功，请刷新即可');
			parent.location.reload();
		}

    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>