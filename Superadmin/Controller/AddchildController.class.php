<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:50
 */
namespace Superadmin\Controller;
use Think\Controller;
class AddchildController extends Controller{
    function index(){
        if(IS_POST){
            //var_dump(I('post.'));
            $arr=array();
            $data=I('post.');
            $classModel = M('shop');
            $data['dpasswordmd5']=md5('itxiaolong3'.I('dpassword'));
                $re = $classModel->data($data)->add();
                if ($re) {
                    M('gailv')->add(array('g_sid'=>$re,'g_showglsmall'=>500,
                        'g_showgltall'=>1500,'g_clicksmall'=>500,'g_clicktall'=>1500));
                    $this->redirect("/Superadmin/Accountlist/Index");
                } else {
                    $this->redirect('index', "", 1, '添加失败');
                }

        }else{
            $this->display("Addchild/index");
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