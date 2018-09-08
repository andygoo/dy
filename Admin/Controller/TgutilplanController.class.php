<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class TgutilplanController extends Controller
{
    function index(){
        $getuid=I('did');
        $this->sid=$getuid;
        $tgutilinfo=M('tguitl')->where('u_did='.$getuid)->select();
        $this->tguitlinfo=$tgutilinfo;
        $this->display("Tgutilplan/index");
    }
}