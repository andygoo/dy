<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class AddtgutilController extends Controller
{
    function index(){
        $getid=I('did');
        $this->sid=$getid;
       // $getpname= M('plan')->where('p_id='.$getid)->getField('p_name');
       // $this->p_name=$getpname;
        $getalldata=I('post.');
        $data=$getalldata['data'];
        for($i=0;$i<count($data);$i++) {

            if ($data[$i]['name']==$data[$i+1]['name']){
                $handle[$data[$i]['name']] = $data[$i]['value']+','+$data[$i+1]['value'];
            }else{
                $handle[$data[$i]['name']] = $data[$i]['value'];
            }
        }
        var_dump($handle);
        $this->display('Addtguitl/index');
    }
}