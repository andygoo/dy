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
        $planinfo['p_housuse']=number_format($planinfo['p_housuse'],2);
        //点击率
        $planinfo['djlv']=number_format($planinfo['p_allclicknum']/$planinfo['p_allshownum'],2);
        //总消耗 每日消耗之和
        //$planinfo['alluse']=M('everyday')->where('e_sid='.$getdid)->sum('e_usenum');
       $planinfo['alluse']=number_format($planinfo['p_allclicknum']*$planinfo['p_price'],2);
       if ($planinfo['alluse']>$planinfo['p_repnum']){
           $planinfo['alluse']=number_format($planinfo['p_repnum'],2);
       }
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
                //判断每日数据中是否已有数据
                $ishava=M('everyday')->where('e_sid='.$getdid.' and to_days(e_usetime) = to_days(now())')->find();
                if (empty($ishava)){
                    $getplan=M('plan')->where('p_sid='.$getdid.' and p_status=1')->find();
                    //$getplan=M('plan')->where('p_sid='.$getdid.' and p_status=1 and p_price >0')->find();
                    $getplanname=M('plan')->where('p_sid='.$getdid)->getField('p_name');
                    if ($getplan){
                        if (!empty($getplanname)){
                            $adddata['e_shownum']=0;
                            $adddata['e_clicknum']=0;
                            $adddata['p_price']=$getplan['p_price'];
                            $adddata['e_usenum']=0;
                            $adddata['e_planname']=$getplanname;
                            $adddata['e_sid']=$getdid;
                            $adddata['e_time']=time();
                            $adddata['e_usetime']=date('Y-m-d',time());
                            M('everyday')->add($adddata);
                        }
                    }
                }
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
        $getdid=I('id');//计划id
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
            $addate['p_housuse']=$handle['p_housuse'];
            //点击量 时耗/广告价
            $clicknum=intval($handle['p_housuse']/$handle['p_price']);
            //每两分钟生成点击量
            $twoclicknum=intval($clicknum/30);
            //展示量  点击量*53
            $shownum=$clicknum*53;
            //2分钟的展示量
            $towshownum=intval($shownum/30);
            //每个小时的点击量和显示量,改为2分钟的点击量和显示量
            $addate['p_allshownum']=$towshownum;
            $addate['p_allclicknum']=$twoclicknum;
            $getid=$handle['p_id'];
            //判断计划是开启状态才可以更新
            $getstatus=M('plan')->where('p_id='.$getid)->getField('p_status');
            if($getstatus){
                $re =M('plan')->where('p_id='.$getid)->save($addate);
                if ($re) {
                    $arr['status']=1;
                    $arr['msg']='编辑成功';
                    echo json_encode($arr);
                } else {
                    $arr['status']=0;
                    $arr['msg']='编辑失败';
                    echo json_encode($arr);
                }
            }else{
                $arr['status']=-1;
                $arr['msg']='计划未开启，无法修改时耗';
                echo json_encode($arr);
            }

        }else{
            $planinfo=M('plan')->where('p_id='.$getdid)->find();
            $this->planinfo=$planinfo;
            $this->display('Adplan/editplan');
        }
    }
}