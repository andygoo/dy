<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:50
 */
namespace Superadmin\Controller;
use Think\Controller;
class ConfigController extends Controller{
    function index(){
        $configModel = M('config');
        if(IS_POST){
            $data=I('data');
            $handle = array();

            for($i=0;$i<count($data);$i++) {
                $handle[$data[$i]['name']] = $data[$i]['value'];
            }
          $handle['addtime']=time();
            $arr=array();
             $re= $configModel->where('id=1')->save($handle);
                if ($re) {
                    $arr['status']=1;
                    $arr['msg']='修改成功';
                    echo json_encode($arr);
                } else {
                    $arr['status']=0;
                    $arr['msg']='修改失败';
                    echo json_encode($arr);
                }
        }else{
            $configs=$configModel->where('id=1')->find();
         
            $this->configs=$configs;
            $this->display("Config/index");
        }

    }

}