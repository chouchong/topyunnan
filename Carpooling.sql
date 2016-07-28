/*
Navicat MySQL Data Transfer

Source Server         : phpstudy
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : tpcms

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-07-18 11:33:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL COMMENT '所属分类',
  `title` varchar(255) NOT NULL,
  `keyword` varchar(100) DEFAULT NULL COMMENT '关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `thumb` varchar(255) DEFAULT NULL COMMENT '缩略图',
  `content` text,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态',
  `sort` int(11) NOT NULL DEFAULT '255' COMMENT '排序',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '1', 'PHP依赖管理工具Composer入门教程', '管理工具,require,日志记录,程序,项目', 'Composer 是 PHP 的一个依赖管理工具。它允许你申明项目所依赖的代码库，它会在你的项目中为你安装他们。\n\n依赖管理\n\nComposer 不是一个包管理器。是的，它涉及 \"packag', '\\static\\aricle-thumbnail\\20160612\\82e180ee55b7fa1d2eb4d389c5f6b223.jpg', '<p><span style=\"color:#444444;font-family:\'Microsoft Yahei\', \'Helvetica Neue\', Helvetica, Arial, sans-serif;font-size:15px;line-height:25px;background-color:#FFFFFF;\">Composer 是 PHP 的一个依赖管理工具。它允许你申明</span><a href=\"http://www.07net01.com/tags-%E9%A1%B9%E7%9B%AE-0.html\" target=\"_blank\" class=\"infotextkey\">项目</a><span style=\"color:#444444;font-family:\'Microsoft Yahei\', \'Helvetica Neue\', Helvetica, Arial, sans-serif;font-size:15px;line-height:25px;background-color:#FFFFFF;\">所依赖的代码库，它会在你的项目中为你安装他们。</span><br><br><strong>依赖管理</strong></p>', '1', '14', '1465287817', '1468568159');
INSERT INTO `article` VALUES ('2', '2', '日本2015年向中国人发签证数猛增85% 创历史新高', '', '\r\n	环球网报道记者 王欢】 日本外务省6月6日发布统计结果称，2015年面向中国人的签证发放数量比上年约增加85%，达到378.08万份，刷新此前最高纪录。在旅游签证发放条件放宽和日元贬值的背景下，', '\\static\\aricle-thumbnail\\20160607\\c83886962ffa2e23f42118be7d54cd25.jpg', '<p style=\"text-indent:28px;font-size:14px;text-align:justify;color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;background-color:#FFFFFF;\">\r\n	环球网报道记者 王欢】 日本外务省6月6日发布统计结果称，2015年面向中国人的签证发放数量比上年约增加85%，达到378.08万份，刷新此前最高纪录。在<a href=\"http://travel.ifeng.com/\" target=\"_blank\">旅游</a>签证发放条件放宽和日元贬值的背景下，团体和个人游客都有大幅增加。以所有外国人为对象的签证发放数为476.83万份，同样创新高。\r\n</p>\r\n<p style=\"text-indent:28px;font-size:14px;text-align:justify;color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;background-color:#FFFFFF;\">\r\n	日本共同社6月6日报道说，向中国人发放的签证数占总数的8成左右，占据绝对多数。虽然2012年和2013年该数据因中日围绕钓鱼岛问题引发对立而有所减少，但随着两国关系趋于恢复，签证发放数也日渐增多。\r\n</p>\r\n<p style=\"text-indent:28px;font-size:14px;text-align:justify;color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;background-color:#FFFFFF;\">\r\n	2015年统计显示，继中国之后排在第二的是菲律宾的225,676份，比上年增加约38%;第三是印度尼西亚的16.23万份，约增15%。\r\n</p>\r\n<p style=\"text-indent:28px;font-size:14px;text-align:justify;color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;background-color:#FFFFFF;\">\r\n	日本外务省6日还发布了2015年10月1日的“在外日侨人数”。在海外居住3个月以上者与永住者合计131.71万人，比上年增长2.1%，创新高。\r\n</p>\r\n<p style=\"text-indent:28px;font-size:14px;text-align:justify;color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;background-color:#FFFFFF;\">\r\n	按所在国来分，最多的是美国的41.96万人，其次是中国的13.12万人，再次是<a href=\"http://app.travel.ifeng.com/country_76\" target=\"_blank\">澳大利亚</a>的8.91万人。在中国的日本人比上年减少约2%，自2012年达到峰值后已连减三年。\r\n</p>', '1', '255', '1465288220', '1465288220');
INSERT INTO `article` VALUES ('3', '5', '篮球书', '书', '哈哈哈哈哈', null, '<p>篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球<img src=\"http://img.baidu.com/hi/jx2/j_0035.gif\" _src=\"http://img.baidu.com/hi/jx2/j_0035.gif\"><img src=\"http://img.baidu.com/hi/jx2/j_0062.gif\" _src=\"http://img.baidu.com/hi/jx2/j_0062.gif\">​</p>', '0', '9', '0', '0');
INSERT INTO `article` VALUES ('4', '5', '篮球书', '书', '哈哈哈哈哈', null, '<p>篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球<img src=\"http://img.baidu.com/hi/jx2/j_0035.gif\" _src=\"http://img.baidu.com/hi/jx2/j_0035.gif\"><img src=\"http://img.baidu.com/hi/jx2/j_0062.gif\" _src=\"http://img.baidu.com/hi/jx2/j_0062.gif\">​</p>', '0', '9', '0', '0');
INSERT INTO `article` VALUES ('5', '5', '篮球书', '书', '哈哈哈哈哈', null, '<p>篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球<img src=\"http://img.baidu.com/hi/jx2/j_0035.gif\" _src=\"http://img.baidu.com/hi/jx2/j_0035.gif\"><img src=\"http://img.baidu.com/hi/jx2/j_0062.gif\" _src=\"http://img.baidu.com/hi/jx2/j_0062.gif\">​</p>', '0', '9', '0', '0');
INSERT INTO `article` VALUES ('6', '5', '篮球书', '书', '哈哈哈哈哈', null, '<p>篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球篮球<img src=\"http://img.baidu.com/hi/jx2/j_0035.gif\" _src=\"http://img.baidu.com/hi/jx2/j_0035.gif\"><img src=\"http://img.baidu.com/hi/jx2/j_0062.gif\" _src=\"http://img.baidu.com/hi/jx2/j_0062.gif\">​</p>', '0', '9', '0', '0');
INSERT INTO `article` VALUES ('7', '1', '3', '3', '3', null, '<p>3</p>', '0', '3', '0', '0');
INSERT INTO `article` VALUES ('8', '1', '3', '3', '3', null, '<p>3</p>', '0', '3', '0', '0');
INSERT INTO `article` VALUES ('9', '5', '3', '3', '3', null, '<p>3</p>', '0', '3', '0', '0');
INSERT INTO `article` VALUES ('12', '2', '1', null, null, null, '', '0', '255', '0', '0');
INSERT INTO `article` VALUES ('13', '2', '3', null, null, null, '', '0', '255', '0', '0');
INSERT INTO `article` VALUES ('14', '5', '2', '2', '2', null, '<p>2222222222222</p>', '0', '255', '0', '0');
INSERT INTO `article` VALUES ('15', '2', '2', '2', '2', null, '<p>999999</p>', '0', '2', '0', '0');
INSERT INTO `article` VALUES ('16', '2', '3', '3', '3', null, '<p>3</p>', '0', '3', '0', '0');
INSERT INTO `article` VALUES ('17', '5', '1', '1', '1', null, '<p>1</p>', '0', '255', '0', '0');
INSERT INTO `article` VALUES ('18', '5', '2', '2', '2', null, '<p>2</p>', '0', '2', '0', '0');
INSERT INTO `article` VALUES ('19', '1', '11', '11', '11', null, '<p>11<br></p>', '0', '11', '0', '0');
INSERT INTO `article` VALUES ('20', '5', '1', '1', '1', null, '<p>1<br></p>', '0', '1', '0', '0');
INSERT INTO `article` VALUES ('21', '1', '111', '111', '111', '\\static\\article\\20160715\\1b0324bece8c018a4526bbfa36aee59f.png', '<p>1111</p>', '0', '11', '0', '0');

-- ----------------------------
-- Table structure for article_cate
-- ----------------------------
DROP TABLE IF EXISTS `article_cate`;
CREATE TABLE `article_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL COMMENT '标题',
  `description` varchar(255) DEFAULT '' COMMENT '简介',
  `keyword` varchar(100) DEFAULT NULL COMMENT '关键词',
  `sort` int(11) NOT NULL DEFAULT '255' COMMENT '排序',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of article_cate
-- ----------------------------
INSERT INTO `article_cate` VALUES ('1', '0', '体育', '运动', '运动', '1', '0', '0');
INSERT INTO `article_cate` VALUES ('2', '0', '游戏', '娱乐', 'lol', '2', '0', '0');
INSERT INTO `article_cate` VALUES ('5', '1', '篮球', '打篮球', '球', '6', '0', '0');

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
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
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', '商城名称', 'mallName', 'text', '最云南', '1', '0', '0');
INSERT INTO `config` VALUES ('2', '商城标题', 'mallTitle', 'text', '最云南', '2', '0', '0');
INSERT INTO `config` VALUES ('3', '商城描述', 'mallDesc', 'text', '最云南,最云南', '3', '0', '0');
INSERT INTO `config` VALUES ('4', '商城关键字', 'mallKeywords', 'text', '最云南', '4', '0', '0');
INSERT INTO `config` VALUES ('5', '商城Logo', 'mallLogo', 'upload', '\\static\\mallLogo\\20160715\\02fdba4bbd42f931064c3412623fc2e7.png', '5', '0', '0');
INSERT INTO `config` VALUES ('6', '底部设置', 'mallFooter', 'textarea', '<p>版权所有  最云南社有限公司</p>\n  <p>滇ICP证 16097834</p>\n  <p>2015 All copyrights by Kunming spring tour CO，ITd</p>', '6', '0', '0');
INSERT INTO `config` VALUES ('7', '联系电话', 'phoneNo', 'text', '4008627098', '7', '0', '0');
INSERT INTO `config` VALUES ('8', 'QQ', 'qqNo', 'text', '772947665', '8', '0', '0');

-- ----------------------------
-- Table structure for page
-- ----------------------------
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父级',
  `title` varchar(100) NOT NULL COMMENT '标题',
  `description` varchar(255) DEFAULT '' COMMENT '简介',
  `keyword` varchar(100) DEFAULT '' COMMENT '关键字',
  `content` text COMMENT '内容',
  `status` tinyint(255) NOT NULL DEFAULT '0' COMMENT '状态',
  `sort` int(11) NOT NULL COMMENT '排序',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COMMENT='单页面';

-- ----------------------------
-- Records of page
-- ----------------------------
INSERT INTO `page` VALUES ('1', '0', '公司介绍', '公司', '公司', '吾问无为谓呜呜呜', '1', '1', '0', '0');
INSERT INTO `page` VALUES ('2', '1', '关于我们', '我们', '我们', '忽地啊死哦都平静的', '1', '2', '0', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COMMENT='角色表';

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('14', '系统管理员', '1', '', '1468311256', '1468812178');

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
INSERT INTO `role_rule` VALUES ('14', '20');
INSERT INTO `role_rule` VALUES ('14', '21');
INSERT INTO `role_rule` VALUES ('14', '22');
INSERT INTO `role_rule` VALUES ('14', '23');
INSERT INTO `role_rule` VALUES ('14', '25');
INSERT INTO `role_rule` VALUES ('14', '26');
INSERT INTO `role_rule` VALUES ('14', '27');
INSERT INTO `role_rule` VALUES ('14', '28');
INSERT INTO `role_rule` VALUES ('14', '29');
INSERT INTO `role_rule` VALUES ('14', '30');

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COMMENT='权限&菜单表';

-- ----------------------------
-- Records of rule
-- ----------------------------
INSERT INTO `rule` VALUES ('1', '0', 'admin/index/index', '控制面板', 'fa fa-home', '1', '1');
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
INSERT INTO `rule` VALUES ('15', '0', '', '系统管理', 'fa  fa-laptop', '1', '2');
INSERT INTO `rule` VALUES ('16', '15', 'admin/mall/index', '商城信息', 'fa  fa-laptop', '1', '1');
INSERT INTO `rule` VALUES ('17', '0', null, '文章管理', 'fa  fa-file-text', '1', '1');
INSERT INTO `rule` VALUES ('18', '17', 'admin/article_cate/index', '分类列表', 'fa fa-tasks', '1', '2');
INSERT INTO `rule` VALUES ('19', '17', 'admin/article/index', '文章列表', 'fa  fa-file-text-o', '1', '3');
INSERT INTO `rule` VALUES ('20', '18', 'admin/article_cate/addSave', '分类添加', '', '0', '1');
INSERT INTO `rule` VALUES ('21', '18', 'admin/article_cate/delete', '分类删除', '', '0', '2');
INSERT INTO `rule` VALUES ('22', '18', 'admin/article_cate/editSave', '分类编辑', '', '0', '3');
INSERT INTO `rule` VALUES ('23', '17', 'admin/page/index', '单页面文章', 'fa fa-columns', '1', '1');
INSERT INTO `rule` VALUES ('25', '19', 'admin/article/add', '添加文章', '', '0', '5');
INSERT INTO `rule` VALUES ('26', '19', 'admin/article/edit', '编辑文章', null, '0', '6');
INSERT INTO `rule` VALUES ('27', '19', 'admin/article/delete', '删除文章', null, '0', '7');
INSERT INTO `rule` VALUES ('28', '23', 'admin/page/add', '添加单页面文章', null, '0', '27');
INSERT INTO `rule` VALUES ('29', '23', 'admin/page/delete', '删除单页面文章', null, '0', '28');
INSERT INTO `rule` VALUES ('30', '23', 'admin/page/edit', '编辑单页面文章', '', '0', '28');
INSERT INTO `rule` VALUES ('31', '0', '', '活动', 'fa  fa-bullhorn', '1', '2');
INSERT INTO `rule` VALUES ('32', '31', 'admin/active/cate', '活动分类', 'fa fa-tasks', '1', '1');
INSERT INTO `rule` VALUES ('33', '31', 'admin/active/entry', '参赛列表', '', '0', '3');
INSERT INTO `rule` VALUES ('34', '31', 'admin/active/index', '活动列表', '', '0', '2');

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
INSERT INTO `user` VALUES ('5', '14', 'admin', 'd86d1ee5812aed8c79d61288e92b6d8f', '', '', '127.0.0.1', '1468809736', '2130706433', '1', '1468292047', '1468809736');
