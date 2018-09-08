<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class EditplanController extends Controller
{
    function index(){
        $getdid=I('id');
        //获取广告价格
        if(IS_POST){
            $data=I('data');
            $handle = array();
            $addate=array();
            for($i=0;$i<count($data);$i++) {
                $handle[$data[$i]['name']] = $data[$i]['value'];
            }
            $arr=array();
            $addate['p_name']=$handle['p_name'];
            $addate['p_repnum']=$handle['p_repnum'];
            $addate['p_price']=$handle['p_price'];
            $getid=$handle['p_id'];
                    $re =M('plan')->where('p_id='.$getid)->save($addate);
                    if ($re) {
                        $arr['status']=1;
                        $arr['msg']='编辑成功';
                        echo json_encode($arr);
                    } else {
                        $arr['status']=0;
                        $arr['msg']='编辑失败';
                        echo json_encode($arr);
                    }
        }else{
            $planinfo=M('plan')->where('p_id='.$getdid)->find();
            $this->planinfo=$planinfo;
            $this->display('Editplan/index');
        }

    }
    function deleleplan(){
        $getid=I('id');
        $arr=array();
        if (!empty($getid)){
            $getstatus=M('plan')->where('p_id='.$getid)->getField('p_status');
            if (!$getstatus){
                $delre=M('plan')->where('p_id='.$getid)->delete();
                if ($delre) {
                    $arr['status']=1;
                    $arr['msg']='删除成功';
                    echo json_encode($arr);
                } else {
                    $arr['status']=0;
                    $arr['msg']='删除失败';
                    echo json_encode($arr);
                }
            }else{
                $arr['status']=-2;
                $arr['msg']='删除失败，广告开启时不能删除!';
                echo json_encode($arr);
            }

        }else{
            $arr['status']=-1;
            $arr['msg']='无法获取id';
            echo json_encode($arr);
        }

    }

}