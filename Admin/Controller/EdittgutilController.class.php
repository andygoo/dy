<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:52
 */

namespace Admin\Controller;

use Think\Controller;

class EdittgutilController extends Controller
{
    function index(){
        $getid=I('id');
        if(IS_POST){
            $getalldata=I('post.');
            $data=$getalldata['data'];
            $getuid=I('uid');
            $testar=array();
            $wifiarr=array();
            for($i=0;$i<count($data);$i++) {
                $handle[$data[$i]['name']] = $data[$i]['value'];
                if(strstr($data[$i]['name'],'wifi')){
                    array_push($wifiarr,$data[$i]['value']);
                }
            }
            $savadata=array();
            $savadata['u_did']=$handle['did'];
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
            $re=M('tguitl')->where('u_id='.$getuid)->save($savadata);
            $arr=array();
            if ($re){
                $arr['status']=1;
                $arr['msg']='修改成功';
                echo json_encode($arr);
            }else{
                $arr['status']=0;
                $arr['msg']='修改失败';
                echo json_encode($arr);
            }

        }else{
             $getinfo= M('tguitl')->where('u_id='.$getid)->find();
             $this->info=$getinfo;
             //地区
            $getareaid=$getinfo['u_areaid'];
            $getageid=$getinfo['u_ageid'];
            $getarea=explode(",",$getareaid);
            $getageid=explode(",",$getageid);
            //网络
            $getwifi=explode(",",$getinfo['u_wifi']);
            if(in_array_case('wifi',$getwifi)){
                $wifi=1;
            }else{
                $wifi=0;
            }
            if(in_array_case('4G',$getwifi)){
                $fGG=1;
            }else{
                $fG=0;
            }
            if(in_array_case('3G',$getwifi)){
                $threeG=1;
            }else{
                $threeG=0;
            }
            if(in_array_case('2G',$getwifi)){
                $twoG=1;
            }else{
                $twoG=0;
            }
            $this->wifi=$wifi;
            $this->fG=$fGG;
            $this->threeG=$threeG;
            $this->twoG=$twoG;


            //关键字判断
            if (empty($getinfo['u_keyword'])){
                $this->keyword=0;
            }else{
                $this->keyword=1;
            }
            $this->areaid=$getarea;
            $this->ageid=$getageid;
            $this->display('Edittgutil/index');
        }
    }
}