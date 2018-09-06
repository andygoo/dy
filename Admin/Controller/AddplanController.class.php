<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class AddplanController extends Controller
{
    function index(){
        $getdid=I('did');
        //获取广告价格
        $getprice=M('adprice')->where('ad_id=1')->getField('ad_price');
        $this->adprice=$getprice;
        $this->did=$getdid;
        if(IS_POST){
            $data=I('data');
            $handle = array();
            $addate=array();
            for($i=0;$i<count($data);$i++) {
                $handle[$data[$i]['name']] = $data[$i]['value'];
            }
            $arr=array();
            $addate['p_sid']=$handle['p_sid'];
            $addate['p_name']=$handle['p_name'];
            $addate['p_repnum']=$handle['p_repnum'];
            $addate['p_price']=$handle['p_price'];
                $ishava=M('plan')->where('p_sid='.$handle['p_sid'])->find();
                if ($ishava){
                    $arr['status']=-1;
                    $arr['msg']='已有计划';
                    echo json_encode($arr);
                }else{
                    $re =M('plan')->data($addate)->add();
                    if ($re) {
                        $arr['status']=1;
                        $arr['msg']='添加成功';
                        echo json_encode($arr);
                    } else {
                        $arr['status']=0;
                        $arr['msg']='添加失败';
                        echo json_encode($arr);
                    }
                }
        }else{
            $this->display('Addplan/index');
        }

    }

}