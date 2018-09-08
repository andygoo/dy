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
        $getid=I('id');//这个计划id
        //获取账号id
        $getsid=M('plan')->where('p_id='.$getid)->getField('p_sid');
        $this->sid=$getsid;
       $getpname= M('plan')->where('p_id='.$getid)->getField('p_name');
       $this->p_name=$getpname;
       $info=M('tguitl')->where('u_did='.$getid)->select();
       //查询单元下有多少个创意并计算总价格
        foreach ($info as $k=>$v){
            $info[$k]['allprice']=$v['u_price']*M('chuanyi')->where('c_danid='.$v['u_id']." and c_status=1")->count();
        }
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