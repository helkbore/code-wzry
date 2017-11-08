/*
Navicat MySQL Data Transfer

Source Server         : localhost_phpstudy
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : wzry

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-08-27 01:53:30
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
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_account
-- ----------------------------
INSERT INTO `wzry_account` VALUES ('31', '179623646', '1');
INSERT INTO `wzry_account` VALUES ('27', '499811380', '1');
INSERT INTO `wzry_account` VALUES ('28', '515176756', '1');
INSERT INTO `wzry_account` VALUES ('29', '770087554', '1');
INSERT INTO `wzry_account` VALUES ('30', '18740299600', '1');
INSERT INTO `wzry_account` VALUES ('32', '15134162861', '1');
INSERT INTO `wzry_account` VALUES ('33', '515176756', '2');
INSERT INTO `wzry_account` VALUES ('34', '499811380', '2');
INSERT INTO `wzry_account` VALUES ('35', '394020057', '2');
INSERT INTO `wzry_account` VALUES ('36', '770087554', '2');
INSERT INTO `wzry_account` VALUES ('37', '499511530', '2');
INSERT INTO `wzry_account` VALUES ('38', '877480433', '2');

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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_area
-- ----------------------------
INSERT INTO `wzry_area` VALUES ('9', '22', '--', '1');
INSERT INTO `wzry_area` VALUES ('10', '112', '--', '1');
INSERT INTO `wzry_area` VALUES ('11', '117', '', '1');
INSERT INTO `wzry_area` VALUES ('12', '19', '', '1');
INSERT INTO `wzry_area` VALUES ('13', '109', '', '1');
INSERT INTO `wzry_area` VALUES ('14', '16', '', '1');
INSERT INTO `wzry_area` VALUES ('15', '124', '', '1');
INSERT INTO `wzry_area` VALUES ('16', '197', '', '2');
INSERT INTO `wzry_area` VALUES ('17', '86', '', '2');
INSERT INTO `wzry_area` VALUES ('18', '87', '', '2');
INSERT INTO `wzry_area` VALUES ('19', '59', '', '2');
INSERT INTO `wzry_area` VALUES ('20', '62', '', '2');
INSERT INTO `wzry_area` VALUES ('21', '145', '', '2');
INSERT INTO `wzry_area` VALUES ('22', '236', '', '2');

-- ----------------------------
-- Table structure for wzry_hero
-- ----------------------------
DROP TABLE IF EXISTS `wzry_hero`;
CREATE TABLE `wzry_hero` (
  `hero_id` int(11) NOT NULL AUTO_INCREMENT,
  `hero_name` varchar(255) NOT NULL,
  `hero_type` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  PRIMARY KEY (`hero_id`)
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_hero
-- ----------------------------
INSERT INTO `wzry_hero` VALUES ('54', '庄周', 't', '2888');
INSERT INTO `wzry_hero` VALUES ('55', '甄姬', 'fs', '2888');
INSERT INTO `wzry_hero` VALUES ('56', '后羿', 'lr', '2888');
INSERT INTO `wzry_hero` VALUES ('57', '刘禅', 't', '2888');
INSERT INTO `wzry_hero` VALUES ('58', '鲁班七号', 'lr', '2888');
INSERT INTO `wzry_hero` VALUES ('59', '老夫子', 'zs', '5888');
INSERT INTO `wzry_hero` VALUES ('60', '扁鹊', 'fz', '5888');
INSERT INTO `wzry_hero` VALUES ('61', '孙膑', 'fz', '5888');
INSERT INTO `wzry_hero` VALUES ('62', '钟无艳', 't', '5888');
INSERT INTO `wzry_hero` VALUES ('63', '小乔', 'fs', '5888');
INSERT INTO `wzry_hero` VALUES ('64', '孙尚香', 'lr', '5888');
INSERT INTO `wzry_hero` VALUES ('65', '姜子牙', 'fs', '6888');
INSERT INTO `wzry_hero` VALUES ('66', '廉颇', 't', '8888');
INSERT INTO `wzry_hero` VALUES ('67', '狄仁杰', 'lr', '8888');
INSERT INTO `wzry_hero` VALUES ('68', '王昭君', 'fs', '8888');
INSERT INTO `wzry_hero` VALUES ('69', '墨子', 'fs', '8888');
INSERT INTO `wzry_hero` VALUES ('70', '刘备', 'lr', '13888');
INSERT INTO `wzry_hero` VALUES ('71', '张飞', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('72', '露娜', 'fs', '13888');
INSERT INTO `wzry_hero` VALUES ('73', '刘邦', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('74', '兰陵王', 'ck', '13888');
INSERT INTO `wzry_hero` VALUES ('75', '牛魔', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('76', '张良', 'fs', '13888');
INSERT INTO `wzry_hero` VALUES ('77', '黄忠', 'lr', '13888');
INSERT INTO `wzry_hero` VALUES ('78', '大乔', 'fz', '13888');
INSERT INTO `wzry_hero` VALUES ('79', '鬼谷子', 'fz', '13888');
INSERT INTO `wzry_hero` VALUES ('80', '百里守约', 'lr', '13888');
INSERT INTO `wzry_hero` VALUES ('81', '百里玄策', 'ck', '13888');
INSERT INTO `wzry_hero` VALUES ('82', '恺', 'zs', '13888');
INSERT INTO `wzry_hero` VALUES ('83', '干将莫邪', 'fs', '13888');
INSERT INTO `wzry_hero` VALUES ('84', '虞姬', 'lr', '13888');
INSERT INTO `wzry_hero` VALUES ('85', '李元芳', 'lr', '13888');
INSERT INTO `wzry_hero` VALUES ('86', '东皇太一', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('87', '太乙真人', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('88', '蔡文姬', 'fz', '13888');
INSERT INTO `wzry_hero` VALUES ('89', '曹操', 'zs', '13888');
INSERT INTO `wzry_hero` VALUES ('90', '夏侯惇', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('91', '典韦', 'zs', '13888');
INSERT INTO `wzry_hero` VALUES ('92', '达摩', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('93', '马可波罗', 'lr', '13888');
INSERT INTO `wzry_hero` VALUES ('94', '阿轲', 'ck', '13888');
INSERT INTO `wzry_hero` VALUES ('95', '高渐离', 'fs', '13888');
INSERT INTO `wzry_hero` VALUES ('96', '白起', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('97', '周瑜', 'fs', '13888');
INSERT INTO `wzry_hero` VALUES ('98', '芈月', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('99', '貂蝉', 'fs', '13888');
INSERT INTO `wzry_hero` VALUES ('100', '程咬金', 't', '13888');
INSERT INTO `wzry_hero` VALUES ('101', '哪吒', 'zs', '18888');
INSERT INTO `wzry_hero` VALUES ('102', '杨戬', 'zs', '18888');
INSERT INTO `wzry_hero` VALUES ('103', '成吉思汗', 'lr', '18888');
INSERT INTO `wzry_hero` VALUES ('104', '雅典娜', 't', '18888');
INSERT INTO `wzry_hero` VALUES ('105', '诸葛亮', 'fs', '18888');
INSERT INTO `wzry_hero` VALUES ('106', '吕布', 't', '18888');
INSERT INTO `wzry_hero` VALUES ('107', '关羽', 'zs', '18888');
INSERT INTO `wzry_hero` VALUES ('108', '钟馗', 'fs', '18888');
INSERT INTO `wzry_hero` VALUES ('109', '李白', 'ck', '18888');
INSERT INTO `wzry_hero` VALUES ('110', '孙悟空', 'ck', '18888');
INSERT INTO `wzry_hero` VALUES ('111', '宫本武藏', 'zs', '18888');
INSERT INTO `wzry_hero` VALUES ('112', '花木兰', 'zs', '18888');
INSERT INTO `wzry_hero` VALUES ('113', '橘右京', 'ck', null);
INSERT INTO `wzry_hero` VALUES ('114', '安其拉', 'fs', null);
INSERT INTO `wzry_hero` VALUES ('115', '妲己', 'fs', null);
INSERT INTO `wzry_hero` VALUES ('116', '赵云', 'zs', null);
INSERT INTO `wzry_hero` VALUES ('117', '嬴政', 'fs', null);
INSERT INTO `wzry_hero` VALUES ('118', '亚瑟', 't', null);
INSERT INTO `wzry_hero` VALUES ('119', '项羽', 't', null);
INSERT INTO `wzry_hero` VALUES ('120', '不知火舞', 'fs', null);
INSERT INTO `wzry_hero` VALUES ('121', '韩信', 'zs', null);
INSERT INTO `wzry_hero` VALUES ('122', '娜可露露', 'ck', null);

-- ----------------------------
-- Table structure for wzry_main_hero
-- ----------------------------
DROP TABLE IF EXISTS `wzry_main_hero`;
CREATE TABLE `wzry_main_hero` (
  `mh_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `hero_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`mh_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_main_hero
-- ----------------------------

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
  `hero` text,
  `money` int(11) DEFAULT NULL,
  `diamond` int(11) DEFAULT NULL,
  `last_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_user
-- ----------------------------
INSERT INTO `wzry_user` VALUES ('58', '28', '12', '鹿水凉', '12', '72, 114, 115, 118, 119, 91', '7333', '192', '1503764932');
INSERT INTO `wzry_user` VALUES ('59', '28', '13', 'malloc_c', '10', '54, 118, 119', '14161', '611', '1503765004');
INSERT INTO `wzry_user` VALUES ('60', '28', '14', '兰洇', '9', '55, 114, 115, 54, 70, 118, 119', '3565', '2309', '1503765095');
INSERT INTO `wzry_user` VALUES ('55', '28', '10', '筠徵', '13', '55, 63, 54, 118, 119', '3331', '223', '1503764637');
INSERT INTO `wzry_user` VALUES ('56', '28', '11', '筠徵', '12', '55, 115, 54, 98, 118, 119', '14703', '620', '1503764737');
INSERT INTO `wzry_user` VALUES ('61', '28', '15', 'knight_k', '6', '55, 54, 118, 119', '4690', '228', '1503765187');
INSERT INTO `wzry_user` VALUES ('62', '27', '14', 'whellote', '15', '113, 114, 115, 56, 58, 64, 67, 54, 118, 119', '3655', '1115', '1503765403');
INSERT INTO `wzry_user` VALUES ('63', '27', '9', '浩然阁主', '12', '114, 115, 118, 119, 111', '3574', '848', '1503765468');
INSERT INTO `wzry_user` VALUES ('64', '27', '12', '禹落然', '8', '114, 115, 118, 119, 89', '2791', '717', '1503765524');
INSERT INTO `wzry_user` VALUES ('68', '31', '14', '即炤', '6', '83, 114, 115, 118, 119', '552', '2048', '1503766033');
INSERT INTO `wzry_user` VALUES ('66', '31', '9', '无双的团扇', '11', '110, 114, 115, 61, 118, 119, 91', '5558', '452', '1503765774');
INSERT INTO `wzry_user` VALUES ('67', '31', '12', '茅蒐', '6', '114, 115, 79, 118, 119', '845', '1878', '1503765881');
INSERT INTO `wzry_user` VALUES ('69', '30', '9', '晓梦蝶影', '13', '55, 114, 115, 104, 118, 119, 91', '8825', '322', '1503766222');
INSERT INTO `wzry_user` VALUES ('70', '30', '14', '兰洇', '10', '55, 105, 114, 115, 118, 119', '613', '17', '1503766284');
INSERT INTO `wzry_user` VALUES ('71', '30', '12', '兰洇', '7', '114, 115, 118, 119', '11534', '573', '1503766326');
INSERT INTO `wzry_user` VALUES ('72', '29', '12', '戬毂', '23', '55, 63, 65, 76, 97, 114, 115, 120, 61, 56, 54, 92, 118, 119, 116', '11374', '404', '1503766538');
INSERT INTO `wzry_user` VALUES ('73', '29', '9', '瀹渝未', '10', '114, 115, 106, 118, 119, 116', '3121', '2112', '1503766620');
INSERT INTO `wzry_user` VALUES ('74', '29', '14', '桡介', '6', '114, 115, 118, 119', '15024', '1710', '1503766709');
INSERT INTO `wzry_user` VALUES ('75', '33', '16', '夏瀹', '17', '122, 114, 115, 57, 62, 73, 100, 118, 119, 59, 116', '4050', '143', '1503767948');
INSERT INTO `wzry_user` VALUES ('76', '33', '17', '膝横花间琴', '11', '74, 114, 115, 118, 119', '5659', '1513', '1503768040');
INSERT INTO `wzry_user` VALUES ('77', '33', '18', '单调的断音', '10', '114, 115, 90, 118, 119, 91', '3900', '1459', '1503768121');
INSERT INTO `wzry_user` VALUES ('78', '33', '19', '千意醉', '10', '114, 115, 118, 119, 101', '998', '927', '1503768177');
INSERT INTO `wzry_user` VALUES ('79', '33', '20', '临雪归', '8', '114, 115, 87, 118, 119', '2805', '2228', '1503768234');
INSERT INTO `wzry_user` VALUES ('80', '33', '21', '沙冰凉凉', '8', '55, 65, 54, 118, 119', '7703', '87', '1503768298');
INSERT INTO `wzry_user` VALUES ('83', '35', '19', '小宛', '12', '94, 114, 115, 118, 119', '1682', '304', '1503768513');
INSERT INTO `wzry_user` VALUES ('84', '35', '22', 'whellote', '10', '55, 115, 54, 118, 119', '8890', '1118', '1503768618');
INSERT INTO `wzry_user` VALUES ('85', '35', '16', '瀹尚晚', '10', '114, 115, 118, 119, 107', '2002', '397', '1503768704');
INSERT INTO `wzry_user` VALUES ('86', '35', '19', '弱拂', '10', '114, 115, 118, 119', '14497', '2628', '1503768769');
INSERT INTO `wzry_user` VALUES ('87', '35', '18', '古玉倾沉', '8', '114, 115, 96, 118, 119', '2043', '937', '1503768836');
INSERT INTO `wzry_user` VALUES ('88', '35', '17', '5', '5', '114, 115, 118, 119', '9557', '436', '1503768927');
INSERT INTO `wzry_user` VALUES ('89', '34', '16', '瀹小宛', '13', '109, 114, 115, 58, 118, 119, 116', '3703', '437', '1503769003');
INSERT INTO `wzry_user` VALUES ('90', '34', '19', '潇湘水云', '11', '65, 114, 115, 84, 118, 119', '4070', '378', '1503769074');
INSERT INTO `wzry_user` VALUES ('91', '34', '18', '花堪季', '10', '55, 114, 115, 93, 118, 119', '3566', '363', '1503769135');
INSERT INTO `wzry_user` VALUES ('92', '34', '17', '嵇眉', '9', '114, 115, 61, 103, 118, 119', '1121', '429', '1503769202');
INSERT INTO `wzry_user` VALUES ('93', '34', '20', '姬月篁', '7', '114, 115, 118, 119', '11545', '592', '1503769257');
INSERT INTO `wzry_user` VALUES ('94', '36', '18', '瀹柒棠', '21', '122, 55, 76, 95, 114, 115, 56, 54, 98, 118, 119', '2318', '1104', '1503769371');
INSERT INTO `wzry_user` VALUES ('95', '36', '16', '瀹柒棠', '15', '114, 115, 85, 66, 118, 119', '3382', '946', '1503769435');
INSERT INTO `wzry_user` VALUES ('96', '36', '20', '冽青颜', '8', '78, 114, 115, 118, 119', '2540', '346', '1503769504');
INSERT INTO `wzry_user` VALUES ('97', '36', '17', '惊羽楚九', '8', '114, 115, 71, 118, 119', '2887', '1006', '1503769586');
INSERT INTO `wzry_user` VALUES ('98', '36', '19', '天风环佩', '7', '114, 115, 118, 119', '14965', '629', '1503769631');
INSERT INTO `wzry_user` VALUES ('99', '38', '17', '幼熙', '22', '55, 65, 69, 97, 114, 115, 60, 61, 56, 58, 54, 98, 118, 119', '2892', '95', '1503769733');
INSERT INTO `wzry_user` VALUES ('100', '38', '16', '瀹幼熙', '13', '114, 115, 118, 119, 112', '3292', '160', '1503769783');
INSERT INTO `wzry_user` VALUES ('101', '38', '19', '渊献', '8', '114, 115, 118, 119', '15973', '468', '1503769831');
INSERT INTO `wzry_user` VALUES ('102', '38', '18', '睡不醒的幼熙', '8', '55, 114, 115, 75, 118, 119', '458', '393', '1503769883');
INSERT INTO `wzry_user` VALUES ('103', '38', '20', '茔界', '8', '114, 115, 118, 119', '16798', '676', '1503769939');

-- ----------------------------
-- Table structure for wzry_user_hero
-- ----------------------------
DROP TABLE IF EXISTS `wzry_user_hero`;
CREATE TABLE `wzry_user_hero` (
  `hu_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `hero_id` int(11) NOT NULL,
  PRIMARY KEY (`hu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=398 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wzry_user_hero
-- ----------------------------
INSERT INTO `wzry_user_hero` VALUES ('132', '58', '72');
INSERT INTO `wzry_user_hero` VALUES ('133', '58', '114');
INSERT INTO `wzry_user_hero` VALUES ('125', '55', '119');
INSERT INTO `wzry_user_hero` VALUES ('130', '56', '118');
INSERT INTO `wzry_user_hero` VALUES ('95', '52', '68');
INSERT INTO `wzry_user_hero` VALUES ('96', '52', '97');
INSERT INTO `wzry_user_hero` VALUES ('97', '52', '99');
INSERT INTO `wzry_user_hero` VALUES ('98', '52', '108');
INSERT INTO `wzry_user_hero` VALUES ('99', '52', '114');
INSERT INTO `wzry_user_hero` VALUES ('100', '52', '115');
INSERT INTO `wzry_user_hero` VALUES ('101', '52', '117');
INSERT INTO `wzry_user_hero` VALUES ('102', '52', '120');
INSERT INTO `wzry_user_hero` VALUES ('103', '52', '61');
INSERT INTO `wzry_user_hero` VALUES ('104', '52', '88');
INSERT INTO `wzry_user_hero` VALUES ('129', '56', '98');
INSERT INTO `wzry_user_hero` VALUES ('105', '52', '56');
INSERT INTO `wzry_user_hero` VALUES ('106', '52', '58');
INSERT INTO `wzry_user_hero` VALUES ('128', '56', '54');
INSERT INTO `wzry_user_hero` VALUES ('107', '52', '54');
INSERT INTO `wzry_user_hero` VALUES ('108', '52', '118');
INSERT INTO `wzry_user_hero` VALUES ('109', '52', '119');
INSERT INTO `wzry_user_hero` VALUES ('127', '56', '115');
INSERT INTO `wzry_user_hero` VALUES ('110', '52', '116');
INSERT INTO `wzry_user_hero` VALUES ('126', '56', '55');
INSERT INTO `wzry_user_hero` VALUES ('124', '55', '118');
INSERT INTO `wzry_user_hero` VALUES ('123', '55', '54');
INSERT INTO `wzry_user_hero` VALUES ('122', '55', '63');
INSERT INTO `wzry_user_hero` VALUES ('121', '55', '55');
INSERT INTO `wzry_user_hero` VALUES ('131', '56', '119');
INSERT INTO `wzry_user_hero` VALUES ('134', '58', '115');
INSERT INTO `wzry_user_hero` VALUES ('135', '58', '118');
INSERT INTO `wzry_user_hero` VALUES ('136', '58', '119');
INSERT INTO `wzry_user_hero` VALUES ('137', '58', '91');
INSERT INTO `wzry_user_hero` VALUES ('138', '59', '54');
INSERT INTO `wzry_user_hero` VALUES ('139', '59', '118');
INSERT INTO `wzry_user_hero` VALUES ('140', '59', '119');
INSERT INTO `wzry_user_hero` VALUES ('141', '60', '55');
INSERT INTO `wzry_user_hero` VALUES ('142', '60', '114');
INSERT INTO `wzry_user_hero` VALUES ('143', '60', '115');
INSERT INTO `wzry_user_hero` VALUES ('144', '60', '54');
INSERT INTO `wzry_user_hero` VALUES ('145', '60', '70');
INSERT INTO `wzry_user_hero` VALUES ('146', '60', '118');
INSERT INTO `wzry_user_hero` VALUES ('147', '60', '119');
INSERT INTO `wzry_user_hero` VALUES ('148', '61', '55');
INSERT INTO `wzry_user_hero` VALUES ('149', '61', '54');
INSERT INTO `wzry_user_hero` VALUES ('150', '61', '118');
INSERT INTO `wzry_user_hero` VALUES ('151', '61', '119');
INSERT INTO `wzry_user_hero` VALUES ('152', '62', '113');
INSERT INTO `wzry_user_hero` VALUES ('153', '62', '114');
INSERT INTO `wzry_user_hero` VALUES ('154', '62', '115');
INSERT INTO `wzry_user_hero` VALUES ('155', '62', '56');
INSERT INTO `wzry_user_hero` VALUES ('156', '62', '58');
INSERT INTO `wzry_user_hero` VALUES ('157', '62', '64');
INSERT INTO `wzry_user_hero` VALUES ('158', '62', '67');
INSERT INTO `wzry_user_hero` VALUES ('159', '62', '54');
INSERT INTO `wzry_user_hero` VALUES ('160', '62', '118');
INSERT INTO `wzry_user_hero` VALUES ('161', '62', '119');
INSERT INTO `wzry_user_hero` VALUES ('162', '63', '114');
INSERT INTO `wzry_user_hero` VALUES ('163', '63', '115');
INSERT INTO `wzry_user_hero` VALUES ('164', '63', '118');
INSERT INTO `wzry_user_hero` VALUES ('165', '63', '119');
INSERT INTO `wzry_user_hero` VALUES ('166', '63', '111');
INSERT INTO `wzry_user_hero` VALUES ('167', '64', '114');
INSERT INTO `wzry_user_hero` VALUES ('168', '64', '115');
INSERT INTO `wzry_user_hero` VALUES ('169', '64', '118');
INSERT INTO `wzry_user_hero` VALUES ('170', '64', '119');
INSERT INTO `wzry_user_hero` VALUES ('171', '64', '89');
INSERT INTO `wzry_user_hero` VALUES ('191', '68', '118');
INSERT INTO `wzry_user_hero` VALUES ('190', '68', '115');
INSERT INTO `wzry_user_hero` VALUES ('189', '68', '114');
INSERT INTO `wzry_user_hero` VALUES ('188', '68', '83');
INSERT INTO `wzry_user_hero` VALUES ('176', '66', '110');
INSERT INTO `wzry_user_hero` VALUES ('177', '66', '114');
INSERT INTO `wzry_user_hero` VALUES ('178', '66', '115');
INSERT INTO `wzry_user_hero` VALUES ('179', '66', '61');
INSERT INTO `wzry_user_hero` VALUES ('180', '66', '118');
INSERT INTO `wzry_user_hero` VALUES ('181', '66', '119');
INSERT INTO `wzry_user_hero` VALUES ('182', '66', '91');
INSERT INTO `wzry_user_hero` VALUES ('183', '67', '114');
INSERT INTO `wzry_user_hero` VALUES ('184', '67', '115');
INSERT INTO `wzry_user_hero` VALUES ('185', '67', '79');
INSERT INTO `wzry_user_hero` VALUES ('186', '67', '118');
INSERT INTO `wzry_user_hero` VALUES ('187', '67', '119');
INSERT INTO `wzry_user_hero` VALUES ('192', '68', '119');
INSERT INTO `wzry_user_hero` VALUES ('193', '69', '55');
INSERT INTO `wzry_user_hero` VALUES ('194', '69', '114');
INSERT INTO `wzry_user_hero` VALUES ('195', '69', '115');
INSERT INTO `wzry_user_hero` VALUES ('196', '69', '104');
INSERT INTO `wzry_user_hero` VALUES ('197', '69', '118');
INSERT INTO `wzry_user_hero` VALUES ('198', '69', '119');
INSERT INTO `wzry_user_hero` VALUES ('199', '69', '91');
INSERT INTO `wzry_user_hero` VALUES ('200', '70', '55');
INSERT INTO `wzry_user_hero` VALUES ('201', '70', '105');
INSERT INTO `wzry_user_hero` VALUES ('202', '70', '114');
INSERT INTO `wzry_user_hero` VALUES ('203', '70', '115');
INSERT INTO `wzry_user_hero` VALUES ('204', '70', '118');
INSERT INTO `wzry_user_hero` VALUES ('205', '70', '119');
INSERT INTO `wzry_user_hero` VALUES ('206', '71', '114');
INSERT INTO `wzry_user_hero` VALUES ('207', '71', '115');
INSERT INTO `wzry_user_hero` VALUES ('208', '71', '118');
INSERT INTO `wzry_user_hero` VALUES ('209', '71', '119');
INSERT INTO `wzry_user_hero` VALUES ('210', '72', '55');
INSERT INTO `wzry_user_hero` VALUES ('211', '72', '63');
INSERT INTO `wzry_user_hero` VALUES ('212', '72', '65');
INSERT INTO `wzry_user_hero` VALUES ('213', '72', '76');
INSERT INTO `wzry_user_hero` VALUES ('214', '72', '97');
INSERT INTO `wzry_user_hero` VALUES ('215', '72', '114');
INSERT INTO `wzry_user_hero` VALUES ('216', '72', '115');
INSERT INTO `wzry_user_hero` VALUES ('217', '72', '120');
INSERT INTO `wzry_user_hero` VALUES ('218', '72', '61');
INSERT INTO `wzry_user_hero` VALUES ('219', '72', '56');
INSERT INTO `wzry_user_hero` VALUES ('220', '72', '54');
INSERT INTO `wzry_user_hero` VALUES ('221', '72', '92');
INSERT INTO `wzry_user_hero` VALUES ('222', '72', '118');
INSERT INTO `wzry_user_hero` VALUES ('223', '72', '119');
INSERT INTO `wzry_user_hero` VALUES ('224', '72', '116');
INSERT INTO `wzry_user_hero` VALUES ('225', '73', '114');
INSERT INTO `wzry_user_hero` VALUES ('226', '73', '115');
INSERT INTO `wzry_user_hero` VALUES ('227', '73', '106');
INSERT INTO `wzry_user_hero` VALUES ('228', '73', '118');
INSERT INTO `wzry_user_hero` VALUES ('229', '73', '119');
INSERT INTO `wzry_user_hero` VALUES ('230', '73', '116');
INSERT INTO `wzry_user_hero` VALUES ('231', '74', '114');
INSERT INTO `wzry_user_hero` VALUES ('232', '74', '115');
INSERT INTO `wzry_user_hero` VALUES ('233', '74', '118');
INSERT INTO `wzry_user_hero` VALUES ('234', '74', '119');
INSERT INTO `wzry_user_hero` VALUES ('235', '75', '122');
INSERT INTO `wzry_user_hero` VALUES ('236', '75', '114');
INSERT INTO `wzry_user_hero` VALUES ('237', '75', '115');
INSERT INTO `wzry_user_hero` VALUES ('238', '75', '57');
INSERT INTO `wzry_user_hero` VALUES ('239', '75', '62');
INSERT INTO `wzry_user_hero` VALUES ('240', '75', '73');
INSERT INTO `wzry_user_hero` VALUES ('241', '75', '100');
INSERT INTO `wzry_user_hero` VALUES ('242', '75', '118');
INSERT INTO `wzry_user_hero` VALUES ('243', '75', '119');
INSERT INTO `wzry_user_hero` VALUES ('244', '75', '59');
INSERT INTO `wzry_user_hero` VALUES ('245', '75', '116');
INSERT INTO `wzry_user_hero` VALUES ('246', '76', '74');
INSERT INTO `wzry_user_hero` VALUES ('247', '76', '114');
INSERT INTO `wzry_user_hero` VALUES ('248', '76', '115');
INSERT INTO `wzry_user_hero` VALUES ('249', '76', '118');
INSERT INTO `wzry_user_hero` VALUES ('250', '76', '119');
INSERT INTO `wzry_user_hero` VALUES ('251', '77', '114');
INSERT INTO `wzry_user_hero` VALUES ('252', '77', '115');
INSERT INTO `wzry_user_hero` VALUES ('253', '77', '90');
INSERT INTO `wzry_user_hero` VALUES ('254', '77', '118');
INSERT INTO `wzry_user_hero` VALUES ('255', '77', '119');
INSERT INTO `wzry_user_hero` VALUES ('256', '77', '91');
INSERT INTO `wzry_user_hero` VALUES ('257', '78', '114');
INSERT INTO `wzry_user_hero` VALUES ('258', '78', '115');
INSERT INTO `wzry_user_hero` VALUES ('259', '78', '118');
INSERT INTO `wzry_user_hero` VALUES ('260', '78', '119');
INSERT INTO `wzry_user_hero` VALUES ('261', '78', '101');
INSERT INTO `wzry_user_hero` VALUES ('262', '79', '114');
INSERT INTO `wzry_user_hero` VALUES ('263', '79', '115');
INSERT INTO `wzry_user_hero` VALUES ('264', '79', '87');
INSERT INTO `wzry_user_hero` VALUES ('265', '79', '118');
INSERT INTO `wzry_user_hero` VALUES ('266', '79', '119');
INSERT INTO `wzry_user_hero` VALUES ('267', '80', '55');
INSERT INTO `wzry_user_hero` VALUES ('268', '80', '65');
INSERT INTO `wzry_user_hero` VALUES ('269', '80', '54');
INSERT INTO `wzry_user_hero` VALUES ('270', '80', '118');
INSERT INTO `wzry_user_hero` VALUES ('271', '80', '119');
INSERT INTO `wzry_user_hero` VALUES ('277', '83', '94');
INSERT INTO `wzry_user_hero` VALUES ('278', '83', '114');
INSERT INTO `wzry_user_hero` VALUES ('279', '83', '115');
INSERT INTO `wzry_user_hero` VALUES ('280', '83', '118');
INSERT INTO `wzry_user_hero` VALUES ('281', '83', '119');
INSERT INTO `wzry_user_hero` VALUES ('282', '84', '55');
INSERT INTO `wzry_user_hero` VALUES ('283', '84', '115');
INSERT INTO `wzry_user_hero` VALUES ('284', '84', '54');
INSERT INTO `wzry_user_hero` VALUES ('285', '84', '118');
INSERT INTO `wzry_user_hero` VALUES ('286', '84', '119');
INSERT INTO `wzry_user_hero` VALUES ('287', '85', '114');
INSERT INTO `wzry_user_hero` VALUES ('288', '85', '115');
INSERT INTO `wzry_user_hero` VALUES ('289', '85', '118');
INSERT INTO `wzry_user_hero` VALUES ('290', '85', '119');
INSERT INTO `wzry_user_hero` VALUES ('291', '85', '107');
INSERT INTO `wzry_user_hero` VALUES ('292', '86', '114');
INSERT INTO `wzry_user_hero` VALUES ('293', '86', '115');
INSERT INTO `wzry_user_hero` VALUES ('294', '86', '118');
INSERT INTO `wzry_user_hero` VALUES ('295', '86', '119');
INSERT INTO `wzry_user_hero` VALUES ('296', '87', '114');
INSERT INTO `wzry_user_hero` VALUES ('297', '87', '115');
INSERT INTO `wzry_user_hero` VALUES ('298', '87', '96');
INSERT INTO `wzry_user_hero` VALUES ('299', '87', '118');
INSERT INTO `wzry_user_hero` VALUES ('300', '87', '119');
INSERT INTO `wzry_user_hero` VALUES ('301', '88', '114');
INSERT INTO `wzry_user_hero` VALUES ('302', '88', '115');
INSERT INTO `wzry_user_hero` VALUES ('303', '88', '118');
INSERT INTO `wzry_user_hero` VALUES ('304', '88', '119');
INSERT INTO `wzry_user_hero` VALUES ('305', '89', '109');
INSERT INTO `wzry_user_hero` VALUES ('306', '89', '114');
INSERT INTO `wzry_user_hero` VALUES ('307', '89', '115');
INSERT INTO `wzry_user_hero` VALUES ('308', '89', '58');
INSERT INTO `wzry_user_hero` VALUES ('309', '89', '118');
INSERT INTO `wzry_user_hero` VALUES ('310', '89', '119');
INSERT INTO `wzry_user_hero` VALUES ('311', '89', '116');
INSERT INTO `wzry_user_hero` VALUES ('312', '90', '65');
INSERT INTO `wzry_user_hero` VALUES ('313', '90', '114');
INSERT INTO `wzry_user_hero` VALUES ('314', '90', '115');
INSERT INTO `wzry_user_hero` VALUES ('315', '90', '84');
INSERT INTO `wzry_user_hero` VALUES ('316', '90', '118');
INSERT INTO `wzry_user_hero` VALUES ('317', '90', '119');
INSERT INTO `wzry_user_hero` VALUES ('318', '91', '55');
INSERT INTO `wzry_user_hero` VALUES ('319', '91', '114');
INSERT INTO `wzry_user_hero` VALUES ('320', '91', '115');
INSERT INTO `wzry_user_hero` VALUES ('321', '91', '93');
INSERT INTO `wzry_user_hero` VALUES ('322', '91', '118');
INSERT INTO `wzry_user_hero` VALUES ('323', '91', '119');
INSERT INTO `wzry_user_hero` VALUES ('324', '92', '114');
INSERT INTO `wzry_user_hero` VALUES ('325', '92', '115');
INSERT INTO `wzry_user_hero` VALUES ('326', '92', '61');
INSERT INTO `wzry_user_hero` VALUES ('327', '92', '103');
INSERT INTO `wzry_user_hero` VALUES ('328', '92', '118');
INSERT INTO `wzry_user_hero` VALUES ('329', '92', '119');
INSERT INTO `wzry_user_hero` VALUES ('330', '93', '114');
INSERT INTO `wzry_user_hero` VALUES ('331', '93', '115');
INSERT INTO `wzry_user_hero` VALUES ('332', '93', '118');
INSERT INTO `wzry_user_hero` VALUES ('333', '93', '119');
INSERT INTO `wzry_user_hero` VALUES ('334', '94', '122');
INSERT INTO `wzry_user_hero` VALUES ('335', '94', '55');
INSERT INTO `wzry_user_hero` VALUES ('336', '94', '76');
INSERT INTO `wzry_user_hero` VALUES ('337', '94', '95');
INSERT INTO `wzry_user_hero` VALUES ('338', '94', '114');
INSERT INTO `wzry_user_hero` VALUES ('339', '94', '115');
INSERT INTO `wzry_user_hero` VALUES ('340', '94', '56');
INSERT INTO `wzry_user_hero` VALUES ('341', '94', '54');
INSERT INTO `wzry_user_hero` VALUES ('342', '94', '98');
INSERT INTO `wzry_user_hero` VALUES ('343', '94', '118');
INSERT INTO `wzry_user_hero` VALUES ('344', '94', '119');
INSERT INTO `wzry_user_hero` VALUES ('345', '95', '114');
INSERT INTO `wzry_user_hero` VALUES ('346', '95', '115');
INSERT INTO `wzry_user_hero` VALUES ('347', '95', '85');
INSERT INTO `wzry_user_hero` VALUES ('348', '95', '66');
INSERT INTO `wzry_user_hero` VALUES ('349', '95', '118');
INSERT INTO `wzry_user_hero` VALUES ('350', '95', '119');
INSERT INTO `wzry_user_hero` VALUES ('351', '96', '78');
INSERT INTO `wzry_user_hero` VALUES ('352', '96', '114');
INSERT INTO `wzry_user_hero` VALUES ('353', '96', '115');
INSERT INTO `wzry_user_hero` VALUES ('354', '96', '118');
INSERT INTO `wzry_user_hero` VALUES ('355', '96', '119');
INSERT INTO `wzry_user_hero` VALUES ('356', '97', '114');
INSERT INTO `wzry_user_hero` VALUES ('357', '97', '115');
INSERT INTO `wzry_user_hero` VALUES ('358', '97', '71');
INSERT INTO `wzry_user_hero` VALUES ('359', '97', '118');
INSERT INTO `wzry_user_hero` VALUES ('360', '97', '119');
INSERT INTO `wzry_user_hero` VALUES ('361', '98', '114');
INSERT INTO `wzry_user_hero` VALUES ('362', '98', '115');
INSERT INTO `wzry_user_hero` VALUES ('363', '98', '118');
INSERT INTO `wzry_user_hero` VALUES ('364', '98', '119');
INSERT INTO `wzry_user_hero` VALUES ('365', '99', '55');
INSERT INTO `wzry_user_hero` VALUES ('366', '99', '65');
INSERT INTO `wzry_user_hero` VALUES ('367', '99', '69');
INSERT INTO `wzry_user_hero` VALUES ('368', '99', '97');
INSERT INTO `wzry_user_hero` VALUES ('369', '99', '114');
INSERT INTO `wzry_user_hero` VALUES ('370', '99', '115');
INSERT INTO `wzry_user_hero` VALUES ('371', '99', '60');
INSERT INTO `wzry_user_hero` VALUES ('372', '99', '61');
INSERT INTO `wzry_user_hero` VALUES ('373', '99', '56');
INSERT INTO `wzry_user_hero` VALUES ('374', '99', '58');
INSERT INTO `wzry_user_hero` VALUES ('375', '99', '54');
INSERT INTO `wzry_user_hero` VALUES ('376', '99', '98');
INSERT INTO `wzry_user_hero` VALUES ('377', '99', '118');
INSERT INTO `wzry_user_hero` VALUES ('378', '99', '119');
INSERT INTO `wzry_user_hero` VALUES ('379', '100', '114');
INSERT INTO `wzry_user_hero` VALUES ('380', '100', '115');
INSERT INTO `wzry_user_hero` VALUES ('381', '100', '118');
INSERT INTO `wzry_user_hero` VALUES ('382', '100', '119');
INSERT INTO `wzry_user_hero` VALUES ('383', '100', '112');
INSERT INTO `wzry_user_hero` VALUES ('384', '101', '114');
INSERT INTO `wzry_user_hero` VALUES ('385', '101', '115');
INSERT INTO `wzry_user_hero` VALUES ('386', '101', '118');
INSERT INTO `wzry_user_hero` VALUES ('387', '101', '119');
INSERT INTO `wzry_user_hero` VALUES ('388', '102', '55');
INSERT INTO `wzry_user_hero` VALUES ('389', '102', '114');
INSERT INTO `wzry_user_hero` VALUES ('390', '102', '115');
INSERT INTO `wzry_user_hero` VALUES ('391', '102', '75');
INSERT INTO `wzry_user_hero` VALUES ('392', '102', '118');
INSERT INTO `wzry_user_hero` VALUES ('393', '102', '119');
INSERT INTO `wzry_user_hero` VALUES ('394', '103', '114');
INSERT INTO `wzry_user_hero` VALUES ('395', '103', '115');
INSERT INTO `wzry_user_hero` VALUES ('396', '103', '118');
INSERT INTO `wzry_user_hero` VALUES ('397', '103', '119');
