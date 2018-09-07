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
        $getid=I('did');
        $id=I('id');//单元id
        $this->sid=$getid;
        $this->id=$id;
        $getpname= M('plan')->where('p_id='.$getid)->getField('p_name');
        $this->p_name=$getpname;
        //所属单元信息
        $danyuan=M('chuanyi')->where('c_danid='.$id)->select();
        $this->danyuan=$danyuan;
        $this->display("Adidea/index");
    }
}