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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 广告主列表  <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="35"><input name="" type="checkbox" value=""></th>
				<th width="35">ID</th>
				<th width="50">用户名</th>
				<th width="60">公司名称</th>
				<th width="70">开户链接</th>
				<th width="50">余额</th>
				<th width="60">历史消耗</th>
				<th width="70">审核状态</th>
				<th width="70">充值</th>
				<th width="70">查看计划</th>
				<th width="70">创意审核</th>
				<th width="70">开启状态</th>
				<th width="120">操作</th>

			</tr>
		</thead>
		<tbody>
		<?php if(is_array($shopinfo)): foreach($shopinfo as $key=>$v): ?><tr class="text-c">
				<td><input name="" type="checkbox" value="<?php echo ($v["did"]); ?>"></td>
				<td><?php echo ($v["did"]); ?></td>
				<td><?php echo ($v["dloginname"]); ?></td>
				<td><?php echo ($v["dcompanyname"]); ?></td>
				<td><div style=" width:200px; height:22px; overflow:hidden;"><a href="<?php echo ($v["durl"]); ?>" target="_blank"><?php echo ($v["durl"]); ?></a></div></td>
				<td><?php echo ((isset($v["dyue"]) && ($v["dyue"] !== ""))?($v["dyue"]):'0.00'); ?></td>
				<td><?php echo ((isset($v["dhistorypay"]) && ($v["dhistorypay"] !== ""))?($v["dhistorypay"]):'0.00'); ?></td>
				<td><?php if($v["dshstatus"] == 1): ?><span class='label label-success radius'>已通过</span><?php elseif($v["dshstatus"] == 0): ?><span class='label label-defaunt radius'>待审核</span><?php else: ?><span class='label label-defaunt radius'>已拒绝</span><?php endif; ?></td>
				<td><a title="立即充值" href="javascript:;" onclick="member_add('立即充值', '<?php echo u('Addmoney/index');?>?did=<?php echo ($v["did"]); ?>',  '550','300')" style="text-decoration:none">立即充值</a></td>
				<td><a title="查看计划" href="javascript:;" onclick="member_add('<?php echo ($v["dcompanyname"]); ?>-广告计划', '<?php echo u('Adplan/index');?>?did=<?php echo ($v["did"]); ?>', '1000','400')" style="text-decoration:none">查看计划</a></td>
				<td><a title="创意审核" href="javascript:;" onclick="member_add('创意审核', '<?php echo u('Chuanyi/index');?>?did=<?php echo ($v["did"]); ?>', '1000','400')" style="text-decoration:none">创意审核</a></td>
				<td><?php echo ($v['dyue']==0?"<span class='label label-defaunt radius'>已暂停":"<span class='label label-success radius'>开启中"); ?></span></td>
				<td class="f-14">
					<?php if($v["dshstatus"] == 1): ?><a title="拒绝" href="javascript:;" onclick="member_edit('填写拒绝理由', '<?php echo u('Refuse/index');?>?did=<?php echo ($v["did"]); ?>', '550','400')" style="text-decoration:none">拒绝</a>
						<?php else: ?>	<a title="通过" href="javascript:;" onclick="changstatus(this,'<?php echo ($v["did"]); ?>')" style="text-decoration:none">通过</a><?php endif; ?>

						<a title="编辑" onclick="member_edit('编辑','<?php echo u('Accountlist/editchild');?>?did=<?php echo ($v["did"]); ?>','880','510')" style="text-decoration:none">编辑</a>
					&nbsp;| &nbsp;
					<a title="充值记录" href="javascript:;" onclick="member_edit('充值记录','<?php echo u('Recordlist/index');?>?did=<?php echo ($v["did"]); ?>','880','510')" style="text-decoration:none">充值记录</a>
					&nbsp;| &nbsp;
					<a title="每日统计" href="javascript:;" onclick="member_edit('每日统计', '<?php echo u('Everydaycount/index');?>?did=<?php echo ($v["did"]); ?>', '880','520')" style="text-decoration:none">每日统计</a>
					&nbsp;| &nbsp;
					<a title="重置密码" href="javascript:;" onclick="change_password('重置密码', '<?php echo u('Setpassword/index');?>?did=<?php echo ($v["did"]); ?>','400','400')" style="text-decoration:none">重置密码</a>
					&nbsp;| &nbsp;
					<a title="模拟登陆" href="/dy/index.php/admin?sid=<?php echo ($v["did"]); ?>" target="_blank" style="text-decoration:none">模拟登陆</a>
				</td>
			</tr><?php endforeach; endif; ?>


		</tbody>
	</table>
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
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
		]
	});
	
});
//修改状态
function changstatus(obj, id) {
    layer.confirm('是否给予通过？', function (index) {
        $.post("<?php echo U('Refuse/pass');?>",
            {
                did:id
            },function (e) {
                e=JSON.parse(e);
                console.log(e)
                if (e.status==1){
                    layer.msg('已通过!', { icon: 1, time: 1000 });
                    parent.location.reload();
                }else if(e.status==-1){
                    layer.msg('参数有误!', { icon: 1, time: 1000 });
				}else{
                    layer.msg('修改失败!', { icon: 1, time: 1000 });
                    parent.location.reload();
                }
            })
    });
}

/*充值-添加*/
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
function member_edit(title,url,w,h){
	layer_show(title,url,w,h);
}
function record_list(title,url,w,h){
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