<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7
 * Time: 22:51
 */
namespace Home\Controller;
use Think\Controller;

class CartController extends Controller {
    function index()
   {
      $this->display('Cart/index');
    }

}