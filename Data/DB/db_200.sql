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

INSERT INTO `admin` (`account`, `password`, `nickname`, `email`) VALUES ('admin','21232f297a57a5a743894a0e4a801fc3','����Ա','admin@ihuxu.com');

/* SITE */
CREATE TABLE IF NOT EXISTS `site` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `keywords` varchar(200) DEFAULT '' COMMENT '�ؼ���',
  `description` varchar(1000) DEFAULT '' COMMENT '����',
  `browser_title` varchar(200) DEFAULT '' COMMENT '���������',
  `site_title` varchar(200) DEFAULT '' COMMENT 'վ��������',
  `site_sub_title` varchar(200) DEFAULT '' COMMENT 'վ���ӱ���',
  `footer_statement` varchar(2000) DEFAULT '' COMMENT 'ҳ������',
  `footer_html` varchar(500) DEFAULT '' COMMENT 'ҳ�Ŵ���',
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

INSERT INTO `site` (`id`, `keywords`, `description`, `browser_title`, `site_title`, `site_sub_title`, `footer_html`, `footer_statement`) VALUES
(1, 'GXBlog,���͹���ϵͳ,CMS', 'GXBlog - һ���Ч�����Ĳ���ϵͳ', 'GXBlog - һ���Ч�����Ĳ���ϵͳ', 'GXBlog - һ���Ч�����Ĳ���ϵͳ', 'Խ���⡢Խ����', '', '������GXBlog��ѭLGPLЭ�鷢����');

/* POST */
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '����',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '����',
  `description` varchar(500) NOT NULL DEFAULT '' COMMENT 'ժҪ',
  `content` text NOT NULL COMMENT '����',
  `cid` int(11) NOT NULL DEFAULT -1 COMMENT '�����ID',
  `tag_id` int(11) NOT NULL DEFAULT -1 COMMENT '��ǩ��ID',
  `alias` varchar(100) NOT NULL DEFAULT '' COMMENT '����',
  `ctime` datetime NOT NULL COMMENT '��������ʱ��',
  `mtime` datetime NOT NULL COMMENT '�޸�����ʱ��',
  `img_url` varchar(200) DEFAULT '' COMMENT '����ͼURL',
  `vedio_url` varchar(200) DEFAULT '' COMMENT '��ƵURL',
  `audio_url` varchar(200) DEFAULT '' COMMENT '��ƵURL',
  `view_count` int(11) DEFAULT '0' COMMENT '�Ķ���',
  `like_count` int(11) DEFAULT '0' COMMENT '����',
  `unlike_count` int(11) DEFAULT '0' COMMENT '����',
  `trash` int(11) DEFAULT '0' COMMENT '����վ��־',
  `attr_fields` varchar(500) NOT NULL DEFAULT '' COMMENT '��������',
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
			
			
CREATE TABLE IF NOT EXISTS `attr` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '����',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '����',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

INSERT INTO `attr` (`id`, `name`) VALUES
(1, '�ö�'),
(2, '�Ƽ�');

CREATE TABLE IF NOT EXISTS `post_attr` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '����',
  `pid` int(11) NOT NULL COMMENT 'post������',
  `aid` int(11) NOT NULL COMMENT 'attr������',
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
(1, -1, -1, '��̼���', 'code-technic', 1),
(2, 1, 1, 'PHP', 'php', 1),
(3, -1, -1, '������', 'internet', 2),
(4, 1, 1, 'C', 'C', 1),
(5, 2, 1, 'ģʽ', 'mo-shi', 1),
(8, -1, -1, '�����봴��', 'life-and-compose', 3),
(9, 8, 8, '��̸', 'others', 1);


CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `alias` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '����',
  `rid` int(11) DEFAULT '-1' COMMENT '��ID',
  `pid` int(11) DEFAULT '-1' COMMENT '��ID',
  `post_id` int(11) NOT NULL DEFAULT '-1' COMMENT '�������µ�id',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '����',
  `content` varchar(500) NOT NULL DEFAULT '' COMMENT '����',
  `ctime` datetime NOT NULL COMMENT '�ظ�ʱ��',
  `email` varchar(100) DEFAULT NULL DEFAULT '' COMMENT '����',
  `site` varchar(100) DEFAULT NULL DEFAULT '' COMMENT 'վ��',
  `qq` varchar(12) DEFAULT NULL DEFAULT '' COMMENT 'QQ',
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;


CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '����',
  `order_id` int(11)  NOT NULL DEFAULT 0 COMMENT '���',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '����',
  `alias` varchar(100) NOT NULL DEFAULT '' COMMENT '����',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '����',
  `content` text NOT NULL DEFAULT '' COMMENT '����',
  `ctime` datetime NOT NULL COMMENT '����ʱ��',
  `mtime` datetime NOT NULL COMMENT '�޸�ʱ��',
  `trash` int(11) DEFAULT '0' COMMENT '����վ��־',
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
			











