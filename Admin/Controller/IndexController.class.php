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
    /*定时执行这里的文件*/
    function  upeverydata(){
        $sids=M('shop')->getField('did',true);
        $adddata=array();
        foreach ($sids as $k=>$v){
            //获取概率
            $glinfo=M('gailv')->where('g_sid='.$v)->find();
            $g_showglsmall=$glinfo['g_showglsmall'];
            $g_showgltall=$glinfo['g_showgltall'];
            $g_clicksmall=$glinfo['g_clicksmall'];
            $g_clicktall=$glinfo['g_clicktall'];
            $getplan=M('plan')->where('p_sid='.$v.' and p_status=1 and p_price >0')->find();
            $getplanname=M('plan')->where('p_sid='.$v)->getField('p_name');
            if ($getplan){
                //每日预算
                $repnum=$getplan['p_repnum'];
                //随机生成展示量
                $getshownum=rand($g_showglsmall,$g_showgltall);
                //随机生成点击量
                $getclicknum=rand($g_clicksmall,$g_clicktall);
                //计划名称
                $p_name=$getplan['p_name'];
                $usenum=rand($g_clicksmall,$g_clicktall)*$getplan['p_price'];

                $adddata['e_shownum']=$getshownum;
                $adddata['e_clicknum']=$getclicknum;
                $adddata['p_price']=$getplan['p_price'];
                $adddata['e_usenum']=$usenum;
                $adddata['e_planname']=$p_name;
                $adddata['e_sid']=$v;
                $adddata['e_time']=time();
                $adddata['e_usetime']=date('Y-m-d',time());
                M('everyday')->add($adddata);
            }else{
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
            /*更新余额*/
            if($adddata['e_usenum']>0){
                $getallnum=M('everyday')->where('e_sid='.$v)->sum('e_usenum');
                //var_dump($getallnum);
                $getyue=M('shop')->where('did='.$v)->getField('dyue');
                $yue=$getyue-$getallnum;
                if ($yue<0){
                    $yue=0;
                }
                M('shop')->where('did='.$v)->save(array('dyue'=>$yue));
            }

        }

    }
}