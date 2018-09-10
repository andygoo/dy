<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class AddtgutilController extends Controller
{
    function index(){
        $getid=I('did');//账号id
        $this->sid=$getid;
        if(IS_POST){
            $getalldata=I('post.');
            $data=$getalldata['data'];
            $testar=array();
            $wifiarr=array();
            for($i=0;$i<count($data);$i++) {
                $handle[$data[$i]['name']] = $data[$i]['value'];
                if(strstr($data[$i]['name'],'wifi')){
                    array_push($wifiarr,$data[$i]['value']);
                }
            }
            $savadata=array();
            //获取计划id
            $getid=$handle['did'];
            $getp_id= M('plan')->where('p_sid='.$getid)->getField('p_id');
            $savadata['u_did']=$getp_id;
            $savadata['u_price']=$handle['price'];
            $savadata['u_name']=$handle['name'];
            $savadata['u_sex']=$handle['sex'];
            $savadata['u_tgtype']=$handle['cpc'];
            $savadata['u_planname']=$handle['u_planname'];
            $savadata['u_area']=$handle['tfdq'];//地区是否有限制
            $savadata['u_keyword']=$handle['keyword'];//有关键字时就显示关键字，否则就默认

            $dqid='';
            $wifi='';
            $ageid='';
            $agevalue='';
            foreach ($getalldata['diqu'] as $k=>$v){
                $dqid=$dqid.$v.',';
            }
            foreach ($wifiarr as $k=>$v){
                $wifi=$wifi.$v.',';
            }
            foreach ($getalldata['ageid'] as $k=>$v){
                $ageid=$ageid.$v.',';
            }
            foreach ($getalldata['agevalue'] as $k=>$v){
                $agevalue=$agevalue.$v.',';
            }
            $savadata['u_wifi']=rtrim($wifi,',');
            $savadata['u_age']=rtrim($agevalue,',');
            $savadata['u_ageid']=rtrim($ageid,',');
            $savadata['u_areaid']=rtrim($dqid,',');
            $re=M('tguitl')->add($savadata);
            $arr=array();
            if ($re){
                $arr['status']=1;
                $arr['msg']='添加成功';
                echo json_encode($arr);
            }else{
                $arr['status']=0;
                $arr['msg']='添加失败';
                echo json_encode($arr);
            }

        }else{
            $getp_id= M('plan')->where('p_sid='.$getid)->getField('p_id');
             $getpname= M('plan')->where('p_id='.$getp_id)->getField('p_name');
             $this->p_name=$getpname;
            $this->display('Addtguitl/index');
        }
    }
}