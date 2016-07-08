/*
Navicat MySQL Data Transfer

Source Server         : phpstudy
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : tpcms

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-07-08 19:09:03
*/

SET FOREIGN_KEY_CHECKS=0;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='角色表';

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', '网站管理员', '1', '网站所有者权限', '1463639061', '1465267060');
INSERT INTO `role` VALUES ('2', 'demo', '1', '', '1467959713', '1467960395');

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
INSERT INTO `role_rule` VALUES ('1', '1');
INSERT INTO `role_rule` VALUES ('2', '1');
INSERT INTO `role_rule` VALUES ('1', '2');
INSERT INTO `role_rule` VALUES ('2', '2');
INSERT INTO `role_rule` VALUES ('1', '3');
INSERT INTO `role_rule` VALUES ('1', '4');
INSERT INTO `role_rule` VALUES ('1', '5');
INSERT INTO `role_rule` VALUES ('1', '6');
INSERT INTO `role_rule` VALUES ('1', '7');
INSERT INTO `role_rule` VALUES ('1', '8');
INSERT INTO `role_rule` VALUES ('1', '9');
INSERT INTO `role_rule` VALUES ('1', '13');
INSERT INTO `role_rule` VALUES ('2', '13');
INSERT INTO `role_rule` VALUES ('1', '14');
INSERT INTO `role_rule` VALUES ('1', '15');
INSERT INTO `role_rule` VALUES ('1', '16');
INSERT INTO `role_rule` VALUES ('1', '17');
INSERT INTO `role_rule` VALUES ('1', '18');
INSERT INTO `role_rule` VALUES ('1', '19');
INSERT INTO `role_rule` VALUES ('1', '20');
INSERT INTO `role_rule` VALUES ('1', '21');
INSERT INTO `role_rule` VALUES ('2', '21');
INSERT INTO `role_rule` VALUES ('1', '22');
INSERT INTO `role_rule` VALUES ('2', '22');
INSERT INTO `role_rule` VALUES ('1', '23');
INSERT INTO `role_rule` VALUES ('2', '23');
INSERT INTO `role_rule` VALUES ('1', '24');
INSERT INTO `role_rule` VALUES ('2', '24');
INSERT INTO `role_rule` VALUES ('1', '25');
INSERT INTO `role_rule` VALUES ('2', '25');
INSERT INTO `role_rule` VALUES ('1', '26');
INSERT INTO `role_rule` VALUES ('2', '26');
INSERT INTO `role_rule` VALUES ('1', '27');
INSERT INTO `role_rule` VALUES ('2', '27');
INSERT INTO `role_rule` VALUES ('1', '28');
INSERT INTO `role_rule` VALUES ('2', '28');
INSERT INTO `role_rule` VALUES ('1', '29');
INSERT INTO `role_rule` VALUES ('2', '29');
INSERT INTO `role_rule` VALUES ('1', '30');
INSERT INTO `role_rule` VALUES ('2', '30');
INSERT INTO `role_rule` VALUES ('1', '31');
INSERT INTO `role_rule` VALUES ('2', '31');
INSERT INTO `role_rule` VALUES ('1', '32');
INSERT INTO `role_rule` VALUES ('1', '33');
INSERT INTO `role_rule` VALUES ('1', '34');
INSERT INTO `role_rule` VALUES ('1', '35');
INSERT INTO `role_rule` VALUES ('1', '36');
INSERT INTO `role_rule` VALUES ('1', '37');
INSERT INTO `role_rule` VALUES ('1', '38');
INSERT INTO `role_rule` VALUES ('1', '39');
INSERT INTO `role_rule` VALUES ('1', '40');
INSERT INTO `role_rule` VALUES ('1', '41');
INSERT INTO `role_rule` VALUES ('1', '42');
INSERT INTO `role_rule` VALUES ('1', '43');
INSERT INTO `role_rule` VALUES ('1', '44');
INSERT INTO `role_rule` VALUES ('2', '44');
INSERT INTO `role_rule` VALUES ('1', '45');
INSERT INTO `role_rule` VALUES ('1', '46');
INSERT INTO `role_rule` VALUES ('1', '47');
INSERT INTO `role_rule` VALUES ('1', '48');
INSERT INTO `role_rule` VALUES ('1', '49');
INSERT INTO `role_rule` VALUES ('1', '50');
INSERT INTO `role_rule` VALUES ('1', '51');
INSERT INTO `role_rule` VALUES ('1', '52');
INSERT INTO `role_rule` VALUES ('1', '53');
INSERT INTO `role_rule` VALUES ('1', '54');
INSERT INTO `role_rule` VALUES ('1', '55');
INSERT INTO `role_rule` VALUES ('1', '56');

