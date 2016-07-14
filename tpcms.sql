/*
Navicat MySQL Data Transfer

Source Server         : phpstudy
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : tpcms

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-07-14 10:14:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for configs
-- ----------------------------
DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `name` varchar(50) DEFAULT NULL COMMENT '字段名称',
  `code` varchar(20) DEFAULT NULL COMMENT '字段代码',
  `type` char(10) DEFAULT NULL COMMENT '字段类型',
  `content` text,
  `sort` int(11) DEFAULT '0' COMMENT '字段排序',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of configs
-- ----------------------------
INSERT INTO `configs` VALUES ('1', '商城名称', 'mallName', 'text', '要自在旅行', '1', '0', '0');
INSERT INTO `configs` VALUES ('2', '商城标题', 'mallTitle', 'text', '要自在旅行', '2', '0', '0');
INSERT INTO `configs` VALUES ('3', '商城描述', 'mallDesc', 'text', '要自在旅行', '3', '0', '0');
INSERT INTO `configs` VALUES ('4', '商城关键字', 'mallKeywords', 'text', '要自在旅行', '4', '0', '0');
INSERT INTO `configs` VALUES ('5', '商城Logo', 'mallLogo', 'upload', '', '5', '0', '0');
INSERT INTO `configs` VALUES ('6', '底部设置', 'mallFooter', 'textarea', '<p>版权所有  昆明春秋国际旅行社有限公司</p>\n  <p>滇ICP证 16097834</p>\n  <p>2015 All copyrights by Kunming spring tour CO，ITd</p>', '6', '0', '0');
INSERT INTO `configs` VALUES ('7', '联系电话', 'phoneNo', 'text', '4008627098', '7', '0', '0');
INSERT INTO `configs` VALUES ('8', 'QQ', 'qqNo', 'text', '772947665', '8', '0', '0');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT '角色名称',
  `status` tinyint(5) NOT NULL DEFAULT '0' COMMENT '是否启用',
  `remark` varchar(255) DEFAULT '' COMMENT '简单说明',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COMMENT='角色表';

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('14', '系统管理员', '1', '', '1468311256', '1468462420');

-- ----------------------------
-- Table structure for role_rule
-- ----------------------------
DROP TABLE IF EXISTS `role_rule`;
CREATE TABLE `role_rule` (
  `role_id` int(11) NOT NULL,
  `rule_id` int(11) NOT NULL,
  UNIQUE KEY `fu` (`role_id`,`rule_id`),
  KEY `role_rule_rule_id` (`rule_id`),
  CONSTRAINT `role_rule_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`),
  CONSTRAINT `role_rule_rule_id` FOREIGN KEY (`rule_id`) REFERENCES `rule` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='角色权限关联表';

-- ----------------------------
-- Records of role_rule
-- ----------------------------
INSERT INTO `role_rule` VALUES ('14', '1');
INSERT INTO `role_rule` VALUES ('14', '2');
INSERT INTO `role_rule` VALUES ('14', '3');
INSERT INTO `role_rule` VALUES ('14', '4');
INSERT INTO `role_rule` VALUES ('14', '5');
INSERT INTO `role_rule` VALUES ('14', '6');
INSERT INTO `role_rule` VALUES ('14', '7');
INSERT INTO `role_rule` VALUES ('14', '8');
INSERT INTO `role_rule` VALUES ('14', '9');
INSERT INTO `role_rule` VALUES ('14', '10');
INSERT INTO `role_rule` VALUES ('14', '11');
INSERT INTO `role_rule` VALUES ('14', '12');
INSERT INTO `role_rule` VALUES ('14', '13');
INSERT INTO `role_rule` VALUES ('14', '14');
INSERT INTO `role_rule` VALUES ('14', '15');
INSERT INTO `role_rule` VALUES ('14', '16');
INSERT INTO `role_rule` VALUES ('14', '17');
INSERT INTO `role_rule` VALUES ('14', '18');
INSERT INTO `role_rule` VALUES ('14', '19');

-- ----------------------------
-- Table structure for rule
-- ----------------------------
DROP TABLE IF EXISTS `rule`;
CREATE TABLE `rule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父菜单',
  `name` varchar(100) DEFAULT NULL COMMENT 'url地址 c+a',
  `title` varchar(100) NOT NULL COMMENT '菜单名称',
  `icon` varchar(100) DEFAULT NULL COMMENT '图标',
  `islink` tinyint(5) NOT NULL DEFAULT '0' COMMENT '是否菜单',
  `sort` int(3) NOT NULL DEFAULT '255' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COMMENT='权限&菜单表';

-- ----------------------------
-- Records of rule
-- ----------------------------
INSERT INTO `rule` VALUES ('1', '0', 'admin/index/index', '控制面板', 'fa fa-home', '1', '0');
INSERT INTO `rule` VALUES ('2', '0', '', '权限管理', 'fa fa-sitemap', '1', '2');
INSERT INTO `rule` VALUES ('3', '2', 'admin/user/index', '管理员列表', 'fa fa-user', '1', '1');
INSERT INTO `rule` VALUES ('4', '2', 'admin/role/index', '角色列表', 'fa fa-users', '1', '2');
INSERT INTO `rule` VALUES ('5', '2', 'admin/rule/index', '权限列表', 'fa fa-sitemap', '1', '3');
INSERT INTO `rule` VALUES ('6', '3', 'admin/user/add', '管理员添加', null, '0', '1');
INSERT INTO `rule` VALUES ('7', '3', 'admin/user/edit', '管理员编辑', null, '0', '2');
INSERT INTO `rule` VALUES ('8', '3', 'admin/user/delete', '管理员删除', null, '0', '3');
INSERT INTO `rule` VALUES ('9', '4', 'admin/role/add', '角色添加', null, '0', '1');
INSERT INTO `rule` VALUES ('10', '4', 'admin/role/edit', '角色编辑', null, '0', '2');
INSERT INTO `rule` VALUES ('11', '4', 'admin/role/delete', '角色删除', null, '0', '3');
INSERT INTO `rule` VALUES ('12', '5', 'admin/rule/add', '权限添加', '', '0', '1');
INSERT INTO `rule` VALUES ('13', '5', 'admin/rule/edit', '权限编辑', '', '0', '2');
INSERT INTO `rule` VALUES ('14', '5', 'admin/rule/delete', '权限删除', null, '0', '3');
INSERT INTO `rule` VALUES ('15', '0', '', '系统管理', 'fa  fa-laptop', '1', '1');
INSERT INTO `rule` VALUES ('16', '15', 'admin/mall/index', '商城信息', 'fa  fa-laptop', '1', '1');
INSERT INTO `rule` VALUES ('17', '0', null, '文章管理', 'fa  fa-file-text', '1', '1');
INSERT INTO `rule` VALUES ('18', '17', 'admin/cate/index', '分类列表', 'fa fa-tasks', '1', '1');
INSERT INTO `rule` VALUES ('19', '17', 'admin/article/index', '文章列表', 'fa  fa-file-text-o', '1', '2');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `role_id` int(11) DEFAULT '0',
  `username` char(16) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `email` char(32) NOT NULL COMMENT '用户邮箱',
  `mobile` char(15) NOT NULL DEFAULT '' COMMENT '用户手机',
  `reg_ip` varchar(20) NOT NULL DEFAULT '0' COMMENT '注册IP',
  `last_login_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `last_login_ip` varchar(20) NOT NULL DEFAULT '0' COMMENT '最后登录IP',
  `status` tinyint(4) DEFAULT '0' COMMENT '用户状态',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('5', '14', 'admin', 'd86d1ee5812aed8c79d61288e92b6d8f', '', '', '127.0.0.1', '1468461278', '2130706433', '1', '1468292047', '1468461278');
