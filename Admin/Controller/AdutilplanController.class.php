<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class AdutilplanController extends Controller
{
    function index(){
        $getid=I('id');
        $this->sid=$getid;
       $getpname= M('plan')->where('p_id='.$getid)->getField('p_name');
       $this->p_name=$getpname;
       $info=M('tguitl')->where('u_did='.$getid)->select();
       $this->info=$info;
        $this->display("Adutilplan/index");
    }
    function deleleutil(){
        $getid=I('id');
        $arr=array();
        if (!empty($getid)){
                $delre=M('tguitl')->where('u_id='.$getid)->delete();
                if ($delre) {
                    $arr['status']=1;
                    $arr['msg']='删除成功';
                    echo json_encode($arr);
                } else {
                    $arr['status']=0;
                    $arr['msg']='删除失败';
                    echo json_encode($arr);
                }
        }else{
            $arr['status']=-1;
            $arr['msg']='无法获取id';
            echo json_encode($arr);
        }

    }
}