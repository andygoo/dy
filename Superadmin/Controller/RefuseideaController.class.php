<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 23:13
 */
namespace Superadmin\Controller;
class refuseideaController extends \Think\Controller{
    function index(){
        $classModel = M('chuanyi');
        if(IS_POST){
            $data=I('data');
            $handle = array();
            $upyue=array();
            for($i=0;$i<count($data);$i++) {
                $handle[$data[$i]['name']] = $data[$i]['value'];
            }
            $arr=array();
         /** 更新状态为拒绝**/
         $upyue['c_status']=0;
         $upyue['dcomment']=$handle['dcomment'];
            $re= $classModel->where('c_id='.$handle['did'])->save($upyue);
            $getuid=$classModel->where('c_id='.$handle['did'])->getField('c_uid');//账号id
                if ($re) {
                    //更新广告总价
                    $pid=M('plan')->where('p_sid='.$getuid)->getField('p_id');//计划id
                    $getuitl=M('tguitl')->where('u_did='.$pid)->select();
                    $alluitlprice=array();
                    foreach ($getuitl as $k=>$v){
                        array_push($alluitlprice,$v['u_price']*M('chuanyi')->where('c_danid='.$v['u_id']." and c_status=1")->count());
                    }
                    $newallprice=array_sum($alluitlprice);
                    M('plan')->where('p_id='.$pid)->save(array('p_price'=>$newallprice));
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
            $this->display("Refuseidea/index");
        }

    }
    function pass(){
        $getdid=I('did');
        $dataarr=array();
        $arr=array();
        if (!empty($getdid)){
            $dataarr['c_status']=1;
            //判断计划是否为开启状态
            $getuid= M('chuanyi')->where('c_id='.$getdid)->getField('c_uid');
            $planstatus=M('plan')->where('p_sid='.$getuid)->getField('p_status');
            $pid=M('plan')->where('p_sid='.$getuid)->getField('p_id');
            if ($planstatus){
                $re=M('chuanyi')->where('c_id='.$getdid)->save($dataarr);
                if ($re) {
                    //更新广告总价
                    $getuitl=M('tguitl')->where('u_did='.$pid)->select();
                    $alluitlprice=array();
                    foreach ($getuitl as $k=>$v){
                        array_push($alluitlprice,$v['u_price']*M('chuanyi')->where('c_danid='.$v['u_id']." and c_status=1")->count());
                    }
                    $newallprice=array_sum($alluitlprice);
                    M('plan')->where('p_id='.$pid)->save(array('p_price'=>$newallprice));
                    $arr['status']=1;
                    $arr['msg']='更新成功';
                    echo json_encode($arr);
                } else {
                    $arr['status']=0;
                    $arr['msg']='更新失败';
                    echo json_encode($arr);
                }
            }else{
                $arr['status']=-2;
                $arr['msg']='请开启计划再审核创意！';
                echo json_encode($arr);
            }

        }else{
            $arr['status']=-1;
            $arr['msg']='参数有误';
            echo json_encode($arr);
        }
    }
}