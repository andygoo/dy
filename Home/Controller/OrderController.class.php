<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7
 * Time: 22:51
 */
namespace Home\Controller;
use Think\Controller;

class OrderController extends Controller {
    function index()
   {
       $geti=I('i');
       $this->i=$geti;
       $getsid=I('sid');
       //获取不同类型订单
       switch ($geti)
       {
           case 0:
               //写代码
               $this->code=0000;
               break;
           case 1:
               //写代码
               $this->code=1111;
           case 2:
               //写代码
               $this->code=2222;
               break;
           case 3:
               //写代码
               $this->code=3333;
               break;
           default:

       }
      $this->display('Order/index');
    }

}