-- ----------------------------
-- Table structure for rule
-- ----------------------------
DROP TABLE IF EXISTS `rule`;
CREATE TABLE `rule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父菜单',
  `name` varchar(100) NOT NULL COMMENT 'url地址 c+a',
  `title` varchar(100) NOT NULL COMMENT '菜单名称',
  `icon` varchar(100) DEFAULT NULL COMMENT '图标',
  `islink` tinyint(5) NOT NULL DEFAULT '0' COMMENT '是否菜单',
  `sort` int(3) NOT NULL DEFAULT '255' COMMENT '排序',
  PRIMARY KEY (`id`),
  UNIQUE KEY `rulename` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COMMENT='权限&菜单表';

-- ----------------------------
-- Records of rule
-- ----------------------------
INSERT INTO `rule` VALUES ('1', '0', 'index/main', '主界面', 'glyphicon glyphicon-home', '1', '0');
INSERT INTO `rule` VALUES ('2', '0', 'role', '用户组权限管理', 'fa fa-users', '1', '1');
INSERT INTO `rule` VALUES ('3', '2', 'rule/index', '菜单管理', 'fa fa-th', '1', '2');
INSERT INTO `rule` VALUES ('4', '3', 'rule/add', '添加菜单', '', '0', '255');
INSERT INTO `rule` VALUES ('5', '3', 'rule/edit', '修改菜单', '', '0', '22');
INSERT INTO `rule` VALUES ('6', '3', 'rule/destroy', '菜单删除', '', '0', '255');
INSERT INTO `rule` VALUES ('7', '2', 'Role/index', '用户组管理', 'fa fa-users', '1', '255');
INSERT INTO `rule` VALUES ('8', '7', 'role/add', '添加用户组', '', '0', '255');
INSERT INTO `rule` VALUES ('9', '7', 'role/edit', '修改用户组', '', '0', '12');
INSERT INTO `rule` VALUES ('13', '0', 'profile', '个人中心', 'fa fa-user-secret', '1', '255');
INSERT INTO `rule` VALUES ('14', '13', 'personal/profile', '个人资料', 'fa fa-user-plus', '1', '255');
INSERT INTO `rule` VALUES ('15', '13', 'index/logout', '退出', 'fa fa-sign-out', '1', '255');
INSERT INTO `rule` VALUES ('16', '7', 'role/destroy', '删除用户组', '', '0', '255');
INSERT INTO `rule` VALUES ('17', '2', 'user/index', '后台用户管理', 'fa fa-user', '1', '255');
INSERT INTO `rule` VALUES ('18', '17', 'user/add', '添加后台用户', '', '0', '255');
INSERT INTO `rule` VALUES ('19', '17', 'user/edit', '修改后台用户', '', '0', '255');
INSERT INTO `rule` VALUES ('20', '17', 'user/destroy', '删除后台用户', '', '0', '255');
INSERT INTO `rule` VALUES ('21', '0', 'system', '系统设置', 'fa fa-cog', '1', '2');
INSERT INTO `rule` VALUES ('22', '21', 'databases/index', '数据库备份', 'fa fa-database', '1', '255');
INSERT INTO `rule` VALUES ('23', '22', 'databases/optimize', '优化表', '', '0', '255');
INSERT INTO `rule` VALUES ('24', '22', 'databases/repair', '数据修复', '', '0', '255');
INSERT INTO `rule` VALUES ('25', '22', 'databases/backup', '备份表', '', '0', '255');
INSERT INTO `rule` VALUES ('26', '21', 'variable/index', '自定义变量', 'fa fa-superscript', '1', '255');
INSERT INTO `rule` VALUES ('27', '26', 'variable/add', '添加变量', '', '0', '255');
INSERT INTO `rule` VALUES ('28', '26', 'variable/edit', '修改变量', '', '0', '255');
INSERT INTO `rule` VALUES ('29', '26', 'variable/set', '修改变量值', '', '0', '255');
INSERT INTO `rule` VALUES ('30', '26', 'upload/uploadpic', '编辑器上传', '', '0', '255');
INSERT INTO `rule` VALUES ('31', '0', 'other', '其他功能管理', 'fa fa-instagram', '1', '10');
INSERT INTO `rule` VALUES ('32', '31', 'links/index', '友情链接管理', 'fa fa-link', '1', '255');
INSERT INTO `rule` VALUES ('33', '32', 'links/add', '添加友情链接', '', '0', '255');
INSERT INTO `rule` VALUES ('34', '32', 'links/edit', '修改友情链接', '', '0', '255');
INSERT INTO `rule` VALUES ('35', '32', 'links/destroy', '删除友情链接', '', '0', '255');
INSERT INTO `rule` VALUES ('36', '31', 'focusposition/index', '焦点图位置', 'fa fa-play-circle', '1', '255');
INSERT INTO `rule` VALUES ('37', '36', 'focusposition/add', '添加焦点图位置', '', '0', '255');
INSERT INTO `rule` VALUES ('38', '36', 'focusposition/edit', '修改焦点图位置', '', '0', '255');
INSERT INTO `rule` VALUES ('39', '36', 'focusposition/destroy', '删除焦点图位置', '', '0', '255');
INSERT INTO `rule` VALUES ('40', '31', 'focus/index', '焦点图', 'fa fa-money', '1', '255');
INSERT INTO `rule` VALUES ('41', '40', 'focus/add', '添加焦点图', '', '0', '255');
INSERT INTO `rule` VALUES ('42', '40', 'focus/edit', '修改焦点图', '', '0', '255');
INSERT INTO `rule` VALUES ('43', '40', 'focus/destroy', '删除焦点图', '', '0', '255');
INSERT INTO `rule` VALUES ('44', '0', 'content', '内容管理', 'fa fa-newspaper-o', '1', '3');
INSERT INTO `rule` VALUES ('45', '44', 'page/index', '单页面管理', 'fa fa-pagelines', '1', '255');
INSERT INTO `rule` VALUES ('46', '45', 'page/add', '添加单页面', '', '0', '255');
INSERT INTO `rule` VALUES ('47', '45', 'page/edit', '修改单页面', '', '0', '255');
INSERT INTO `rule` VALUES ('48', '45', 'page/destroy', '删除单页面', '', '0', '255');
INSERT INTO `rule` VALUES ('49', '44', 'ariclecategory/index', '分类管理', 'fa fa-certificate', '1', '255');
INSERT INTO `rule` VALUES ('50', '49', 'ariclecategory/add', '添加文章分类', '', '0', '255');
INSERT INTO `rule` VALUES ('51', '49', 'ariclecategory/edit', '修改文章分类', '', '0', '255');
INSERT INTO `rule` VALUES ('52', '49', 'ariclecategory/destroy', '删除文章分类', '', '0', '255');
INSERT INTO `rule` VALUES ('53', '44', 'aricle/index', '文章管理', 'fa fa-book', '1', '255');
INSERT INTO `rule` VALUES ('54', '53', 'aricle/add', '添加文章', '', '0', '255');
INSERT INTO `rule` VALUES ('55', '53', 'aricle/edit', '修改文章', '', '0', '255');
INSERT INTO `rule` VALUES ('56', '53', 'aricle/destroy', '删除文章', '', '0', '255');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `rid` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('4', '1', 'admin', 'bf09619e9a8819c7ed28b8923b3f36f4', '', '', '127.0.0.1', '1467971332', '2130706433', '1', '1467879476', '1467971332');
