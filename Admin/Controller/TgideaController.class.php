<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class TgideaController extends Controller
{
    function index(){
        $getuid=I('did');
        $this->sid=$getuid;
        $tgideainfo=M('chuanyi')->where('c_uid='.$getuid)->select();
        $this->tgideainfo=$tgideainfo;
        $this->display("Tgidea/index");
    }
}