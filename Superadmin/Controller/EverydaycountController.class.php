<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 23:13
每日消耗*/
namespace Superadmin\Controller;
class everydaycountController extends \Think\Controller{
    function index(){
        $getphone=session('session_superadmin');
        if (!empty($getphone)){
            $getdid=I('did');
            $everyday=M('everyday')->where('e_sid='.$getdid)->select();
            foreach ($everyday as $k=>$v){
                $everyday[$k]['bili']=self::_getFloat($v['e_clicknum'],$v['e_shownum'],1);
                $everyday[$k]['time']=date('Y-m-d',$v['e_time']);
                $everyday[$k]['e_usenum']=number_format($v['e_usenum'],2);
            }
            $this->everydayinfo=$everyday;
            $this->display("Everydaycount/index");
        }else{
            $this.redirect(__MODULE__."/User/mylogin");
        }

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