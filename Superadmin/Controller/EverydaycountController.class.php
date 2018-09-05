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
            //获取账号的余额
            $getallmoney=M('shop')->where('did='.$getdid)->getField('dyue');
            $gailv=M('gailv')->where('g_sid='.$getdid)->find();

            $this->display();
        }else{
            $this.redirect(__MODULE__."/User/mylogin");
        }

    }
}