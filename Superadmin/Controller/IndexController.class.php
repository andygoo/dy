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
            $this->display();
        }else{
            $this.redirect(__MODULE__."/User/mylogin");
        }

    }
}