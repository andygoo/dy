/*
Navicat MySQL Data Transfer

Source Server         : mydemo
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : douyin

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2018-09-05 20:01:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dy_addmoney
-- ----------------------------
DROP TABLE IF EXISTS `dy_addmoney`;
CREATE TABLE `dy_addmoney` (
  `m_id` int(20) NOT NULL AUTO_INCREMENT,
  `m_sid` int(20) DEFAULT NULL,
  `m_total` varchar(50) DEFAULT '',
  `m_addmoneytype` varchar(50) DEFAULT NULL,
  `m_yue` varchar(50) DEFAULT NULL COMMENT '充值后的余额',
  `m_addtime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_addmoney
-- ----------------------------
INSERT INTO `dy_addmoney` VALUES ('8', '2', '20', '代理商划账', '20', '2018-09-04');
INSERT INTO `dy_addmoney` VALUES ('9', '1', '60', '代理商划账', '60', '2018-09-04');
INSERT INTO `dy_addmoney` VALUES ('12', '1', '20', '代理商划账', '80', '2018-09-04');
INSERT INTO `dy_addmoney` VALUES ('13', '2', '800', '代理商划账', '820', '2018-09-04');
INSERT INTO `dy_addmoney` VALUES ('14', '1', '900', '代理商划账', '980', '2018-09-04');
INSERT INTO `dy_addmoney` VALUES ('15', '1', '60', '代理商划账', '1040', '2018-09-04');
INSERT INTO `dy_addmoney` VALUES ('16', '1', '60', '代理商划账', '1100', '2018-09-04');
INSERT INTO `dy_addmoney` VALUES ('17', '2', '80', '代理商划账', '900', '2018-09-04');
INSERT INTO `dy_addmoney` VALUES ('18', '2', '4000', '代理商划账', '4000', '2018-09-04');
INSERT INTO `dy_addmoney` VALUES ('19', '5', '5000', '代理商划账', '5000', '2018-09-05');
INSERT INTO `dy_addmoney` VALUES ('20', '4', '45000', '代理商划账', '45000', '2018-09-05');

-- ----------------------------
-- Table structure for dy_admin
-- ----------------------------
DROP TABLE IF EXISTS `dy_admin`;
CREATE TABLE `dy_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(20) DEFAULT '' COMMENT '用户名',
  `password` char(32) DEFAULT '' COMMENT '密码',
  `md5psw` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='总管理员';

-- ----------------------------
-- Records of dy_admin
-- ----------------------------
INSERT INTO `dy_admin` VALUES ('2', 'admin', 'xiaolong', '96a33bb88bf2758cc306d7f6602be0de');
INSERT INTO `dy_admin` VALUES ('4', 'zccm', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- Table structure for dy_adprice
-- ----------------------------
DROP TABLE IF EXISTS `dy_adprice`;
CREATE TABLE `dy_adprice` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_price` varchar(20) DEFAULT NULL COMMENT '广告价格',
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_adprice
-- ----------------------------
INSERT INTO `dy_adprice` VALUES ('1', '0.5');

-- ----------------------------
-- Table structure for dy_gailv
-- ----------------------------
DROP TABLE IF EXISTS `dy_gailv`;
CREATE TABLE `dy_gailv` (
  `gl_id` int(10) NOT NULL AUTO_INCREMENT,
  `g_sid` int(10) DEFAULT NULL,
  `g_showglsmall` varchar(50) DEFAULT NULL COMMENT '曝光的概率最低',
  `g_showgltall` varchar(50) DEFAULT NULL COMMENT '曝光的概率最高',
  `g_clicksmall` varchar(50) DEFAULT NULL COMMENT '点击最低概率',
  `g_clicktall` varchar(50) DEFAULT NULL COMMENT '点击最高概率',
  PRIMARY KEY (`gl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='账号的概率表';

-- ----------------------------
-- Records of dy_gailv
-- ----------------------------
INSERT INTO `dy_gailv` VALUES ('1', '5', '600', '700', '20', '100');
INSERT INTO `dy_gailv` VALUES ('2', '1', '500', '1000', '600', '1000');
INSERT INTO `dy_gailv` VALUES ('3', '2', '400', '5000', '1100', '2000');
INSERT INTO `dy_gailv` VALUES ('4', '4', '1000', '2000', '700', '800');

-- ----------------------------
-- Table structure for dy_plan
-- ----------------------------
DROP TABLE IF EXISTS `dy_plan`;
CREATE TABLE `dy_plan` (
  `p_id` int(20) NOT NULL AUTO_INCREMENT,
  `p_sid` int(20) DEFAULT NULL COMMENT '账户id',
  `p_name` varchar(100) DEFAULT NULL COMMENT '计划名称',
  `p_repnum` varchar(100) DEFAULT NULL COMMENT '每日预耗',
  `p_price` varchar(100) DEFAULT NULL COMMENT '广告价格',
  `p_allshownum` int(50) DEFAULT NULL COMMENT '总曝光量',
  `p_allclicknum` int(50) DEFAULT NULL COMMENT '总点击量',
  `p_allusernum` int(50) DEFAULT NULL COMMENT '总消耗量',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_plan
-- ----------------------------
INSERT INTO `dy_plan` VALUES ('1', '1', '棋牌', '25000', '0.5', null, null, null);

-- ----------------------------
-- Table structure for dy_recordlist
-- ----------------------------
DROP TABLE IF EXISTS `dy_recordlist`;
CREATE TABLE `dy_recordlist` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_planname` varchar(100) DEFAULT NULL COMMENT '计划名称',
  `r_usemoney` varchar(50) DEFAULT NULL COMMENT '每日消耗的金额',
  `r_shownum` varchar(50) DEFAULT NULL COMMENT '曝光量',
  `r_onclicknum` varchar(50) DEFAULT NULL COMMENT '点击数',
  `r_sid` int(20) DEFAULT NULL COMMENT '所属账号',
  `r_yue` varchar(50) DEFAULT NULL COMMENT '当前余额',
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='每日统计';

-- ----------------------------
-- Records of dy_recordlist
-- ----------------------------

-- ----------------------------
-- Table structure for dy_shop
-- ----------------------------
DROP TABLE IF EXISTS `dy_shop`;
CREATE TABLE `dy_shop` (
  `did` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dcompanyname` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `dloginname` varchar(255) DEFAULT NULL COMMENT '登录用户名',
  `dpasswordmd5` varchar(255) DEFAULT NULL COMMENT '加密密码',
  `dpassword` varchar(100) DEFAULT NULL COMMENT '登录密码',
  `dshstatus` int(2) DEFAULT '1' COMMENT '审核状态  1-通过审核 2- 拒绝',
  `dyue` varchar(255) DEFAULT NULL COMMENT '余额',
  `dhistorypay` varchar(255) DEFAULT NULL COMMENT '历史消耗',
  `durl` text COMMENT '开户链接',
  `dicpimg` varchar(100) DEFAULT 'images/nopic.png' COMMENT 'icp备案照片',
  `dyinyeimg` varchar(100) DEFAULT 'images/nopic.png' COMMENT '营业执照',
  `dotherimg` varchar(100) DEFAULT 'images/nopic.png' COMMENT '其他图片',
  `dcomment` varchar(100) DEFAULT NULL COMMENT '拒绝理由',
  PRIMARY KEY (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_shop
-- ----------------------------
INSERT INTO `dy_shop` VALUES ('1', '中策传媒', 'admin', '3d215d8fede736ee6ab52f54902ccdba', 'admin', '1', '1100', null, 'http://itxiaolong.cn', 'admin/uploads/2018-08-30/5b8765c3584a6.png', 'admin/uploads/2018-08-30/5b8765c085a95.png', 'admin/uploads/2018-09-04/5b8d669baf38a.jpg', null);
INSERT INTO `dy_shop` VALUES ('2', '小龙科技信息有限公司', '小龙', '3d215d8fede736ee6ab52f54902ccdba', 'admin', '2', '4000', null, 'http://www.itxiaolong.cn', 'admin/uploads/2018-09-01/5b8ab08c8dc45.jpg', 'admin/uploads/2018-09-01/5b8ab079b831d.jpg', 'admin/uploads/2018-09-04/5b8d65dd75ddc.png', '没有理由');
INSERT INTO `dy_shop` VALUES ('4', '龙华信息科技', 'xiaolong', '3d215d8fede736ee6ab52f54902ccdba', 'admin', '1', '45000', null, 'http://www.itxiaolong.cn', 'admin/uploads/2018-09-04/5b8e58835ca1d.png', 'admin/uploads/2018-09-04/5b8e587e0f2a5.png', '/dy/Public/images/nopic.png', null);
INSERT INTO `dy_shop` VALUES ('5', '大鹏科技公司', 'peng', '3d215d8fede736ee6ab52f54902ccdba', 'admin', '1', '5000', null, 'http:www.baidu.com', 'admin/uploads/2018-09-04/5b8e590c3ba19.jpg', 'admin/uploads/2018-09-04/5b8e5909182fd.png', 'images/nopic.png', null);

-- ----------------------------
-- Table structure for dy_user
-- ----------------------------
DROP TABLE IF EXISTS `dy_user`;
CREATE TABLE `dy_user` (
  `uid` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(30) DEFAULT NULL COMMENT '昵称',
  `headerimg` text,
  `phone` varchar(12) DEFAULT NULL,
  `shopid` int(20) DEFAULT NULL,
  `openid` text,
  `uaddtime` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_user
-- ----------------------------
INSERT INTO `dy_user` VALUES ('1', '垃圾', 'admin/uploads/2018-08-05/5b666983e92b9.jpg', '13413698547', '5', 'oo5_j09f_tmEN2SrZo7_jwFIhxl', '1533545970');
INSERT INTO `dy_user` VALUES ('2', '大龙', 'admin/uploads/2018-08-05/5b666ad9a3f7a.jpg', '13425874874', '5', 'oo5_j09f_tmEN2SrZo7_jwFIhxl', '1533545987');
INSERT INTO `dy_user` VALUES ('3', '吊仔', 'admin/uploads/2018-08-05/5b666983e92b9.jpg', '18325487440', '6', 'oo5_j09f_tmEN2SrZo7_jwFIhxl', '1533545980');
INSERT INTO `dy_user` VALUES ('7', '小龙', 'http://thirdwx.qlogo.cn/mmopen/vi_32/8t1ibxveiaNUcprg6wjFyCziastf9zEDjkTSQbDlZwIHkLyqtoMmuNF8YucgOTxdxbVH8ZNguFf2mkFpUDWKDickRg/132', '', '5', 'o9uGT0RhDgWsy3NNvuN7QYuHE2xk', '1533916365');
INSERT INTO `dy_user` VALUES ('8', '明月湖', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Bc4tu3eQic9By7KlXiaRnxEiaPzA6ibuDPWXiaiaCibniaIIC9jVazZPkSia3kksxNxdfQquZGOq603XyanUx4BFlJLIdaw/132', null, '5', 'o9uGT0ZwRuqdP1avOCCKPuWiTWYE', '1533916161');
