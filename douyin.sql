/*
Navicat MySQL Data Transfer

Source Server         : mydemo
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : douyin

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-09-04 00:53:28
*/

SET FOREIGN_KEY_CHECKS=0;

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
-- Table structure for dy_shop
-- ----------------------------
DROP TABLE IF EXISTS `dy_shop`;
CREATE TABLE `dy_shop` (
  `did` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dcompanyname` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `dloginname` varchar(255) DEFAULT NULL COMMENT '登录用户名',
  `dpasswordmd5` varchar(255) DEFAULT NULL COMMENT '加密密码',
  `dpassword` varchar(100) DEFAULT NULL COMMENT '登录密码',
  `dshstatus` int(2) DEFAULT '0' COMMENT '审核状态',
  `dyue` varchar(255) DEFAULT NULL COMMENT '余额',
  `dhistorypay` varchar(255) DEFAULT NULL COMMENT '历史消耗',
  `durl` text COMMENT '开户链接',
  `dopenstatus` int(2) DEFAULT '0' COMMENT '开启状态',
  `dicpimg` varchar(100) DEFAULT 'images/nopic.png' COMMENT 'icp备案照片',
  `dyinyeimg` varchar(100) DEFAULT 'images/nopic.png' COMMENT '营业执照',
  `dotherimg` varchar(100) DEFAULT 'images/nopic.png' COMMENT '其他图片',
  PRIMARY KEY (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_shop
-- ----------------------------
INSERT INTO `dy_shop` VALUES ('1', '中策传媒', 'admin', '3d215d8fede736ee6ab52f54902ccdba', 'admin', '0', null, null, 'http://itxiaolong.cn', '0', 'admin/uploads/2018-08-30/5b8765c3584a6.png', 'admin/uploads/2018-08-30/5b8765c085a95.png', 'admin/uploads/2018-09-04/5b8d669baf38a.jpg');
INSERT INTO `dy_shop` VALUES ('2', '小龙科技信息有限公司', '小龙', '3d215d8fede736ee6ab52f54902ccdba', 'admin', '0', null, null, 'http://www.itxiaolong.cn', '0', 'admin/uploads/2018-09-01/5b8ab08c8dc45.jpg', 'admin/uploads/2018-09-01/5b8ab079b831d.jpg', 'admin/uploads/2018-09-04/5b8d65dd75ddc.png');

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dy_user
-- ----------------------------
INSERT INTO `dy_user` VALUES ('1', '垃圾', 'admin/uploads/2018-08-05/5b666983e92b9.jpg', '13413698547', '5', 'oo5_j09f_tmEN2SrZo7_jwFIhxl', '1533545970');
INSERT INTO `dy_user` VALUES ('2', '大龙', 'admin/uploads/2018-08-05/5b666ad9a3f7a.jpg', '13425874874', '5', 'oo5_j09f_tmEN2SrZo7_jwFIhxl', '1533545987');
INSERT INTO `dy_user` VALUES ('3', '吊仔', 'admin/uploads/2018-08-05/5b666983e92b9.jpg', '18325487440', '6', 'oo5_j09f_tmEN2SrZo7_jwFIhxl', '1533545980');
INSERT INTO `dy_user` VALUES ('7', '小龙', 'http://thirdwx.qlogo.cn/mmopen/vi_32/8t1ibxveiaNUcprg6wjFyCziastf9zEDjkTSQbDlZwIHkLyqtoMmuNF8YucgOTxdxbVH8ZNguFf2mkFpUDWKDickRg/132', '', '5', 'o9uGT0RhDgWsy3NNvuN7QYuHE2xk', '1533916365');
INSERT INTO `dy_user` VALUES ('8', '明月湖', 'http://thirdwx.qlogo.cn/mmopen/vi_32/Bc4tu3eQic9By7KlXiaRnxEiaPzA6ibuDPWXiaiaCibniaIIC9jVazZPkSia3kksxNxdfQquZGOq603XyanUx4BFlJLIdaw/132', null, '5', 'o9uGT0ZwRuqdP1avOCCKPuWiTWYE', '1533916161');
INSERT INTO `dy_user` VALUES ('15', null, null, null, null, null, '1535021703');
