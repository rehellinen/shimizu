/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : shimizu

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-02-01 23:08:50
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of all_deserts
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of banner
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of best_deserts
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of media
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '菜单管理', 'admin', 'menu', 'index', '10', '1', '1');
INSERT INTO `menu` VALUES ('2', '轮播图管理', 'admin', 'banner', 'index', '9', '1', '1');
INSERT INTO `menu` VALUES ('3', '视频管理', 'admin', 'media', 'index', '6', '1', '1');
INSERT INTO `menu` VALUES ('5', '甜品管理', 'admin', 'desert', 'index', '8', '1', '1');
INSERT INTO `menu` VALUES ('6', '推荐甜品管理', 'admin', 'best', 'index', '7', '1', '1');
INSERT INTO `menu` VALUES ('7', '新闻管理', 'admin', 'news', 'index', '5', '1', '1');
INSERT INTO `menu` VALUES ('18', '首页', 'index', 'index', 'index', '0', '2', '1');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 NOT NULL,
  `media_id` int(5) unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `create_time` varchar(40) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `update_time` varchar(40) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `delete_time` varchar(40) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
