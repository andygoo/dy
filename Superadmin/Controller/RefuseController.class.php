<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 23:13
 */
namespace Superadmin\Controller;
class refuseController extends \Think\Controller{
    function index(){
        $classModel = M('shop');
        if(IS_POST){
            $data=I('data');
            $handle = array();
            $upyue=array();
            for($i=0;$i<count($data);$i++) {
                $handle[$data[$i]['name']] = $data[$i]['value'];
            }
            $arr=array();
         /** 更新状态**/
         $upyue['dshstatus']=2;
         $upyue['dcomment']=$handle['dcomment'];
            $re= $classModel->where('did='.$handle['did'])->save($upyue);
                if ($re) {
                    $arr['status']=1;
                    $arr['msg']='更新成功';
                    echo json_encode($arr);
                } else {
                    $arr['status']=0;
                    $arr['msg']='更新失败';
                    echo json_encode($arr);
                }
        }else{
            $getsid=I('did');
            $this->did=$getsid;
            $this->display("Refuse/index");
        }

    }
    function pass(){
        $getdid=I('did');
        $dataarr=array();
        $arr=array();
        if (!empty($getdid)){
            $dataarr['dshstatus']=1;
            $re=M('shop')->where('did='.$getdid)->save($dataarr);
            if ($re) {
                $arr['status']=1;
                $arr['msg']='更新成功';
                echo json_encode($arr);
            } else {
                $arr['status']=0;
                $arr['msg']='更新失败';
                echo json_encode($arr);
            }
        }else{
            $arr['status']=-1;
            $arr['msg']='参数有误';
            echo json_encode($arr);
        }
    }
}