<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class EditideaController extends Controller
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
            $getimg=$handle['c_img'];
            if(!empty($getimg)){
                $addate['c_videourl']=$getimg;
            }else{
                $addate['c_videourl']=$handle['c_videourl'];
            }
            $addate['c_name']=$handle['c_name'];
            $addate['c_title']=$handle['c_title'];
            $addate['c_url']=$handle['c_url'];
            $addate['c_desc']=$handle['c_desc'];
            $addate['c_button']=$handle['c_button'];
            $getid=$handle['c_id'];
                    $re =M('chuanyi')->where('c_id="'.$getid.'"')->save($addate);
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
            $cyinfo=M('chuanyi')->where('c_id='.$getdid)->find();
            if(strstr($cyinfo['c_videourl'],'.mp4')){
                $cyinfo['isvideo']=1;
            }else{
                $cyinfo['isvideo']=0;
            }
            $this->cyinfo=$cyinfo;
            $this->display('Editidea/index');
        }

    }


}