<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class AdutilplanController extends Controller
{
    function index(){
        $getid=I('id');
        $this->sid=$getid;
       $getpname= M('plan')->where('p_id='.$getid)->getField('p_name');
       $this->p_name=$getpname;
        $this->display();
    }
}