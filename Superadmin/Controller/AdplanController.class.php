<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */
namespace Superadmin\Controller;
use Think\Controller;
class AdplanController extends Controller
{
    function index(){
        $getdid=I('did');
        $this->did=$getdid;
        $planinfo=M('plan')->where('p_sid='.$getdid)->find();
        $planinfo['p_repnum']=number_format($planinfo['p_repnum'],2);
        //点击率
        $planinfo['djlv']=number_format($planinfo['p_allclicknum']/$planinfo['p_allshownum'],2);
        //总消耗
        $planinfo['alluse']=number_format($planinfo['p_allclicknum']*$planinfo['p_price'],2);
        $this->planinfo=$planinfo;
        $this->display("Adplan/index");
    }
    function Opening(){
        $getdid=I('did');
        $dataarr=array();
        $arr=array();
        if (!empty($getdid)){
            $getstatus=M('plan')->where('p_sid='.$getdid)->getField('p_status');
            if ($getstatus){
                $dataarr['p_status']=0;
            }else{
                $dataarr['p_status']=1;
            }
            $re=M('plan')->where('p_sid='.$getdid)->save($dataarr);
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
    function  editplan(){
        $getdid=I('id');
        //获取广告价格
        if(IS_POST){
            $data=I('data');
            $handle = array();
            $addate=array();
            for($i=0;$i<count($data);$i++) {
                $handle[$data[$i]['name']] = $data[$i]['value'];
            }
            $arr=array();
            $addate['p_name']=$handle['p_name'];
            $addate['p_repnum']=$handle['p_repnum'];
            $addate['p_price']=$handle['p_price'];
            $getid=$handle['p_id'];
            $re =M('plan')->where('p_id='.$getid)->save($addate);
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
            $planinfo=M('plan')->where('p_id='.$getdid)->find();
            $this->planinfo=$planinfo;
            $this->display('Adplan/editplan');
        }
    }
}