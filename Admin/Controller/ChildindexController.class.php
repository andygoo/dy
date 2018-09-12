<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class ChildindexController extends Controller
{
    function index(){
        $getdid=I('did');
        //总点击,展示，消耗
        $allclick=M('everyday')->where('e_sid='.$getdid)->sum('e_clicknum');
        $allshow=M('everyday')->where('e_sid='.$getdid)->sum('e_shownum');
        $alluse=M('everyday')->where('e_sid='.$getdid)->sum('e_usenum');
        $plan=M('plan')->where('p_sid='.$getdid)->find();
        $this->allclick=$allclick;
        $this->allshow=$allshow;
        $this->alluse=number_format($alluse,2);
        $this->bili=self::_getFloat($allclick,$allshow,1);
        $plan['p_repnum']=number_format($plan['p_repnum'],2);
        $this->plan=$plan;
        //今日点击，昨日点击，今日消耗，昨日消耗，余额
        $todayuse=M('everyday')->where('e_sid='.$getdid.' and to_days(e_usetime) = to_days(now())')->getField('e_usenum');
        $yesdayuse=M('everyday')->where('e_sid='.$getdid.' and e_usetime= "'.date('Y-m-d',(time()-86400)).'"')->getField('e_usenum');
        $todayclick=M('everyday')->where('e_sid='.$getdid.' and to_days(e_usetime) = to_days(now())')->getField('e_clicknum');
        $yesdayclick=M('everyday')->where('e_sid='.$getdid.' and e_usetime= "'.date('Y-m-d',(time()-86400)).'"')->getField('e_clicknum');
        $yue=M('shop')->where('did='.$getdid)->getField('dyue');

        $this->todayuse=number_format($todayuse,2);
        $this->yesyuse=number_format($yesdayuse,2);
        $this->todayclick=$todayclick;
        $this->yesdayclick=$yesdayclick;
        $this->yue=number_format($yue,2);
        //统计表
        $allday=array();
        $everyuse=array();
        $everyclick=array();
        for ($i=0;$i<30;$i++){
            array_push($allday,date('Y-m-d',time()-86400*$i));
        }
        $allday=array_reverse($allday);
        $a='[';
        $b=']';
        $u='[';
        $uu=']';
        $c='[';
        $cc=']';
        foreach ($allday as $k=>$v){
            $getusenum=M('everyday')->where('e_sid='.$getdid.' and e_usetime='."'".$v."'")->getField('e_usenum');
            if ($getusenum=='NULL'||$getusenum==''){
                $getusenum=0;
            }
            array_push($everyuse,$getusenum);
            //点击
            $getclicknum=M('everyday')->where('e_sid='.$getdid.' and e_usetime='."'".$v."'")->getField('e_clicknum');
            if ($getclicknum=='NULL'||$getclicknum==''){
                $getclicknum=0;
            }
            array_push($everyclick,$getclicknum);
            $a.="'".$v."'".',';
        }
        foreach ($everyuse as $k=>$v){
            $u.=$v.',';
        }
        foreach ($everyclick as $k=>$v){
            $c.="'".$v."'".',';
        }
        $showday=rtrim($a,',').$b;
        $showuse=rtrim($u,',').$uu;
        $showclick=rtrim($c,',').$cc;
        $this->showday=$showday;
        $this->showuse=$showuse;
        $this->showclick=$showclick;
       $getconfig=M('config')->where('id=1')->find();
            $this->configinfo=$getconfig;
        $this->display("Childindex/index");
    }
    private static function _getFloat($divd, $divisor, $isPercent = 0)
    {
        $floatNum = 0;
        if (!empty($divd) && !empty($divisor)) {
            $floatNum = round($divd / $divisor, 2);
        }
        if ($isPercent == 1) {
            return ($floatNum * 100) . '%';
        }
        return $floatNum;
    }
}