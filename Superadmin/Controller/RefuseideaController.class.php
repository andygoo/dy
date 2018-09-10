<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 23:13
 */
namespace Superadmin\Controller;
class refuseideaController extends \Think\Controller{
    function index(){
        $classModel = M('chuanyi');
        if(IS_POST){
            $data=I('data');
            $handle = array();
            $upyue=array();
            for($i=0;$i<count($data);$i++) {
                $handle[$data[$i]['name']] = $data[$i]['value'];
            }
            $arr=array();
         /** 更新状态为拒绝**/
         $upyue['c_status']=0;
         $upyue['dcomment']=$handle['dcomment'];
            $re= $classModel->where('c_id='.$handle['did'])->save($upyue);
            $getuid=$classModel->where('c_id='.$handle['did'])->getField('c_uid');//账号id
                if ($re) {
                    //更新广告总价
                    $pid=M('plan')->where('p_sid='.$getuid)->getField('p_id');//计划id
                    $getuitl=M('tguitl')->where('u_did='.$pid)->select();
                    $alluitlprice=array();
                    foreach ($getuitl as $k=>$v){
                        array_push($alluitlprice,$v['u_price']*M('chuanyi')->where('c_danid='.$v['u_id']." and c_status=1")->count());
                    }
                    $newallprice=array_sum($alluitlprice);
                    M('plan')->where('p_id='.$pid)->save(array('p_price'=>$newallprice));
                    $arr['status']=1;
                    $arr['msg']='更新成功';
                    echo json_encode($arr);
                } else {
                    $arr['status']=0;
                    $arr['msg']='更新失败';
                    echo json_encode($arr);
                }
        }else{
            $getsid=I('did');
            $this->did=$getsid;
            $this->display("Refuseidea/index");
        }

    }
    function pass(){
        $getdid=I('did');
        $dataarr=array();
        $arr=array();
        if (!empty($getdid)){
            $dataarr['c_status']=1;
            //判断计划是否为开启状态
            $getuid= M('chuanyi')->where('c_id='.$getdid)->getField('c_uid');
            $planstatus=M('plan')->where('p_sid='.$getuid)->getField('p_status');
            $pid=M('plan')->where('p_sid='.$getuid)->getField('p_id');
            if ($planstatus){
                $re=M('chuanyi')->where('c_id='.$getdid)->save($dataarr);
                if ($re) {
                    //更新广告总价
                    $getuitl=M('tguitl')->where('u_did='.$pid)->select();
                    $alluitlprice=array();
                    foreach ($getuitl as $k=>$v){
                        array_push($alluitlprice,$v['u_price']*M('chuanyi')->where('c_danid='.$v['u_id']." and c_status=1")->count());
                    }
                    $newallprice=array_sum($alluitlprice);
                    M('plan')->where('p_id='.$pid)->save(array('p_price'=>$newallprice));
                    //这里开始计算每日消耗
                    //获取概率
//                    $glinfo=M('gailv')->where('g_sid='.$getuid)->find();
//                    $g_showglsmall=$glinfo['g_showglsmall'];
//                    $g_showgltall=$glinfo['g_showgltall'];
//                    $g_clicksmall=$glinfo['g_clicksmall'];
//                    $g_clicktall=$glinfo['g_clicktall'];
//                    //每日预算
//                    $repnum=M('plan')->where('p_id='.$pid)->getField('p_repnum');
//                    //随机生成展示量
//                    $getshownum=rand($g_showglsmall,$g_showgltall);
//                    //随机生成点击量
//                    $getclicknum=rand($g_clicksmall,$g_clicktall);
//                    //计划名称
//                    $p_name=M('plan')->where('p_id='.$pid)->getField('p_name');
//                    $day=1;
//                    $everyrepnum=array();
//                    //得到平均多少天
//                    while ($repnum-($getclicknum*$newallprice)>0){
//                        $repnum=$repnum-($getclicknum*$newallprice);
//                       array_push($everyrepnum,$repnum);//,,,这么会出现数据过大
//                    }
//                    $adddata=array();
//                    //查询明天是否已经有数据了
//                    $ishava=M('everyday')->where('e_sid='.$getuid.' and e_time >'.time()+86400)->find();
//                    if ($ishava){
//                        foreach ($everyrepnum as $k=>$v){
//                            $adddata[$k]['e_shownum']=rand($g_showglsmall,$g_showgltall);
//                            $adddata[$k]['e_clicknum']=rand($g_clicksmall,$g_clicktall);
//                            $adddata[$k]['p_price']=$newallprice;
//                            $adddata[$k]['e_usenum']=rand($g_clicksmall,$g_clicktall)*$newallprice;
//                            $adddata[$k]['e_planname']=$p_name;
//                            $adddata[$k]['e_sid']=$getuid;
//                            $adddata[$k]['e_time']=time()+($k-1)*86400;
//                            $adddata[$k]['e_usetime']=date('Y-m-d',time()+($k-1)*86400);
//                            M('everyday')->where('e_sid='.$getuid.' and e_time >'.time()+86400)->save($adddata[$k]);
//                        }
//                    }else{
//                        //没有就添加
//                        foreach ($everyrepnum as $k=>$v){
//                            $adddata['e_shownum']=rand($g_showglsmall,$g_showgltall);
//                            $adddata['e_clicknum']=rand($g_clicksmall,$g_clicktall);
//                            $adddata['p_price']=$newallprice;
//                            $adddata['e_usenum']=rand($g_clicksmall,$g_clicktall)*$newallprice;
//                            $adddata['e_planname']=$p_name;
//                            $adddata['e_sid']=$getuid;
//                            $adddata['e_time']=time()+($k-1)*86400;
//                            $adddata['e_usetime']=date('Y-m-d',time()+($k-1)*86400);
//                            M('everyday')->add($adddata);
//                        }
//                    }

                    $arr['status']=1;
                    $arr['msg']='更新成功';
                    echo json_encode($arr);
                } else {
                    $arr['status']=0;
                    $arr['msg']='更新失败';
                    echo json_encode($arr);
                }
            }else{
                $arr['status']=-2;
                $arr['msg']='请开启计划再审核创意！';
                echo json_encode($arr);
            }

        }else{
            $arr['status']=-1;
            $arr['msg']='参数有误';
            echo json_encode($arr);
        }
    }
}