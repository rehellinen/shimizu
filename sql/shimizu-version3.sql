/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : shimizu

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-02-02 22:45:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for all_deserts
-- ----------------------------
DROP TABLE IF EXISTS `all_deserts`;
CREATE TABLE `all_deserts` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `media_id` int(5) unsigned NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `introduction` text CHARACTER SET utf8 NOT NULL,
  `price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of all_deserts
-- ----------------------------
INSERT INTO `all_deserts` VALUES ('13', '71', '测试1', '测试', '12.00', '1');
INSERT INTO `all_deserts` VALUES ('14', '53', '测试2', '<span>测试</span><span>测试</span><span>测试</span><span>测试</span>', '20.00', '1');
INSERT INTO `all_deserts` VALUES ('15', '54', '测试3', '<span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span>', '30.00', '1');
INSERT INTO `all_deserts` VALUES ('16', '55', '测试4', '<span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span>', '40.00', '1');
INSERT INTO `all_deserts` VALUES ('17', '56', '测试5', '<span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span>', '50.00', '1');
INSERT INTO `all_deserts` VALUES ('18', '58', '测试6', '<span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span><span>测试</span>', '60.00', '1');
INSERT INTO `all_deserts` VALUES ('19', '64', '测试xx', '测试x测试x测试x测试x测试x', '100.00', '0');

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `media_id` int(5) unsigned NOT NULL,
  `listorder` int(5) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0为关闭，1为正常，-1为删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('13', '51', '1', '1');
INSERT INTO `banner` VALUES ('14', '63', '0', '1');

-- ----------------------------
-- Table structure for best_deserts
-- ----------------------------
DROP TABLE IF EXISTS `best_deserts`;
CREATE TABLE `best_deserts` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `deserts_id` int(5) unsigned NOT NULL,
  `listorder` int(5) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of best_deserts
-- ----------------------------
INSERT INTO `best_deserts` VALUES ('5', '13', '10', '1');
INSERT INTO `best_deserts` VALUES ('6', '14', '0', '1');
INSERT INTO `best_deserts` VALUES ('7', '15', '0', '1');
INSERT INTO `best_deserts` VALUES ('8', '16', '0', '1');
INSERT INTO `best_deserts` VALUES ('9', '17', '0', '1');
INSERT INTO `best_deserts` VALUES ('10', '18', '0', '1');
INSERT INTO `best_deserts` VALUES ('11', '19', '0', '1');

-- ----------------------------
-- Table structure for event
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 NOT NULL,
  `media_id` int(5) unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0',
  `delete_time` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0为未审核，1为新闻，2为审核不通过，3为活动',
  `subtitle` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of event
-- ----------------------------
INSERT INTO `event` VALUES ('0', '<strong>测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1</strong>', '61', '测试1测试1', '1517567535', '0', '0', '1', '');
INSERT INTO `event` VALUES ('13', '测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1', '60', '测试1', '1517567574', '0', '0', '1', '');
INSERT INTO `event` VALUES ('14', '测试222测试222测试222测试222测试222', '62', '测试222', '1517568164', '0', '0', '1', '');
INSERT INTO `event` VALUES ('15', '活动2333活动2333活动2333', '65', '活动2333', '1517572473', '0', '0', '1', '');
INSERT INTO `event` VALUES ('16', '2131243254325', '70', '121213', '1517573055', '0', '0', '1', '');

-- ----------------------------
-- Table structure for media
-- ----------------------------
DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1为视频，2为图片',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '-1为删除，0为待审核，1为视频正常，2为视频审核不通过',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of media
-- ----------------------------
INSERT INTO `media` VALUES ('51', '\\upload\\20180202\\90af1a2c68ddd952d6745a354cc7f3d0.jpg', '2', '1');
INSERT INTO `media` VALUES ('52', '\\upload\\20180202\\ad332ad9adaa323c0d18b0ec346166b2.jpg', '2', '1');
INSERT INTO `media` VALUES ('53', '\\upload\\20180202\\389de02632bed7f2bcabc59b3dcba0fe.jpg', '2', '1');
INSERT INTO `media` VALUES ('54', '\\upload\\20180202\\50e8c961b83b406c3d8247043f18287d.jpg', '2', '1');
INSERT INTO `media` VALUES ('55', '\\upload\\20180202\\267711f058c513293068a45d9f089348.jpg', '2', '1');
INSERT INTO `media` VALUES ('56', '\\upload\\20180202\\d619a7e8c4e3d9116caffbb68e70a062.jpg', '2', '1');
INSERT INTO `media` VALUES ('57', '', '2', '1');
INSERT INTO `media` VALUES ('58', '\\upload\\20180202\\8a8ba92d07f375cc79591f8f7d63daee.jpg', '2', '1');
INSERT INTO `media` VALUES ('59', '', '2', '1');
INSERT INTO `media` VALUES ('60', '\\upload\\20180202\\8265bbe2a19a0b15767a4910c99eda9a.jpg', '2', '1');
INSERT INTO `media` VALUES ('61', '\\upload\\20180202\\9e2410306b27f23271447cf835a22435.jpg', '2', '1');
INSERT INTO `media` VALUES ('62', '\\upload\\20180202\\a02e7038102bda93719f211ce6fbdca7.jpg', '2', '1');
INSERT INTO `media` VALUES ('63', '\\upload\\20180202\\6b1233d4932b56d6c54641c467984b11.jpg', '2', '1');
INSERT INTO `media` VALUES ('64', '\\upload\\20180202\\0b9ed19d8fdabe9c97c33a03a2de932c.jpg', '2', '1');
INSERT INTO `media` VALUES ('65', '\\upload\\20180202\\1020dba8fe28d83076ec0343a8be13a8.jpg', '2', '1');
INSERT INTO `media` VALUES ('66', '\\upload\\20180202\\1020dba8fe28d83076ec0343a8be13a8.jpg', '2', '1');
INSERT INTO `media` VALUES ('67', '\\upload\\20180202\\f07f0274625cc9b0d98cfd33c247316c.jpg', '2', '1');
INSERT INTO `media` VALUES ('68', '\\upload\\20180202\\f07f0274625cc9b0d98cfd33c247316c.jpg', '2', '1');
INSERT INTO `media` VALUES ('69', '\\upload\\20180202\\f07f0274625cc9b0d98cfd33c247316c.jpg', '2', '1');
INSERT INTO `media` VALUES ('70', '\\upload\\20180202\\8c7129b8c3f4e916cc68a6fc0ed9b475.jpg', '2', '1');
INSERT INTO `media` VALUES ('71', '\\upload\\20180202\\1eafff5ea147101c0d899d6c94e63ec9.jpg', '2', '1');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `m` varchar(15) CHARACTER SET utf8 NOT NULL,
  `c` varchar(15) CHARACTER SET utf8 NOT NULL,
  `f` varchar(15) CHARACTER SET utf8 NOT NULL,
  `listorder` int(5) NOT NULL DEFAULT '0',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1为后台、2为前端',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '-1为删除，0为待审核，1为正常，2为审核不通过',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '菜单管理', 'admin', 'menu', 'index', '26', '1', '1');
INSERT INTO `menu` VALUES ('2', '轮播图管理', 'admin', 'banner', 'index', '25', '1', '1');
INSERT INTO `menu` VALUES ('3', '视频管理', 'admin', 'media', 'index', '22', '1', '1');
INSERT INTO `menu` VALUES ('5', '甜品管理', 'admin', 'desert', 'index', '24', '1', '1');
INSERT INTO `menu` VALUES ('6', '推荐甜品管理', 'admin', 'best', 'index', '23', '1', '1');
INSERT INTO `menu` VALUES ('7', '新闻管理', 'admin', 'news', 'index', '21', '1', '1');
INSERT INTO `menu` VALUES ('18', '首页', 'index', 'index', 'index', '9', '2', '1');
INSERT INTO `menu` VALUES ('19', '清宇咨询', 'index', 'news', 'index', '8', '2', '1');
INSERT INTO `menu` VALUES ('20', '近期活动', 'index', 'event', 'index', '7', '2', '1');
INSERT INTO `menu` VALUES ('21', '产品展示', 'index', 'product', 'index', '6', '2', '1');
INSERT INTO `menu` VALUES ('22', '门店展示', 'index', 'store', 'index', '5', '2', '1');
INSERT INTO `menu` VALUES ('23', '活动管理', 'admin', 'event', 'index', '20', '1', '1');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 NOT NULL,
  `media_id` int(5) unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0',
  `delete_time` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0为未审核，1为新闻，2为审核不通过，3为活动',
  `subtitle` varchar(255) CHARACTER SET utf8 DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('12', '<strong>测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试11</strong>', '67', '测试1测试1', '1517567535', '0', '0', '1', '');
INSERT INTO `news` VALUES ('13', '测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1测试1', '60', '测试1', '1517567574', '0', '0', '1', '');
INSERT INTO `news` VALUES ('14', '测试222测试222测试222测试222测试222', '62', '测试222', '1517568164', '0', '0', '1', '');
INSERT INTO `news` VALUES ('15', '活动2333活动2333活动2333', '65', '活动2333', '1517572444', '0', '0', '1', '');
