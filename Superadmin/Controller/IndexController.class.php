<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 23:13
 */
namespace Superadmin\Controller;
class indexController extends \Think\Controller{
    function index(){
        $getphone=session('session_superadmin');
        if (!empty($getphone)){
           $getconfig=M('config')->where('id=1')->find();
            $this->configinfo=$getconfig;
            $this->display("Index/index");
        }else{
            $this.redirect(__MODULE__."/User/mylogin");
        }

    }
}