<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class AdideaController extends Controller
{
    function index(){
        $this->sid=I('did');
        $this->display();
    }
}