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
            $para['did']=I('did');
            $para['id']=I('c_danid');
            if ($re) {
               // $this->redirect('Adidea/index',$para,'0','添加成功');
//                $arr['status']=1;
//                $arr['msg']='添加成功';
//                echo json_encode($arr);
//                exit();
            } else {
//                $arr['status']=0;
//                $arr['msg']='添加失败';
//                echo json_encode($arr);
//                exit();
            }

        }else{
            $getpname= M('tguitl')->where('u_id='.$id)->getField('u_name');
            $this->u_name=$getpname;
            $this->id=$id;
            $this->did=I('did');
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