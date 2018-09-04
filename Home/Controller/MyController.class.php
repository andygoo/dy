<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7
 * Time: 22:51
 */
namespace Home\Controller;
use Think\Controller;

class MyController extends Controller {
    function index()
   {
       $getsid=I('sid');
       $this->sid=$getsid;
      $this->display('My/index');
    }

}