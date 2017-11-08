/*
Navicat MySQL Data Transfer

Source Server         : localhost_phpstudy
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : wzry

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-08-22 17:03:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wzry_account
-- ----------------------------
DROP TABLE IF EXISTS `wzry_account`;
CREATE TABLE `wzry_account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_account
-- ----------------------------
INSERT INTO `wzry_account` VALUES ('31', '15898212279', '1');
INSERT INTO `wzry_account` VALUES ('27', '499811380', '1');
INSERT INTO `wzry_account` VALUES ('28', '515176756', '1');
INSERT INTO `wzry_account` VALUES ('29', '770087554', '1');
INSERT INTO `wzry_account` VALUES ('30', '18740299600', '1');
INSERT INTO `wzry_account` VALUES ('32', '15134162861', '1');
INSERT INTO `wzry_account` VALUES ('33', '515176756', '2');
INSERT INTO `wzry_account` VALUES ('34', '499811380', '2');

-- ----------------------------
-- Table structure for wzry_area
-- ----------------------------
DROP TABLE IF EXISTS `wzry_area`;
CREATE TABLE `wzry_area` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_no` int(4) DEFAULT NULL,
  `area_name` varchar(255) NOT NULL,
  `type` int(1) DEFAULT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_area
-- ----------------------------
INSERT INTO `wzry_area` VALUES ('2', '2', 'abc', '1');
INSERT INTO `wzry_area` VALUES ('3', '3', 'cc', '1');
INSERT INTO `wzry_area` VALUES ('4', '4', '4', '1');
INSERT INTO `wzry_area` VALUES ('5', '5', '5', '1');
INSERT INTO `wzry_area` VALUES ('6', '6', '6', '1');
INSERT INTO `wzry_area` VALUES ('7', '1', '1', '2');
INSERT INTO `wzry_area` VALUES ('8', '2', '2', '2');

-- ----------------------------
-- Table structure for wzry_hero
-- ----------------------------
DROP TABLE IF EXISTS `wzry_hero`;
CREATE TABLE `wzry_hero` (
  `hero_id` int(11) NOT NULL AUTO_INCREMENT,
  `hero_name` varchar(255) NOT NULL,
  `hero_type` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `is_have` int(11) NOT NULL DEFAULT '0',
  `main_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`hero_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_hero
-- ----------------------------
INSERT INTO `wzry_hero` VALUES ('13', '庄周', 't', '8888', '0', null);
INSERT INTO `wzry_hero` VALUES ('14', '后羿', 'lr', '8888', '0', null);
INSERT INTO `wzry_hero` VALUES ('15', '诸葛孔明', 'fs', '18888', '0', null);
INSERT INTO `wzry_hero` VALUES ('16', '曹操', 'zs', '13888', '0', null);
INSERT INTO `wzry_hero` VALUES ('17', '阿轲', 'ck', '13888', '0', null);
INSERT INTO `wzry_hero` VALUES ('18', '亚瑟', 't', '8888', '0', null);
INSERT INTO `wzry_hero` VALUES ('19', '芈月', 'fs', '8888', '0', null);

-- ----------------------------
-- Table structure for wzry_user
-- ----------------------------
DROP TABLE IF EXISTS `wzry_user`;
CREATE TABLE `wzry_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `main_hero1` int(11) DEFAULT NULL,
  `main_hear2` int(11) DEFAULT NULL,
  `hero` text,
  `money` int(11) DEFAULT NULL,
  `diamond` int(11) DEFAULT NULL,
  `last_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_user
-- ----------------------------
INSERT INTO `wzry_user` VALUES ('23', '27', '2', 'aa', '12', null, null, '17, 15, 14, 13, 18', '2000', '500', '1503274074');
INSERT INTO `wzry_user` VALUES ('24', '32', '3', 'aa', '13', null, null, '17', '123', '345', '1503386924');
INSERT INTO `wzry_user` VALUES ('25', '34', '3', 'abc', '14', null, null, '15, 19', '123', '345', '1503388273');

-- ----------------------------
-- Table structure for wzry_user_hero
-- ----------------------------
DROP TABLE IF EXISTS `wzry_user_hero`;
CREATE TABLE `wzry_user_hero` (
  `hu_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `hero_id` int(11) NOT NULL,
  `is_main` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`hu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_user_hero
-- ----------------------------
INSERT INTO `wzry_user_hero` VALUES ('46', '23', '13', '0');
INSERT INTO `wzry_user_hero` VALUES ('44', '23', '15', '0');
INSERT INTO `wzry_user_hero` VALUES ('43', '23', '17', '0');
INSERT INTO `wzry_user_hero` VALUES ('48', '24', '17', '0');
INSERT INTO `wzry_user_hero` VALUES ('47', '23', '18', '0');
INSERT INTO `wzry_user_hero` VALUES ('49', '25', '15', '0');
INSERT INTO `wzry_user_hero` VALUES ('45', '23', '14', '0');
INSERT INTO `wzry_user_hero` VALUES ('50', '25', '19', '0');
