<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 * 充值记录
 */

namespace Admin\Controller;

use Think\Controller;

class AddrecordController extends Controller
{
    function index(){
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
        $this->display("Addrecord/index");
    }
}