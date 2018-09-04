<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:50
 */
namespace Superadmin\Controller;
use Think\Controller;
class AddshopController extends Controller{
    function addshop(){
        if(IS_POST){
            //var_dump(I('post.'));
            $arr=array();
            $data=I('post.');
            $data['daddtime']=time();
            $classModel = M('shop');
            if(empty(I('dname'))){
                $arr['status']=-1;
                $arr['msg']='店名不可为空';
                echo json_encode($arr);
                exit();
            }else if(empty(I('dloginname'))){
                $arr['status']=-2;
                $arr['msg']='登录用户名不可为空';
                echo json_encode($arr);
                exit();
            }else if(empty(I('dpassword'))){
                $arr['status']=-3;
                $arr['msg']='登录密码不可为空';
                echo json_encode($arr);
                exit();
            }else if(empty(I('dphone'))){
                $arr['status']=-4;
                $arr['msg']='手机号不可为空';
                echo json_encode($arr);
                exit();
            }else if(empty(I('dappId'))){
                $arr['status']=-5;
                $arr['msg']='身份标识不可为空';
                echo json_encode($arr);
                exit();
            }else if(empty(I('dappSecret'))){
                $arr['status']=-5;
                $arr['msg']='身份密钥不可为空';
                echo json_encode($arr);
                exit();
            }else if(empty(I('dpayshopnum'))){
                $arr['status']=-5;
                $arr['msg']='支付商户号不可为空';
                echo json_encode($arr);
                exit();
            }else if(empty(I('dpaykey'))){
                $arr['status']=-5;
                $arr['msg']='支付密钥不可为空';
                echo json_encode($arr);
                exit();
            }else{
                $data['dpasswordmd5']=md5('itxiaolong3'.I('dpassword'));
                $re = $classModel->data($data)->add();
                if ($re) {

                    $arr['status']=1;
                    $arr['msg']='添加成功';
                    $arr['newid']=$re;
                   $configmodel= M('configinfo');
                   $configdata['sid']=$re;
                   $configmodel->data($configdata)->add();
                    //新建店铺时就新建一个配置信息
                    echo json_encode($arr);
                    exit();
                } else {
                    $arr['status']=0;
                    $arr['msg']='发生未知错误';
                    echo json_encode($arr);
                    exit();
                }
            }

        }else{
            $this->display();
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