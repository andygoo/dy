<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */
namespace Superadmin\Controller;
use Think\Controller;
class ChuanyiController extends Controller
{
    function index(){
        $getdid=I('did');
        $this->did=$getdid;
        $tgideainfo=M('chuanyi')->where('c_uid='.$getdid)->select();
        $this->tgideainfo=$tgideainfo;
        $this->display("Chuanyi/index");
    }
}