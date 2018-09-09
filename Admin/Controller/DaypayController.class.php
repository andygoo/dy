<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class DaypayController extends Controller
{
    function index(){
        $getdid=I('did');
        $everyday=M('everyday')->where('e_sid='.$getdid)->select();
        foreach ($everyday as $k=>$v){
            $everyday[$k]['bili']=self::_getFloat($v['e_clicknum'],$v['e_shownum'],1);
            $everyday[$k]['time']=date('Y-m-d',$v['e_time']);
            $everyday[$k]['e_usenum']=number_format($v['e_usenum'],2);
        }
        $this->everydayinfo=$everyday;
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
        $this->display("Daypay/index");
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