<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 23:13
 */
namespace Superadmin\Controller;
class recordlistController extends \Think\Controller{
    function index(){
        $getphone=session('session_superadmin');
        if (!empty($getphone)){
            $getdid=I('did');
            $getrecord=M('addmoney')
                ->alias('a')
                ->join("dy_shop s on a.m_sid=s.did")
                ->where('a.m_sid='.$getdid)
                ->select();
            foreach ($getrecord as $k=>$v){
                $getrecord[$k]['m_total']=number_format($v['m_total'],2);
                $getrecord[$k]['m_yue']=number_format($v['m_yue'],2);
            }
            $this->record=$getrecord;
            $this->display();
        }else{
            $this.redirect(__MODULE__."/User/mylogin");
        }

    }
}