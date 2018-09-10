<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 23:13
 */
namespace Admin\Controller;
class indexController extends \Think\Controller{
    function index(){
        $getphone=session('session_name');
        $getsid=I('sid');
        if(!empty($getsid)){
            $getphone=session("session_sid".$getsid);
            //session("session_sid",$getsid);
        }
        //是否是总管理员进去的
        $getsuperadminname=session('session_superadmin');
        if (!empty($getphone)||!empty($getsuperadminname)){
            $getsid=session("session_sid".$getsid);
           // $infoModel=M('configinfo');
            $shopModel=M('shop');
            if(!empty($getsuperadminname)){
               // $configinfo=$infoModel->where('sid='.I('sid'))->select();//所有信息
                $shopinfo = $shopModel->where('did='.I('sid'))->find();
                $this->sid=I('sid');
            }else{
                //$configinfo=$infoModel->where('sid='.$getsid)->select();//所有信息
                $shopinfo = $shopModel->where('did='.$getsid)->find();
                $this->sid=$getsid;
            }
           // $this->configs=$configinfo;
            $this->shopinfo=$shopinfo;
            // var_dump($configinfo);
            $this->name=$getphone;

            $this->fromadmin=$getsuperadminname;
            //$this->title=$configinfo[0]['title'].'首页';
            $this->display("Index/index");
        }else{
            $getsid=I('sid');
            $this.redirect(__MODULE__."/User/mylogin?sid=".$getsid);
        }

    }
    /*定时执行这里的文件,一天执行一次*/
    function  upeverydata(){
        $sids=M('shop')->getField('did',true);
        $adddata=array();
        foreach ($sids as $k=>$v){
            $getplan=M('plan')->where('p_sid='.$v.' and p_status=1 and p_price >0')->find();
            $getplanname=M('plan')->where('p_sid='.$v)->getField('p_name');
            if ($getplan){
                if (!empty($getplanname)){
                    $adddata['e_shownum']=0;
                    $adddata['e_clicknum']=0;
                    $adddata['p_price']=$getplan['p_price'];
                    $adddata['e_usenum']=0;
                    $adddata['e_planname']=$getplanname;
                    $adddata['e_sid']=$v;
                    $adddata['e_time']=time();
                    $adddata['e_usetime']=date('Y-m-d',time());
                    M('everyday')->add($adddata);
                }
            }
        }
    }
    /*
     * 每小时更新每日数据中的数据
     * */
    function updateeveryhouse(){
        $sids=M('shop')->getField('did',true);
        $updatedata=array();
        foreach ($sids as $k=>$v){
            $getplan=M('plan')->where('p_sid='.$v.' and p_status=1 and p_price >0')->find();
            $getplanname=M('plan')->where('p_sid='.$v)->getField('p_name');
            $getallshownum=M('plan')->where('p_sid='.$v)->getField('p_allshownum');
            $getallclicknum=M('plan')->where('p_sid='.$v)->getField('p_allclicknum');
            $getplanprice=M('plan')->where('p_sid='.$v)->getField('p_price');
            $getprenum=M('plan')->where('p_sid='.$v)->getField('p_prenum');
            //消耗
            $usenum=$getplanprice*$getallclicknum;

            //每天今日的数据
            $everyshownum=M('everyday')->where('e_sid='.$v.' and to_days(e_usetime) = to_days(now())')->getField('e_shownum');
            $everyclicknum=M('everyday')->where('e_sid='.$v.' and to_days(e_usetime) = to_days(now())')->getField('e_clicknum');
            $everyusenum=M('everyday')->where('e_sid='.$v.' and to_days(e_usetime) = to_days(now())')->getField('e_usenum');

            $newshownum=$everyshownum+$getallshownum;
            $newclicknum=$everyclicknum+$getallclicknum;
            $newusenum=$everyusenum+$usenum;
            //如果今日的消耗大于今日的预算就限等于预算
            if ($newshownum>=$getprenum){
                $newusenum=$getprenum;
            }
            if ($getplan){
                //更新账号余额
                $getyue=M('shop')->where('did='.$v)->getField('dyue');
                $newyue=$getyue-$usenum;
                if ($newyue<0){
                    $newyue=0;
                }
                M('shop')->where('did='.$v)->save(array('dyue'=>$newyue));
                if (!empty($getplanname)){
                    $updatedata['e_shownum']=$newshownum;
                    $updatedata['e_clicknum']=$newclicknum;
                    $updatedata['e_usenum']=$newusenum;
                    $updatedata['p_price']=$getplanprice;
                    $updatedata['e_planname']=$getplanname;
                    $updatedata['e_sid']=$v;
                    $updatedata['e_time']=time();
                    $updatedata['e_usetime']=date('Y-m-d',time());
                    M('everyday')->where('e_sid='.$v.' and to_days(e_usetime) = to_days(now())')->save($updatedata);
                }
            }

        }
    }
}