<?php if (!defined('THINK_PATH')) exit();?>﻿


<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>抖音-记录美好生活</title>
    <link href="/dy/Public/admin/static/login/css/h-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="/dy/Public/admin/static/login/css/h-ui.login.css" rel="stylesheet" type="text/css" />
    <link href="/dy/Public/admin/static/login/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/dy/Public/admin/static/login/css/iconfont.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .validation-summary-errors {
          color:red;
        }
    </style>
    <script type="text/javascript">
        if (self != top) {
            top.location.href = location.href;
        }
    </script>
</head>
<body>
    <div class="loginWraper">
        <div id="loginform" class="loginBox">
            <img src="/dy/Public/admin/static/login/picture/logo.png" style=" height: 45px; margin-left:10px; margin-top:10px;" />
            <div style=" width:540px; height:430px; padding-left:60px; float:left;">
                <div style=" font-size:32px; color:#000; width:430px; margin-top:35px; text-align:center;">管理员登录</div>
                <form class="form form-horizontal" id="formlogin" action="/dy/Superadmin/User/mylogin.html" method="post">
                    <div class="row cl">
                        <div class="formControls col-xs-10">
                            <img src="/dy/Public/admin/static/login/picture/tt0.png" class="ttu" /><input id="aname" name="name" type="text" placeholder="用户名" value="" class="input-text  xxx1">
                        </div>
                    </div>
                    <div class="row cl">
                        <div class="formControls col-xs-10">
                            <img src="/dy/Public/admin/static/login/picture/tt1.png" class="ttu" /><input id="apwd" name="password" type="password" value="" placeholder="密码" class="input-text  xxx2">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-3"><i class="Hui-iconfont"></i></label>
                        
                    </div>
                    <div class="row cl">
                        <div class="formControls col-xs-10" style="text-align:center;">
                            <input name="" type="submit" class="btn btn-success radius xxx3" value="   ">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script type="text/javascript" src="/dy/Public/admin/static/login/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/dy/Public/admin/static/login/js/jquery.validate.js"></script>
<script type="text/javascript" src="/dy/Public/admin/static/login/js/validate-methods.js"></script>
<script type="text/javascript" src="/dy/Public/admin/static/login/js/messages_zh.js"></script>
<script type="text/javascript" src="/dy/Public/admin/static/login/js/h-ui.min.js"></script>
    <script type="text/javascript">
        $(function () {
            //表单验证
            $("#formlogin").validate({
                rules: {
                    aname: { required: true, },
                    apwd: { required: true, },                    
                },
                onkeyup: false,
                focusCleanup: true,
                success: "valid"
            });
        });
    </script>
</body>
</html>