<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7
 * Time: 22:51
 */
namespace Home\Controller;
use Home\Common\BaseController;

class IndexController extends BaseController {
    function index()
   {
       $getsid=I('sid');
       if (empty($getsid)){
           $this->isurlempty($getsid);
       }else{
           //店铺
           $shopinfo=$this->getshopinfo($getsid);
           $this->shopinfo=$shopinfo;
           //购买指数
           $ordernummodel=M('order');
           $ordernum=$ordernummodel->where('osid='.$getsid." and ostatus=1")->sum('onum');
           //$yimai=$ordernummodel->where('osid='.$getsid." and ostatus=1 and ogid=".)->count();
           $this->ordernum=$ordernum;
           //粉丝数
           $usernummodel=M('user');
           $usernum=$usernummodel->where('shopid='.$getsid)->count();
           $this->usernum=$usernum;
           //商品
           $goodsmodel=M('goods');
           $goodsinfo=$goodsmodel->field('gid,gboss,sid,gtopimg,gtitle,gyhprice,gprice,gendnum')->where("sid=".$getsid)->select();
           foreach ($goodsinfo as $k=>$v){
               $goodsinfo[$k]['salenum']=$ordernummodel->where('osid='.$getsid." and ostatus=1 and ogid=".$v['gid'])->sum('onum');
               $goodsinfo[$k]['userinfo']=$ordernummodel
                   ->alias('o')
                   ->join("yx_user u on o.ouid=u.uid")
                   ->field("o.oid,o.ostatus,u.nickname,u.headerimg")//需要显示的字段
                   ->where('o.ostatus=1 and ogid='.$v['gid'])
                   ->limit(3)
                   ->select();//所有信息
           }
//           var_dump($goodsinfo);
//           exit();
           $this->goodsinfo=$goodsinfo;
           $this->sid=$getsid;
           $this->display('Index/index');
       }

    }

}