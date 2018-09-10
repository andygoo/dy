<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:50
 */
namespace Superadmin\Controller;
use Think\Controller;
class AddmoneyController extends Controller{
    function index(){
        $classModel = M('shop');
        if(IS_POST){
            $data=I('data');
            $handle = array();
            $upyue=array();
            for($i=0;$i<count($data);$i++) {
                $handle[$data[$i]['name']] = $data[$i]['value'];
            }
            $getshopinfo = M('admin')->where('id=2')->find();
            $upyue['dyue']=$getshopinfo['dyue']+$handle['m_total'];
            $arr=array();
            //先校验充值密码是否一致
            if(md5($handle['password'])==$getshopinfo['md5psw']){
                //更新账号的余额
                $classModel->where('did='.$handle['did'])->save($upyue);
                //像充值记录添记录
                $handle['m_sid']=$handle['did'];
                $handle['m_yue']=$upyue['dyue'];
                $handle['m_addtime']=date('Y-m-d',time());
                $re =M('addmoney')->data($handle)->add();
                if ($re) {
                    $arr['status']=1;
                    $arr['msg']='添加成功';
                    echo json_encode($arr);
                } else {
                    $arr['status']=0;
                    $arr['msg']='添加失败';
                    echo json_encode($arr);
                }
            }else{
                $arr['status']=-1;
                $arr['msg']='管理密码不对';
                echo json_encode($arr);
            }

        }else{
            $getsid=I('did');
            $gettitle=$classModel->where('did='.$getsid)->getField('dcompanyname');
            $this->title=$gettitle;
            $this->did=$getsid;
            $this->display("Addmoney/index");
        }


    }
    //删除图片
    function del() {
        $src = str_replace(__ROOT__ . '/', '', str_replace('//', '/', I('src')));
        if (file_exists($src)) {
            unlink($src);
        }
        print_r(I('src'));
        exit();
    }

}