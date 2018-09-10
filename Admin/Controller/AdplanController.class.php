<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class AdplanController extends Controller
{
    function index(){
        $getdid=I('did');//这个是账号id
        $this->did=$getdid;
        $planinfo=M('plan')->where('p_sid='.$getdid)->find();
        $planinfo['p_repnum']=number_format($planinfo['p_repnum'],2);
        //点击率
        $planinfo['djlv']=number_format($planinfo['p_allclicknum']/$planinfo['p_allshownum'],2);
        //总消耗
        $alluse=$planinfo['p_allclicknum']*$planinfo['p_price'];
        if ($alluse>$planinfo['p_repnum']){
            $alluse=$planinfo['p_repnum'];
        }
        $planinfo['alluse']=$alluse;
        if (!empty($planinfo['p_id'])){
            $getuitl=M('tguitl')->where('u_did='.$planinfo['p_id'])->select();
            $alluitlprice=array();
            foreach ($getuitl as $k=>$v){
                array_push($alluitlprice,$v['u_price']*M('chuanyi')->where('c_danid='.$v['u_id']." and c_status=1")->count());
            }
            $newprice=array_sum($alluitlprice);
            //更新广告的价格
            M('plan')->where('p_sid='.$getdid)->save(array('p_price'=>$newprice));
        }
        $this->planinfo=$planinfo;

        $this->display("Adplan/index");
    }
}