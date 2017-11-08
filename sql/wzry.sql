/*
Navicat MySQL Data Transfer

Source Server         : localhost_phpstudy
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : wzry

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-10-02 16:03:22
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
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_account
-- ----------------------------
INSERT INTO `wzry_account` VALUES ('1', '515176756', '1');
INSERT INTO `wzry_account` VALUES ('2', '499811380', '1');
INSERT INTO `wzry_account` VALUES ('3', '770087554', '1');
INSERT INTO `wzry_account` VALUES ('4', '18740299600', '1');
INSERT INTO `wzry_account` VALUES ('5', '15898212279', '1');
INSERT INTO `wzry_account` VALUES ('6', '15640699612', '1');
INSERT INTO `wzry_account` VALUES ('7', '15134162861', '1');
INSERT INTO `wzry_account` VALUES ('8', '515176756', '2');
INSERT INTO `wzry_account` VALUES ('9', '499811380', '2');
INSERT INTO `wzry_account` VALUES ('10', '770087554', '2');
INSERT INTO `wzry_account` VALUES ('11', '877480433', '2');
INSERT INTO `wzry_account` VALUES ('12', '394020057', '2');

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_area
-- ----------------------------
INSERT INTO `wzry_area` VALUES ('1', '22', '', '1');
INSERT INTO `wzry_area` VALUES ('2', '112', '', '1');
INSERT INTO `wzry_area` VALUES ('3', '117', '', '1');
INSERT INTO `wzry_area` VALUES ('4', '19', '', '1');
INSERT INTO `wzry_area` VALUES ('5', '109', '', '1');
INSERT INTO `wzry_area` VALUES ('6', '16', '', '1');
INSERT INTO `wzry_area` VALUES ('7', '124', '', '1');
INSERT INTO `wzry_area` VALUES ('8', '118', '', '1');
INSERT INTO `wzry_area` VALUES ('9', '103', '', '1');
INSERT INTO `wzry_area` VALUES ('10', '86', '', '2');
INSERT INTO `wzry_area` VALUES ('11', '197', '', '2');
INSERT INTO `wzry_area` VALUES ('12', '62', '', '2');
INSERT INTO `wzry_area` VALUES ('13', '59', '', '2');
INSERT INTO `wzry_area` VALUES ('14', '87', '', '2');
INSERT INTO `wzry_area` VALUES ('15', '236', '', '2');
INSERT INTO `wzry_area` VALUES ('16', '145', '', '2');
INSERT INTO `wzry_area` VALUES ('17', '128', '', '1');

-- ----------------------------
-- Table structure for wzry_career
-- ----------------------------
DROP TABLE IF EXISTS `wzry_career`;
CREATE TABLE `wzry_career` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `mvp` varchar(255) DEFAULT NULL,
  `good` varchar(255) DEFAULT NULL,
  `fivekill` varchar(255) DEFAULT NULL COMMENT '5杀',
  `forekill` varchar(255) DEFAULT NULL COMMENT '四杀',
  `threekill` varchar(255) DEFAULT NULL COMMENT '三杀',
  `zcc` varchar(255) DEFAULT NULL COMMENT '总场次',
  `sc` varchar(255) DEFAULT NULL COMMENT '胜场',
  `sl` varchar(255) DEFAULT NULL COMMENT '胜率',
  `fiveppsc` varchar(255) DEFAULT NULL COMMENT '胜场',
  `fiveppzc` varchar(255) DEFAULT NULL COMMENT '总场',
  `fiveppsl` varchar(255) DEFAULT NULL COMMENT '5v5匹配胜率',
  `threeppsc` varchar(255) DEFAULT NULL,
  `threeppzc` varchar(255) DEFAULT NULL,
  `threeppsl` varchar(255) DEFAULT NULL,
  `oneppsc` varchar(255) DEFAULT NULL,
  `oneppzc` varchar(255) DEFAULT NULL,
  `oneppsl` varchar(255) DEFAULT NULL,
  `funsc` varchar(255) DEFAULT NULL,
  `funzc` varchar(255) DEFAULT NULL,
  `funsl` varchar(255) DEFAULT NULL COMMENT '娱乐模式',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_career
-- ----------------------------

-- ----------------------------
-- Table structure for wzry_hero
-- ----------------------------
DROP TABLE IF EXISTS `wzry_hero`;
CREATE TABLE `wzry_hero` (
  `hero_id` int(11) NOT NULL AUTO_INCREMENT,
  `hero_name` varchar(255) NOT NULL,
  `hero_type` varchar(255) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`hero_id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_hero
-- ----------------------------
INSERT INTO `wzry_hero` VALUES ('1', '庄周', 'fz', '888');
INSERT INTO `wzry_hero` VALUES ('2', '甄姬', 'fs', '888');
INSERT INTO `wzry_hero` VALUES ('3', '后羿', 'lr', '2888');
INSERT INTO `wzry_hero` VALUES ('4', '刘禅', 't', '2888');
INSERT INTO `wzry_hero` VALUES ('5', '鲁班七号', 'lr', '2888');
INSERT INTO `wzry_hero` VALUES ('6', '老夫子', 'zs', '5888');
INSERT INTO `wzry_hero` VALUES ('7', '扁鹊', 'fz', '5888');
INSERT INTO `wzry_hero` VALUES ('8', '孙膑', 'fz', '5888');
INSERT INTO `wzry_hero` VALUES ('9', '钟无艳', 't', '5888');
INSERT INTO `wzry_hero` VALUES ('10', '小乔', 'fs', '5888');
INSERT INTO `wzry_hero` VALUES ('11', '孙尚香', 'lr', '5888');
INSERT INTO `wzry_hero` VALUES ('12', '姜子牙', 'fz', '6888');
INSERT INTO `wzry_hero` VALUES ('13', '廉颇', 't', '8888');
INSERT INTO `wzry_hero` VALUES ('14', '狄仁杰', 'lr', '8888');
INSERT INTO `wzry_hero` VALUES ('15', '王昭君', 'fs', '8888');
INSERT INTO `wzry_hero` VALUES ('16', '墨子', 't', '8888');
INSERT INTO `wzry_hero` VALUES ('17', '李元芳', 'lr', '13888');
INSERT INTO `wzry_hero` VALUES ('18', '张飞', 'fz', '13888');
INSERT INTO `wzry_hero` VALUES ('19', '刘备', 'zs', '13888');
INSERT INTO `wzry_hero` VALUES ('20', '刘邦', 'fz', '13888');
INSERT INTO `wzry_hero` VALUES ('21', '兰陵王', 'ck', '13888');
INSERT INTO `wzry_hero` VALUES ('22', '牛魔', 'fz', '13888');
INSERT INTO `wzry_hero` VALUES ('23', '张良', 'fs', '13888');
INSERT INTO `wzry_hero` VALUES ('24', '铠', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('25', '黄忠', 'lr', '13888');
INSERT INTO `wzry_hero` VALUES ('26', '大乔', 'fz', '13888');
INSERT INTO `wzry_hero` VALUES ('27', '百里守约', 'lr', '13888');
INSERT INTO `wzry_hero` VALUES ('28', '百里玄策', 'ck', '13888');
INSERT INTO `wzry_hero` VALUES ('29', '苏烈', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('30', '蔡文姬', 'fz', '13888');
INSERT INTO `wzry_hero` VALUES ('31', '干将莫邪', 'fs', '13888');
INSERT INTO `wzry_hero` VALUES ('32', '虞姬', 'lr', '13888');
INSERT INTO `wzry_hero` VALUES ('33', '鬼谷子', 'fz', '13888');
INSERT INTO `wzry_hero` VALUES ('34', '东皇太一', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('35', '太乙真人', 'fz', '13888');
INSERT INTO `wzry_hero` VALUES ('36', '露娜', 'zs', '13888');
INSERT INTO `wzry_hero` VALUES ('37', '曹操', 'zs', '13888');
INSERT INTO `wzry_hero` VALUES ('38', '夏侯惇', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('39', '典韦', 'zs', '13888');
INSERT INTO `wzry_hero` VALUES ('40', '达摩', 'zs', '13888');
INSERT INTO `wzry_hero` VALUES ('41', '马可波罗', 'lr', '13888');
INSERT INTO `wzry_hero` VALUES ('42', '阿轲', 'ck', '13888');
INSERT INTO `wzry_hero` VALUES ('43', '高渐离', 'fs', '13888');
INSERT INTO `wzry_hero` VALUES ('44', '白起', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('45', '周瑜', 'fs', '13888');
INSERT INTO `wzry_hero` VALUES ('46', '芈月', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('47', '程咬金', 'zs', '13888');
INSERT INTO `wzry_hero` VALUES ('48', '貂蝉', 'ck', '13888');
INSERT INTO `wzry_hero` VALUES ('49', '雅典娜', 'zs', '18888');
INSERT INTO `wzry_hero` VALUES ('50', '哪吒', 'zs', '18888');
INSERT INTO `wzry_hero` VALUES ('51', '杨戬', 'zs', '18888');
INSERT INTO `wzry_hero` VALUES ('52', '花木兰', 'ck', '18888');
INSERT INTO `wzry_hero` VALUES ('53', '吕布', 't', '18888');
INSERT INTO `wzry_hero` VALUES ('54', '关羽', 'zs', '18888');
INSERT INTO `wzry_hero` VALUES ('55', '诸葛亮', 'fs', '18888');
INSERT INTO `wzry_hero` VALUES ('56', '成吉思汗', 'lr', '18888');
INSERT INTO `wzry_hero` VALUES ('57', '宫本武藏', 'zs', '18888');
INSERT INTO `wzry_hero` VALUES ('58', '李白', 'ck', '18888');
INSERT INTO `wzry_hero` VALUES ('59', '孙悟空', 'ck', '18888');
INSERT INTO `wzry_hero` VALUES ('60', '钟馗', 'zs', '18888');
INSERT INTO `wzry_hero` VALUES ('61', '妲己', 'fs', '0');
INSERT INTO `wzry_hero` VALUES ('62', '赵云', 'ck', 'xy');
INSERT INTO `wzry_hero` VALUES ('63', '韩信', 'ck', 'xy');
INSERT INTO `wzry_hero` VALUES ('64', '安琪拉', 'fs', '0');
INSERT INTO `wzry_hero` VALUES ('65', '嬴政', 'fs', 'xy');
INSERT INTO `wzry_hero` VALUES ('66', '橘右京', 'ck', 'xy');
INSERT INTO `wzry_hero` VALUES ('67', '项羽', 't', '0');
INSERT INTO `wzry_hero` VALUES ('68', '亚瑟', 't', '0');
INSERT INTO `wzry_hero` VALUES ('69', '武则天', 'fs', 'bt');
INSERT INTO `wzry_hero` VALUES ('70', '不知火舞', 'ck', 'xy');
INSERT INTO `wzry_hero` VALUES ('71', '娜可露露', 'ck', 'xy');

-- ----------------------------
-- Table structure for wzry_main_hero
-- ----------------------------
DROP TABLE IF EXISTS `wzry_main_hero`;
CREATE TABLE `wzry_main_hero` (
  `user_id` int(11) NOT NULL,
  `hero_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`hero_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_main_hero
-- ----------------------------
INSERT INTO `wzry_main_hero` VALUES ('1', '3');
INSERT INTO `wzry_main_hero` VALUES ('1', '15');
INSERT INTO `wzry_main_hero` VALUES ('1', '30');
INSERT INTO `wzry_main_hero` VALUES ('1', '48');
INSERT INTO `wzry_main_hero` VALUES ('1', '60');
INSERT INTO `wzry_main_hero` VALUES ('1', '65');
INSERT INTO `wzry_main_hero` VALUES ('2', '10');
INSERT INTO `wzry_main_hero` VALUES ('3', '46');
INSERT INTO `wzry_main_hero` VALUES ('4', '36');
INSERT INTO `wzry_main_hero` VALUES ('4', '39');
INSERT INTO `wzry_main_hero` VALUES ('6', '2');
INSERT INTO `wzry_main_hero` VALUES ('6', '19');
INSERT INTO `wzry_main_hero` VALUES ('10', '7');
INSERT INTO `wzry_main_hero` VALUES ('10', '16');
INSERT INTO `wzry_main_hero` VALUES ('11', '52');
INSERT INTO `wzry_main_hero` VALUES ('13', '1');
INSERT INTO `wzry_main_hero` VALUES ('14', '22');
INSERT INTO `wzry_main_hero` VALUES ('15', '42');
INSERT INTO `wzry_main_hero` VALUES ('16', '5');
INSERT INTO `wzry_main_hero` VALUES ('16', '44');
INSERT INTO `wzry_main_hero` VALUES ('17', '17');
INSERT INTO `wzry_main_hero` VALUES ('18', '4');
INSERT INTO `wzry_main_hero` VALUES ('19', '54');
INSERT INTO `wzry_main_hero` VALUES ('21', '58');
INSERT INTO `wzry_main_hero` VALUES ('21', '62');
INSERT INTO `wzry_main_hero` VALUES ('22', '12');
INSERT INTO `wzry_main_hero` VALUES ('22', '32');
INSERT INTO `wzry_main_hero` VALUES ('23', '41');
INSERT INTO `wzry_main_hero` VALUES ('24', '27');
INSERT INTO `wzry_main_hero` VALUES ('25', '8');
INSERT INTO `wzry_main_hero` VALUES ('25', '56');
INSERT INTO `wzry_main_hero` VALUES ('26', '43');
INSERT INTO `wzry_main_hero` VALUES ('27', '13');
INSERT INTO `wzry_main_hero` VALUES ('28', '29');
INSERT INTO `wzry_main_hero` VALUES ('29', '26');
INSERT INTO `wzry_main_hero` VALUES ('30', '18');
INSERT INTO `wzry_main_hero` VALUES ('31', '6');
INSERT INTO `wzry_main_hero` VALUES ('31', '9');
INSERT INTO `wzry_main_hero` VALUES ('31', '20');
INSERT INTO `wzry_main_hero` VALUES ('31', '47');
INSERT INTO `wzry_main_hero` VALUES ('31', '71');
INSERT INTO `wzry_main_hero` VALUES ('32', '50');
INSERT INTO `wzry_main_hero` VALUES ('33', '21');
INSERT INTO `wzry_main_hero` VALUES ('34', '23');
INSERT INTO `wzry_main_hero` VALUES ('34', '38');
INSERT INTO `wzry_main_hero` VALUES ('35', '35');
INSERT INTO `wzry_main_hero` VALUES ('38', '59');
INSERT INTO `wzry_main_hero` VALUES ('39', '33');
INSERT INTO `wzry_main_hero` VALUES ('40', '31');
INSERT INTO `wzry_main_hero` VALUES ('41', '49');
INSERT INTO `wzry_main_hero` VALUES ('42', '55');
INSERT INTO `wzry_main_hero` VALUES ('44', '57');
INSERT INTO `wzry_main_hero` VALUES ('45', '11');
INSERT INTO `wzry_main_hero` VALUES ('45', '14');
INSERT INTO `wzry_main_hero` VALUES ('45', '66');
INSERT INTO `wzry_main_hero` VALUES ('46', '37');
INSERT INTO `wzry_main_hero` VALUES ('47', '40');
INSERT INTO `wzry_main_hero` VALUES ('47', '45');
INSERT INTO `wzry_main_hero` VALUES ('47', '70');
INSERT INTO `wzry_main_hero` VALUES ('48', '53');
INSERT INTO `wzry_main_hero` VALUES ('51', '24');

-- ----------------------------
-- Table structure for wzry_temp_hmu
-- ----------------------------
DROP TABLE IF EXISTS `wzry_temp_hmu`;
CREATE TABLE `wzry_temp_hmu` (
  `user_id` int(11) NOT NULL,
  `hero_id` int(11) NOT NULL,
  PRIMARY KEY (`hero_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_temp_hmu
-- ----------------------------
INSERT INTO `wzry_temp_hmu` VALUES ('0', '61');
INSERT INTO `wzry_temp_hmu` VALUES ('0', '64');
INSERT INTO `wzry_temp_hmu` VALUES ('0', '67');
INSERT INTO `wzry_temp_hmu` VALUES ('0', '68');

-- ----------------------------
-- Table structure for wzry_update
-- ----------------------------
DROP TABLE IF EXISTS `wzry_update`;
CREATE TABLE `wzry_update` (
  `update_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `account` varchar(255) DEFAULT NULL,
  `area_no` int(11) DEFAULT NULL,
  `last_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`update_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_update
-- ----------------------------
INSERT INTO `wzry_update` VALUES ('11', '禴夕人', '1', '515176756', '22', '1506931200');

-- ----------------------------
-- Table structure for wzry_user
-- ----------------------------
DROP TABLE IF EXISTS `wzry_user`;
CREATE TABLE `wzry_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `hero` text,
  `money` int(11) DEFAULT NULL,
  `diamond` int(11) DEFAULT NULL,
  `last_time` int(11) DEFAULT NULL,
  `paiwei` varchar(255) DEFAULT NULL COMMENT '排位',
  `changshu` int(11) DEFAULT NULL COMMENT '场数',
  `mingwen` int(11) DEFAULT NULL COMMENT '铭文',
  `shenglv` varchar(255) DEFAULT '' COMMENT '胜率',
  `zhanli` varchar(255) DEFAULT '' COMMENT '战力',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_user
-- ----------------------------
INSERT INTO `wzry_user` VALUES ('1', '1', '1', '禴夕人', '27', '48, 62, 66, 70, 2, 15, 43, 45, 61, 64, 65, 1, 8, 12, 20, 26, 30, 3, 5, 17, 13, 67, 68, 60', '18723', '209', '1506866057', '黄金I', '403', '116', '', '');
INSERT INTO `wzry_user` VALUES ('2', '1', '2', '筠徵', '13', '2, 10, 1, 67, 68', '1036', '481', '1506867367', '青铜II', '47', '39', '', '');
INSERT INTO `wzry_user` VALUES ('3', '1', '3', '筠徵', '12', '2, 61, 1, 46, 67, 68', '14703', '640', '1506868023', '青铜III', '39', '25', '', '');
INSERT INTO `wzry_user` VALUES ('4', '1', '4', '鹿水凉', '12', '61, 64, 67, 68, 36, 39', '7358', '600', '1506868225', '青铜III', '35', '51', '', '');
INSERT INTO `wzry_user` VALUES ('6', '1', '6', '兰洇', '10', '2, 61, 64, 1, 67, 68, 19', '4545', '3403', '1506868817', '青铜III', '7', '25', '', '');
INSERT INTO `wzry_user` VALUES ('7', '1', '7', 'knight_k', '6', '2, 1, 67, 68', '4690', '336', '1506869053', '青铜III', '0', '5', '', '');
INSERT INTO `wzry_user` VALUES ('8', '7', '8', '忆笑眄', '9', '2, 61, 64, 1, 67, 68', '15702', '330', '1506869158', '青铜III', '9', '23', '', '');
INSERT INTO `wzry_user` VALUES ('9', '7', '9', '星魂', '7', '67, 68', '11839', '263', '1506869228', '青铜III', '4', '13', '', '');
INSERT INTO `wzry_user` VALUES ('10', '11', '10', '幼莃', '22', '2, 45, 61, 64, 1, 7, 8, 12, 3, 5, 16, 46, 67, 68', '4413', '2606', '1506870226', '黄金IV', '157', '88', '', '');
INSERT INTO `wzry_user` VALUES ('11', '11', '11', '禴幼莃', '13', '52, 61, 64, 67, 68', '4067', '268', '1506870486', '青铜III', '24', '49', '', '');
INSERT INTO `wzry_user` VALUES ('12', '11', '12', '茔界', '10', '61, 64, 67, 68', '18893', '0', '1506870580', '青铜III', '9', '21', '', '');
INSERT INTO `wzry_user` VALUES ('13', '11', '13', '渊献', '8', '61, 64, 1, 67, 68', '18242', '1731', '1506870715', '青铜III', '8', '20', '', '');
INSERT INTO `wzry_user` VALUES ('14', '11', '14', '睡不醒', '8', '2, 61, 64, 22, 67, 68', '973', '1961', '1506871161', '青铜III', '2', '25', '', '');
INSERT INTO `wzry_user` VALUES ('15', '12', '12', '小宛', '12', '42, 61, 64, 67, 68', '2192', '1572', '1506871266', '青铜III', '25', '47', '', '');
INSERT INTO `wzry_user` VALUES ('16', '12', '14', '古玉顷沉', '12', '2, 61, 64, 1, 5, 44, 67, 68', '7224', '2246', '1506871375', '黄金IV', '36', '39', '', '');
INSERT INTO `wzry_user` VALUES ('17', '12', '13', '弱拂', '11', '61, 64, 26, 17, 67, 68', '2122', '529', '1506871474', '青铜III', '38', '25', '', '');
INSERT INTO `wzry_user` VALUES ('18', '12', '15', 'whellote', '11', '2, 61, 1, 4, 67, 68', '9884', '1074', '1506871567', '青铜III', '34', '22', '', '');
INSERT INTO `wzry_user` VALUES ('19', '12', '11', '禴尚晚', '10', '61, 64, 67, 68, 54', '3272', '529', '1506871645', '青铜III', '11', '35', '', '');
INSERT INTO `wzry_user` VALUES ('20', '12', '10', '俞萼', '7', '2, 61, 64, 1, 67, 68', '11237', '823', '1506871769', '青铜III', '6', '17', '', '');
INSERT INTO `wzry_user` VALUES ('21', '9', '11', '禴小宛', '14', '58, 62, 61, 64, 5, 4, 67, 68', '7279', '165', '1506906193', '青铜II', '49', '50', '', '');
INSERT INTO `wzry_user` VALUES ('22', '9', '13', '潇湘水云', '12', '61, 64, 12, 32, 67, 68', '5290', '1839', '1506906436', '白银III', '26', '42', '', '');
INSERT INTO `wzry_user` VALUES ('23', '9', '14', '花堪季', '10', '2, 61, 64, 41, 67, 68', '3576', '383', '1506906549', '青铜III', '8', '37', '', '');
INSERT INTO `wzry_user` VALUES ('24', '9', '12', '姬月篁', '9', '2, 61, 64, 1, 27, 67, 68', '4123', '1707', '1506906652', '青铜III', '9', '22', '', '');
INSERT INTO `wzry_user` VALUES ('25', '9', '10', '嵇眉', '9', '61, 64, 8, 56, 67, 68', '1631', '1697', '1506906784', '青铜III', '11', '35', '', '');
INSERT INTO `wzry_user` VALUES ('26', '10', '14', '禴柒棠', '21', '71, 2, 23, 43, 61, 64, 1, 3, 46, 67, 68', '2838', '2372', '1506906893', '白银III', '147', '81', '', '');
INSERT INTO `wzry_user` VALUES ('27', '10', '11', '禴柒棠', '16', '2, 23, 61, 64, 1, 8, 17, 13, 67, 68', '6792', '201', '1506907048', '白银II', '69', '68', '', '');
INSERT INTO `wzry_user` VALUES ('28', '10', '13', '天风环佩', '10', '61, 64, 29, 67, 68', '4247', '1630', '1506907155', '青铜II', '13', '23', '', '');
INSERT INTO `wzry_user` VALUES ('29', '10', '12', '冽青颜', '9', '61, 64, 26, 67, 68', '2960', '549', '1506907249', '青铜III', '6', '29', '', '');
INSERT INTO `wzry_user` VALUES ('30', '10', '10', '惊羽楚玖', '8', '61, 64, 18, 67, 68', '2912', '1066', '1506907360', '青铜III', '4', '11', '', '');
INSERT INTO `wzry_user` VALUES ('31', '8', '11', '夏禴', '17', '62, 71, 61, 64, 20, 4, 9, 67, 68, 6, 47', '6896', '221', '1506907638', '青铜III', '65', '67', '', '');
INSERT INTO `wzry_user` VALUES ('32', '8', '13', '千意醉', '11', '61, 64, 67, 68, 50', '1248', '1439', '1506907766', '青铜III', '14', '37', '', '');
INSERT INTO `wzry_user` VALUES ('33', '8', '10', '膝横花间', '11', '21, 2, 61, 64, 1, 67, 68', '2776', '1171', '1506907871', '青铜III', '20', '39', '', '');
INSERT INTO `wzry_user` VALUES ('34', '8', '14', '单调的断音', '10', '23, 61, 64, 38, 67, 68, 39', '4828', '603', '1506907967', '青铜III', '12', '36', '', '');
INSERT INTO `wzry_user` VALUES ('35', '8', '12', '临雪归', '8', '61, 64, 35, 67, 68', '2810', '2740', '1506908042', '青铜III', '2', '22', '', '');
INSERT INTO `wzry_user` VALUES ('36', '8', '16', '沙冰凉凉', '8', '2, 1, 12, 67, 68', '8703', '383', '1506908144', '青铜III', '21', '14', '', '');
INSERT INTO `wzry_user` VALUES ('37', '6', '17', '西横花间', '7', '2, 61, 64, 67, 68', '15079', '278', '1506908304', '青铜III', '2', '16', '', '');
INSERT INTO `wzry_user` VALUES ('38', '5', '1', '无双的团扇', '11', '59, 61, 64, 8, 67, 68, 39', '6228', '1840', '1506908388', '青铜III', '12', '39', '', '');
INSERT INTO `wzry_user` VALUES ('39', '5', '4', '茅蒐', '8', '61, 64, 33, 67, 68', '2607', '2569', '1506908509', '青铜III', '2', '22', '', '');
INSERT INTO `wzry_user` VALUES ('40', '5', '6', '即炤', '6', '31, 61, 64, 67, 68', '567', '2216', '1506908561', '青铜III', '0', '20', '', '');
INSERT INTO `wzry_user` VALUES ('41', '4', '1', '晓梦蝶影', '13', '2, 61, 64, 67, 68, 39, 49', '9480', '1838', '1506909182', '青铜III', '48', '43', '', '');
INSERT INTO `wzry_user` VALUES ('42', '4', '6', '兰洇', '10', '2, 55, 61, 64, 67, 68', '1068', '363', '1506909293', '青铜III', '9', '38', '', '');
INSERT INTO `wzry_user` VALUES ('43', '4', '4', '兰洇', '7', '61, 64, 67, 68', '12049', '2089', '1506909352', '青铜III', '0', '18', '', '');
INSERT INTO `wzry_user` VALUES ('44', '2', '1', '浩然阁主', '12', '61, 64, 67, 68, 57', '4029', '1314', '1506909531', '青铜III', '16', '33', '', '');
INSERT INTO `wzry_user` VALUES ('45', '2', '6', 'whellote', '15', '66, 61, 64, 1, 3, 5, 11, 14, 67, 68', '3710', '1521', '1506909657', '青铜III', '63', '58', '', '');
INSERT INTO `wzry_user` VALUES ('46', '2', '4', '禹落然', '8', '61, 64, 67, 68, 37', '3566', '1313', '1506909798', '青铜III', '2', '20', '', '');
INSERT INTO `wzry_user` VALUES ('47', '3', '4', '戬榖', '23', '62, 70, 2, 10, 23, 45, 61, 64, 1, 8, 12, 3, 67, 68, 40', '11499', '976', '1506909970', '白银III', '199', '92', '', '');
INSERT INTO `wzry_user` VALUES ('48', '3', '1', '禴渝未', '10', '62, 61, 64, 53, 67, 68', '4046', '1958', '1506910136', '青铜III', '10', '25', '', '');
INSERT INTO `wzry_user` VALUES ('49', '3', '6', '桡介', '6', '61, 64, 67, 68', '15179', '2164', '1506910261', '青铜III', '2', '15', '', '');
INSERT INTO `wzry_user` VALUES ('50', '3', '6', '桡介', '6', '61, 64, 67, 68', '15179', '2164', '1506910278', '青铜III', '2', '15', '', '');
INSERT INTO `wzry_user` VALUES ('51', '1', '5', 'malloc_c', '11', '1, 24, 67, 68', '478', '759', '1506913652', '青铜III', '30', '16', '', '');

-- ----------------------------
-- Table structure for wzry_user_hero
-- ----------------------------
DROP TABLE IF EXISTS `wzry_user_hero`;
CREATE TABLE `wzry_user_hero` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `hero_id` int(11) NOT NULL,
  `cc` int(11) DEFAULT NULL COMMENT '场次',
  `hero_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`,`hero_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_user_hero
-- ----------------------------
INSERT INTO `wzry_user_hero` VALUES ('1', '60', '1', '钟馗');
INSERT INTO `wzry_user_hero` VALUES ('1', '12', '8', '姜子牙');
INSERT INTO `wzry_user_hero` VALUES ('1', '30', '42', '蔡文姬');
INSERT INTO `wzry_user_hero` VALUES ('1', '17', '4', '李元芳');
INSERT INTO `wzry_user_hero` VALUES ('1', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('1', '62', '0', '赵云');
INSERT INTO `wzry_user_hero` VALUES ('1', '45', '13', '周瑜');
INSERT INTO `wzry_user_hero` VALUES ('1', '1', '11', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('1', '8', '13', '孙膑');
INSERT INTO `wzry_user_hero` VALUES ('1', '26', '0', '大乔');
INSERT INTO `wzry_user_hero` VALUES ('1', '3', '9', '后羿');
INSERT INTO `wzry_user_hero` VALUES ('1', '5', '1', '鲁班七号');
INSERT INTO `wzry_user_hero` VALUES ('1', '48', '11', '貂蝉');
INSERT INTO `wzry_user_hero` VALUES ('1', '2', '118', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('1', '15', '9', '王昭君');
INSERT INTO `wzry_user_hero` VALUES ('1', '64', '20', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('1', '65', '0', '嬴政');
INSERT INTO `wzry_user_hero` VALUES ('1', '66', '0', '橘右京');
INSERT INTO `wzry_user_hero` VALUES ('1', '70', '2', '不知火舞');
INSERT INTO `wzry_user_hero` VALUES ('1', '61', '20', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('1', '43', '1', '高渐离');
INSERT INTO `wzry_user_hero` VALUES ('1', '13', '0', '廉颇');
INSERT INTO `wzry_user_hero` VALUES ('1', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('1', '20', '0', '刘邦');
INSERT INTO `wzry_user_hero` VALUES ('2', '2', '4', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('2', '10', '16', '小乔');
INSERT INTO `wzry_user_hero` VALUES ('2', '1', '2', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('2', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('2', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('3', '2', '6', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('3', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('3', '1', '6', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('3', '46', '0', '芈月');
INSERT INTO `wzry_user_hero` VALUES ('3', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('3', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('4', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('4', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('4', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('4', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('4', '36', '14', '露娜');
INSERT INTO `wzry_user_hero` VALUES ('4', '39', '0', '典韦');
INSERT INTO `wzry_user_hero` VALUES ('6', '2', '0', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('6', '61', '1', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('6', '64', '2', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('6', '1', '0', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('6', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('6', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('6', '19', '1', '刘备');
INSERT INTO `wzry_user_hero` VALUES ('7', '2', '0', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('7', '1', '0', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('7', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('7', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('8', '2', '0', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('8', '61', '3', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('8', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('8', '1', '0', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('8', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('8', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('9', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('9', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('10', '2', '22', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('10', '45', '11', '周瑜');
INSERT INTO `wzry_user_hero` VALUES ('10', '61', '8', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('10', '64', '5', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('10', '1', '6', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('10', '7', '11', '扁鹊');
INSERT INTO `wzry_user_hero` VALUES ('10', '8', '25', '孙膑');
INSERT INTO `wzry_user_hero` VALUES ('10', '12', '1', '姜子牙');
INSERT INTO `wzry_user_hero` VALUES ('10', '3', '1', '后羿');
INSERT INTO `wzry_user_hero` VALUES ('10', '5', '1', '鲁班七号');
INSERT INTO `wzry_user_hero` VALUES ('10', '16', '0', '墨子');
INSERT INTO `wzry_user_hero` VALUES ('10', '46', '29', '芈月');
INSERT INTO `wzry_user_hero` VALUES ('10', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('10', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('11', '52', '8', '花木兰');
INSERT INTO `wzry_user_hero` VALUES ('11', '61', '2', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('11', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('11', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('11', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('12', '61', '1', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('12', '64', '1', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('12', '67', '1', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('12', '68', '1', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('13', '61', '1', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('13', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('13', '1', '2', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('13', '67', '1', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('13', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('14', '2', '1', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('14', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('14', '64', '1', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('14', '22', '0', '牛魔');
INSERT INTO `wzry_user_hero` VALUES ('14', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('14', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('15', '42', '9', '阿轲');
INSERT INTO `wzry_user_hero` VALUES ('15', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('15', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('15', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('15', '68', '1', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('16', '2', '7', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('16', '61', '18', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('16', '64', '1', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('16', '1', '5', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('16', '5', '4', '鲁班七号');
INSERT INTO `wzry_user_hero` VALUES ('16', '44', '0', '白起');
INSERT INTO `wzry_user_hero` VALUES ('16', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('16', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('17', '61', '2', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('17', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('17', '26', '0', '大乔');
INSERT INTO `wzry_user_hero` VALUES ('17', '17', '3', '李元芳');
INSERT INTO `wzry_user_hero` VALUES ('17', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('17', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('18', '2', '0', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('18', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('18', '1', '0', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('18', '4', '3', '刘禅');
INSERT INTO `wzry_user_hero` VALUES ('18', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('18', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('19', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('19', '64', '5', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('19', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('19', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('19', '54', '1', '关羽');
INSERT INTO `wzry_user_hero` VALUES ('20', '2', '0', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('20', '61', '6', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('20', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('20', '1', '0', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('20', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('20', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('21', '58', '0', '李白');
INSERT INTO `wzry_user_hero` VALUES ('21', '62', '1', '赵云');
INSERT INTO `wzry_user_hero` VALUES ('21', '61', '2', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('21', '64', '1', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('21', '5', '4', '鲁班七号');
INSERT INTO `wzry_user_hero` VALUES ('21', '4', '6', '刘禅');
INSERT INTO `wzry_user_hero` VALUES ('21', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('21', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('22', '61', '3', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('22', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('22', '12', '2', '姜子牙');
INSERT INTO `wzry_user_hero` VALUES ('22', '32', '17', '虞姬');
INSERT INTO `wzry_user_hero` VALUES ('22', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('22', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('23', '2', '0', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('23', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('23', '64', '1', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('23', '41', '5', '马可波罗');
INSERT INTO `wzry_user_hero` VALUES ('23', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('23', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('24', '2', '1', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('24', '61', '2', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('24', '64', '2', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('24', '1', '1', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('24', '27', '1', '百里守约');
INSERT INTO `wzry_user_hero` VALUES ('24', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('24', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('25', '61', '1', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('25', '64', '1', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('25', '8', '0', '孙膑');
INSERT INTO `wzry_user_hero` VALUES ('25', '56', '0', '成吉思汗');
INSERT INTO `wzry_user_hero` VALUES ('25', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('25', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('26', '71', '0', '娜可露露');
INSERT INTO `wzry_user_hero` VALUES ('26', '2', '16', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('26', '23', '24', '张良');
INSERT INTO `wzry_user_hero` VALUES ('26', '43', '1', '高渐离');
INSERT INTO `wzry_user_hero` VALUES ('26', '61', '8', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('26', '64', '4', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('26', '1', '0', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('26', '3', '5', '后羿');
INSERT INTO `wzry_user_hero` VALUES ('26', '46', '44', '芈月');
INSERT INTO `wzry_user_hero` VALUES ('26', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('26', '68', '3', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('27', '2', '2', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('27', '23', '2', '张良');
INSERT INTO `wzry_user_hero` VALUES ('27', '61', '4', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('27', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('27', '1', '0', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('27', '8', '0', '孙膑');
INSERT INTO `wzry_user_hero` VALUES ('27', '17', '39', '李元芳');
INSERT INTO `wzry_user_hero` VALUES ('27', '13', '0', '廉颇');
INSERT INTO `wzry_user_hero` VALUES ('27', '67', '1', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('27', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('28', '61', '1', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('28', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('28', '29', '2', '苏烈');
INSERT INTO `wzry_user_hero` VALUES ('28', '67', '1', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('28', '68', '6', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('29', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('29', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('29', '26', '0', '大乔');
INSERT INTO `wzry_user_hero` VALUES ('29', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('29', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('30', '61', '3', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('30', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('30', '18', '0', '张飞');
INSERT INTO `wzry_user_hero` VALUES ('30', '67', '1', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('30', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('31', '62', '1', '赵云');
INSERT INTO `wzry_user_hero` VALUES ('31', '71', '3', '娜可露露');
INSERT INTO `wzry_user_hero` VALUES ('31', '61', '3', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('31', '64', '3', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('31', '20', '15', '刘邦');
INSERT INTO `wzry_user_hero` VALUES ('31', '4', '1', '刘禅');
INSERT INTO `wzry_user_hero` VALUES ('31', '9', '0', '钟无艳');
INSERT INTO `wzry_user_hero` VALUES ('31', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('31', '68', '11', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('31', '6', '0', '老夫子');
INSERT INTO `wzry_user_hero` VALUES ('31', '47', '3', '程咬金');
INSERT INTO `wzry_user_hero` VALUES ('32', '61', '5', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('32', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('32', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('32', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('32', '50', '0', '哪吒');
INSERT INTO `wzry_user_hero` VALUES ('33', '21', '5', '兰陵王');
INSERT INTO `wzry_user_hero` VALUES ('33', '2', '0', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('33', '61', '1', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('33', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('33', '1', '0', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('33', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('33', '68', '2', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('34', '23', '0', '张良');
INSERT INTO `wzry_user_hero` VALUES ('34', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('34', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('34', '38', '5', '夏侯惇');
INSERT INTO `wzry_user_hero` VALUES ('34', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('34', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('34', '39', '0', '典韦');
INSERT INTO `wzry_user_hero` VALUES ('35', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('35', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('35', '35', '0', '太乙真人');
INSERT INTO `wzry_user_hero` VALUES ('35', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('35', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('36', '2', '0', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('36', '1', '8', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('36', '12', '0', '姜子牙');
INSERT INTO `wzry_user_hero` VALUES ('36', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('36', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('37', '2', '0', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('37', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('37', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('37', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('37', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('38', '59', '0', '孙悟空');
INSERT INTO `wzry_user_hero` VALUES ('38', '61', '3', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('38', '64', '1', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('38', '8', '0', '孙膑');
INSERT INTO `wzry_user_hero` VALUES ('38', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('38', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('38', '39', '0', '典韦');
INSERT INTO `wzry_user_hero` VALUES ('39', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('39', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('39', '33', '0', '鬼谷子');
INSERT INTO `wzry_user_hero` VALUES ('39', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('39', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('40', '31', '0', '干将莫邪');
INSERT INTO `wzry_user_hero` VALUES ('40', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('40', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('40', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('40', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('41', '2', '3', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('41', '61', '20', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('41', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('41', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('41', '68', '3', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('41', '39', '0', '典韦');
INSERT INTO `wzry_user_hero` VALUES ('41', '49', '15', '雅典娜');
INSERT INTO `wzry_user_hero` VALUES ('42', '2', '1', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('42', '55', '0', '诸葛亮');
INSERT INTO `wzry_user_hero` VALUES ('42', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('42', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('42', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('42', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('43', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('43', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('43', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('43', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('44', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('44', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('44', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('44', '68', '1', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('44', '57', '0', '宫本武藏');
INSERT INTO `wzry_user_hero` VALUES ('45', '66', '0', '橘右京');
INSERT INTO `wzry_user_hero` VALUES ('45', '61', '12', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('45', '64', '4', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('45', '1', '1', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('45', '3', '31', '后羿');
INSERT INTO `wzry_user_hero` VALUES ('45', '5', '2', '鲁班七号');
INSERT INTO `wzry_user_hero` VALUES ('45', '11', '3', '孙尚香');
INSERT INTO `wzry_user_hero` VALUES ('45', '14', '0', '狄仁杰');
INSERT INTO `wzry_user_hero` VALUES ('45', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('45', '68', '1', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('46', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('46', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('46', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('46', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('46', '37', '0', '曹操');
INSERT INTO `wzry_user_hero` VALUES ('47', '62', '1', '赵云');
INSERT INTO `wzry_user_hero` VALUES ('47', '70', '1', '不知火舞');
INSERT INTO `wzry_user_hero` VALUES ('47', '2', '6', '甄姬');
INSERT INTO `wzry_user_hero` VALUES ('47', '10', '1', '小乔');
INSERT INTO `wzry_user_hero` VALUES ('47', '23', '73', '张良');
INSERT INTO `wzry_user_hero` VALUES ('47', '45', '29', '周瑜');
INSERT INTO `wzry_user_hero` VALUES ('47', '61', '5', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('47', '64', '3', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('47', '1', '2', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('47', '8', '4', '孙膑');
INSERT INTO `wzry_user_hero` VALUES ('47', '12', '1', '姜子牙');
INSERT INTO `wzry_user_hero` VALUES ('47', '3', '2', '后羿');
INSERT INTO `wzry_user_hero` VALUES ('47', '67', '2', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('47', '68', '1', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('47', '40', '0', '达摩');
INSERT INTO `wzry_user_hero` VALUES ('48', '62', '5', '赵云');
INSERT INTO `wzry_user_hero` VALUES ('48', '61', '1', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('48', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('48', '53', '0', '吕布');
INSERT INTO `wzry_user_hero` VALUES ('48', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('48', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('49', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('49', '64', '0', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('49', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('49', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('50', '61', '0', '妲己');
INSERT INTO `wzry_user_hero` VALUES ('50', '64', '1', '安琪拉');
INSERT INTO `wzry_user_hero` VALUES ('50', '67', '0', '项羽');
INSERT INTO `wzry_user_hero` VALUES ('50', '68', '0', '亚瑟');
INSERT INTO `wzry_user_hero` VALUES ('51', '1', '1', '庄周');
INSERT INTO `wzry_user_hero` VALUES ('51', '24', null, '铠');
INSERT INTO `wzry_user_hero` VALUES ('51', '67', null, '项羽');
INSERT INTO `wzry_user_hero` VALUES ('51', '68', null, '亚瑟');

-- ----------------------------
-- View structure for mhview
-- ----------------------------
DROP VIEW IF EXISTS `mhview`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mhview` AS select `mh`.`user_id` AS `user_id`,`uv`.`type` AS `type`,`uv`.`account` AS `account`,`uv`.`area_no` AS `area_no`,`uv`.`name` AS `name`,`mh`.`hero_id` AS `hero_id`,`h`.`hero_name` AS `hero_name` from ((`wzry_main_hero` `mh` left join `userview` `uv` on((`mh`.`user_id` = `uv`.`user_id`))) left join `wzry_hero` `h` on((`mh`.`hero_id` = `h`.`hero_id`))) ;

-- ----------------------------
-- View structure for uhview
-- ----------------------------
DROP VIEW IF EXISTS `uhview`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `uhview` AS select `uh`.`user_id` AS `user_id`,`uv`.`type` AS `type`,`uv`.`account` AS `account`,`uv`.`area_no` AS `area_no`,`uv`.`name` AS `name`,`uv`.`level` AS `level`,`uv`.`money` AS `money`,`uv`.`diamond` AS `diamond`,`uh`.`hero_id` AS `hero_id`,`h`.`hero_name` AS `hero_name`,`uh`.`cc` AS `cc` from ((`wzry_user_hero` `uh` left join `userview` `uv` on((`uh`.`user_id` = `uv`.`user_id`))) left join `wzry_hero` `h` on((`uh`.`hero_id` = `h`.`hero_id`))) ;

-- ----------------------------
-- View structure for userview
-- ----------------------------
DROP VIEW IF EXISTS `userview`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `userview` AS select `a`.`account_id` AS `account_id`,`a`.`type` AS `type`,`a`.`account` AS `account`,`aa`.`area_id` AS `area_id`,`aa`.`area_no` AS `area_no`,`u`.`user_id` AS `user_id`,`u`.`name` AS `name`,`u`.`level` AS `level`,`u`.`money` AS `money`,`u`.`diamond` AS `diamond`,`u`.`last_time` AS `last_time`,`u`.`mingwen` AS `mingwen`,`u`.`changshu` AS `changshu` from ((`wzry_user` `u` left join `wzry_account` `a` on((`u`.`account_id` = `a`.`account_id`))) left join `wzry_area` `aa` on((`u`.`area_id` = `aa`.`area_id`))) ;
