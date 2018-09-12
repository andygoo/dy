<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:50
 */
namespace Superadmin\Controller;
use Think\Controller;
class AccountlistController extends Controller{
  function index(){
      $shopinfo=M('shop')->select();
    foreach ($shopinfo as $k=>$v){
          $shopinfo[$k]['dyue']=number_format($v['dyue'],2);
          $shopinfo[$k]['dhistorypay']=number_format($v['dhistorypay'],2);
      }
      $this->shopinfo=$shopinfo;
      $this->display("Accountlist/index");
  }
  function editchild(){
      $getid=I('did');
      if (IS_POST){
          $data=I('data');
          $handle = array();
          for($i=0;$i<count($data);$i++) {
              $handle[$data[$i]['name']] = $data[$i]['value'];
          }
          $classModel = M('shop');
          $re = $classModel->where('did='.$handle['did'])->save($handle);
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
          $shopdata=M('shop')->where('did='.$getid)->find();
          $this->detail=$shopdata;
          $this->display('Accountlist/editchild');
      }

  }



}