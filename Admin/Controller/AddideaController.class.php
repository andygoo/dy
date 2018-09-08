<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 * 充值记录
 */

namespace Admin\Controller;

use Think\Controller;

class AddideaController extends Controller
{
    function index(){
        $id=I('id');//单元id
        if(IS_POST){
            $arr=array();
            $data=I('post.');
            $classModel = M('chuanyi');
            $re = $classModel->data($data)->add();
            $para=array();
            $para['did']=I('c_uid');
            $para['id']=I('c_danid');
            if ($re) {

            } else {

            }

        }else{
            $getpname= M('tguitl')->where('u_id='.$id)->getField('u_name');
            $getpid= M('tguitl')->where('u_id='.$id)->getField('u_did');
            $getsid=M('plan')->where('p_id='.$getpid)->getField('p_sid');
            $this->u_name=$getpname;
            $this->id=$id;
            $this->did=$getsid;
            $this->display("Addidea/index");
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