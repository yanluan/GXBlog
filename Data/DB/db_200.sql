/* ADMIN */
CREATE TABLE IF NOT EXISTS `admin` (
   `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
	`account` char(30) NOT NULL DEFAULT '',
	`password` char(32) NOT NULL DEFAULT '',
    `nickname` char(60) NOT NULL DEFAULT '',
	`email` char(90) NOT NULL DEFAULT '',
	`ip` char(15) NOT NULL DEFAULT '',
	`last_login_successful` datetime NOT NULL,
	`last_login_failed` datetime NOT NULL,
    `avatar_url` varchar(200) DEFAULT '' ,
	
	PRIMARY KEY(id)
) ENGINE=INNODB DEFAULT CHARSET=utf8 ;

INSERT INTO `admin` (`account`, `password`, `nickname`, `email`) VALUES ('admin','21232f297a57a5a743894a0e4a801fc3','管理员','admin@ihuxu.com');

/* SITE */
CREATE TABLE IF NOT EXISTS `site` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `keywords` varchar(200) DEFAULT '' COMMENT '关键字',
  `description` varchar(1000) DEFAULT '' COMMENT '描述',
  `browser_title` varchar(200) DEFAULT '' COMMENT '浏览器标题',
  `site_title` varchar(200) DEFAULT '' COMMENT '站点主标题',
  `site_sub_title` varchar(200) DEFAULT '' COMMENT '站点子标题',
  `footer_statement` varchar(2000) DEFAULT '' COMMENT '页脚声明',
  `footer_html` varchar(500) DEFAULT '' COMMENT '页脚代码',
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

INSERT INTO `site` (`id`, `keywords`, `description`, `browser_title`, `site_title`, `site_sub_title`, `footer_html`, `footer_statement`) VALUES
(1, 'GXBlog,博客管理系统,CMS', 'GXBlog - 一款高效、简洁的博客系统', 'GXBlog - 一款高效、简洁的博客系统', 'GXBlog - 一款高效、简洁的博客系统', '越纯粹、越理想', '', '声明：GXBlog遵循LGPL协议发布。');

/* POST */
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `description` varchar(500) NOT NULL DEFAULT '' COMMENT '摘要',
  `content` text NOT NULL COMMENT '内容',
  `cid` int(11) NOT NULL DEFAULT -1 COMMENT '分类表ID',
  `tag_id` int(11) NOT NULL DEFAULT -1 COMMENT '标签表ID',
  `alias` varchar(100) NOT NULL DEFAULT '' COMMENT '别名',
  `ctime` datetime NOT NULL COMMENT '创建文章时间',
  `mtime` datetime NOT NULL COMMENT '修改文章时间',
  `img_url` varchar(200) DEFAULT '' COMMENT '缩略图URL',
  `vedio_url` varchar(200) DEFAULT '' COMMENT '视频URL',
  `audio_url` varchar(200) DEFAULT '' COMMENT '音频URL',
  `view_count` int(11) DEFAULT '0' COMMENT '阅读数',
  `like_count` int(11) DEFAULT '0' COMMENT '赞数',
  `unlike_count` int(11) DEFAULT '0' COMMENT '踩数',
  `trash` int(11) DEFAULT '0' COMMENT '回收站标志',
  `attr_fields` varchar(500) NOT NULL DEFAULT '' COMMENT '附加属性',
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
			
			
CREATE TABLE IF NOT EXISTS `attr` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

INSERT INTO `attr` (`id`, `name`) VALUES
(1, '置顶'),
(2, '推荐');

CREATE TABLE IF NOT EXISTS `post_attr` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `pid` int(11) NOT NULL COMMENT 'post表主键',
  `aid` int(11) NOT NULL COMMENT 'attr表主键',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '-1',
  `rid` int(11) NOT NULL DEFAULT '-1',
  `name` varchar(100) NOT NULL DEFAULT '',
  `alias` varchar(100) NOT NULL DEFAULT '',
  `order_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `category` (`id`, `pid`, `rid`, `name`, `alias`, `order_id`) VALUES
(1, -1, -1, '编程技术', 'code-technic', 1),
(2, 1, 1, 'PHP', 'php', 1),
(3, -1, -1, '互联网', 'internet', 2),
(4, 1, 1, 'C', 'C', 1),
(5, 2, 1, '模式', 'mo-shi', 1),
(8, -1, -1, '生活与创作', 'life-and-compose', 3),
(9, 8, 8, '杂谈', 'others', 1);


CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `alias` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `rid` int(11) DEFAULT '-1' COMMENT '跟ID',
  `pid` int(11) DEFAULT '-1' COMMENT '父ID',
  `post_id` int(11) NOT NULL DEFAULT '-1' COMMENT '所属文章的id',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '名称',
  `content` varchar(500) NOT NULL DEFAULT '' COMMENT '内容',
  `ctime` datetime NOT NULL COMMENT '回复时间',
  `email` varchar(100) DEFAULT NULL DEFAULT '' COMMENT '邮箱',
  `site` varchar(100) DEFAULT NULL DEFAULT '' COMMENT '站点',
  `qq` varchar(12) DEFAULT NULL DEFAULT '' COMMENT 'QQ',
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;


CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `order_id` int(11)  NOT NULL DEFAULT 0 COMMENT '序号',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '名称',
  `alias` varchar(100) NOT NULL DEFAULT '' COMMENT '别名',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text NOT NULL DEFAULT '' COMMENT '内容',
  `ctime` datetime NOT NULL COMMENT '创建时间',
  `mtime` datetime NOT NULL COMMENT '修改时间',
  `trash` int(11) DEFAULT '0' COMMENT '回收站标志',
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
			











