<?php
namespace Superadmin\Controller;
class SetpasswordController extends \Think\Controller{
    function index()
    {
        $getdid = I('did');
        $this->did = $getdid;
        if (IS_POST) {
            $adminpsw = I('adminpsw');
            $newpsw = I('newpsw');
            $did = I('did');
            $upda = array();
            $upda['dpassword'] = $newpsw;
            $upda['dpasswordmd5'] = md5("itxiaolong3" . $newpsw);
            $iscz = M('admin')->where('password=' . "'" . $adminpsw . "'")->find();
            $arr = array();
            if ($iscz){
                $upre=M('shop')->where('did='.$did)->save($upda);
                if($upre){
                    $arr['status']=1;
                    $arr['msg']='重置成功';
                    echo json_encode($arr);
                    exit();
                }else{
                    $arr['status']=-0;
                    $arr['msg']='编辑失败';
                    echo json_encode($arr);
                    exit();
                }
            }else{
                $arr['status']=-1;
                $arr['msg']='管理员密码有误';
                echo json_encode($arr);
                exit();
            }

        } else {
            $this->display('Setpassword/index');
        }
    }
}