<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:50
 */
namespace Superadmin\Controller;
use Think\Controller;
class GailvController extends Controller{
  function index(){
      $gailvinfo=M('gailv')
          ->alias('g')
          ->join("dy_shop s on g.g_sid=s.did")
          ->field("s.dcompanyname,s.dloginname,s.did,g.*")
          ->select();
      $this->gailvinfo=$gailvinfo;
      $this->display("Gailv/index");
  }
  function editgailv(){
      $getid=I('did');
      if (IS_POST){
          $data=I('data');
          $handle = array();
          for($i=0;$i<count($data);$i++) {
              $handle[$data[$i]['name']] = $data[$i]['value'];
          }
          $classModel = M('gailv');
          $re = $classModel->where('g_sid='.$handle['did'])->save($handle);
          $arr=array();
          if ($re) {
              $arr['status']=1;
              $arr['msg']='添加成功';
              echo json_encode($arr);
          } else {
              $arr['status']=0;
              $arr['msg']='添加失败';
              echo json_encode($arr);
          }
      }else{
          $shopdata=M('gailv')
              ->alias('g')
              ->join("dy_shop s on g.g_sid=s.did")
              ->field("s.dcompanyname,s.dloginname,s.did,g.*")
              ->where('g.g_sid='.$getid)
              ->find();
          $this->detail=$shopdata;
          $this->display('Gailv/editgailv');
      }

  }



}