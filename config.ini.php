<?php
/**
 * Here are the whole config options.
 * 
 * These configuration's priority is not the heigest,
 * if this config modified, but, not get into effect,
 * may you read the config.php in the specific module(See the Conf directory).
 * 
 * @author genialx
 */
return array (
		
		// 基本配置[Basic config]
		'ILLEGAL_CONTROLLER'	=> 'Admin\Controller\IllegalController', // 非法控制器[当访问不存在控制器时，该控制器生效]
		'DEFAULT_MODULE' 		=> 'Home', // 默认模块
		'DEFAULT_CONTROLLER' 	=> 'Index', // 默认控制器
		'DEFAULT_ACTION' 		=> 'index', // 默认操作
		'SESSION_AUTO_START' 	=> true,
		'DEFAULT_FILTER' 		=> 'htmlspecialchars',
		'SITE_URL' 				=> 'http://www.gxblog.com', // 网站主页网址
		'UPLOAD_PATH'			=> dirname(__FILE__) . '/Data/Upload', //上传路径
		'UPLOAD_DIR'			=> '/Data/Upload', // 上传文件夹，可配合ROOT_PATH或SITE_URL使用
		'ROOT_PATH' 			=> dirname(__FILE__), // 跟路径
		'READ_DATA_MAP'			=> true,  // 自动数据表字段映射
		'SHOW_PAGE_TRACE' 		=> false, // PAGE TRACE
		
		// 数据库配置信息[Database config]
		'DB_TYPE' => 'mysqli', // 数据库类型
		'DB_HOST' => 'localhost', // 服务器地址
		'DB_NAME' => 'gxblog_200_dev', // 数据库名
		'DB_USER' => 'root', // 用户名
		'DB_PWD'  => '', // 密码
		'DB_PORT' => 3306, // 端口
		'DB_PREFIX'  => '', // 数据库表前缀
		'DB_CHARSET' => 'utf8', // 字符集
		
		// 数据库表映射
		'DB_TABLE_MAP' => array(
				'admin' 				=> 'admin',
				'Admin' 				=> 'Admin',
				'site' 					=> 'site',
				'Site' 					=> 'Site',
				'post' 					=> 'post',
				'Post' 					=> 'Post',
				'attr'					=> 'attr',
				'Attr'					=> 'Attr',
				'post_attr' 			=> 'post_attr',
				'PostAttr' 				=> 'PostAttr',
				'category' 				=> 'category',
				'Category' 				=> 'Category',
				'tag' 					=> 'tag',
				'Tag' 					=> 'Tag',
				'comment' 				=> 'comment',
				'Comment' 				=> 'Comment',
				'page' 					=> 'page',
				'Page' 					=> 'Page',
		),
		 
		// 表单令牌验证[Form validate]
		'TOKEN_ON' => true, // 是否开启令牌验证 默认关闭
		'TOKEN_NAME' => '__hash__', // 令牌验证的表单隐藏字段名称，默认为__hash__
		'TOKEN_TYPE' => 'md5', // 令牌哈希验证规则 默认为MD5
		'TOKEN_RESET' => true, // 令牌验证出错后是否重置令牌 默认为true
		                            
		// 语言包[Language libraries config]
		'LOAD_EXT_CONFIG' => 'lang-cn',
		
		// 模板[Themplate config]
		'TMPL_PARSE_STRING' => array (
			'__PUBLIC__' => '/Data/Public/Common',
			'__KINDEDITOR__' => '/Library/KindEditor',
		),
		
		// 日志[Log]
		'LOG_RECORD' => true, // 开启日志记录
		'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR,WARN,NOTICE,INFO,DEBUG,SQL',
		
		// 路由[ROUTER]
		'URL_CASE_INSENSITIVE'  =>  false,   // 默认false 表示URL区分大小写  true则表示不区分大小写
		'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
		'URL_PATHINFO_DEPR'     =>  '/',    // PATHINFO模式下，各参数之间的分割符号
		'URL_PATHINFO_FETCH'    =>  'ORIG_PATH_INFO,REDIRECT_PATH_INFO,REDIRECT_URL', // 用于兼容判断PATH_INFO 参数的SERVER替代变量列表
		'URL_REQUEST_URI'       =>  'REQUEST_URI', // 获取当前页面地址的系统变量 默认为REQUEST_URI
		'URL_HTML_SUFFIX'       =>  '',  // URL伪静态后缀设置
		'URL_DENY_SUFFIX'       =>  'ico|png|gif|jpg', // URL禁止访问的后缀设置
		'URL_PARAMS_BIND'       =>  true, // URL变量绑定到Action方法参数
		'URL_PARAMS_BIND_TYPE'  =>  0, // URL变量绑定的类型 0 按变量名绑定 1 按变量顺序绑定
		'URL_404_REDIRECT'      =>  '', // 404 跳转页面 部署模式有效
		'URL_ROUTER_ON'         =>  false,   // 是否开启URL路由
		'URL_ROUTE_RULES'       =>  array(), // 默认路由规则 针对模块
		'URL_MAP_RULES'         =>  array(), // URL映射定义规则
		
		// 数据缓存[CACHE]
		'DATA_CACHE_TIME'       =>  0,      // 数据缓存有效期 0表示永久缓存
		'DATA_CACHE_COMPRESS'   =>  false,   // 数据缓存是否压缩缓存
		'DATA_CACHE_CHECK'      =>  false,   // 数据缓存是否校验缓存
		'DATA_CACHE_PREFIX'     =>  '',     // 缓存前缀
		'DATA_CACHE_TYPE'       =>  'File',  // 数据缓存类型,支持:File|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
		'DATA_CACHE_PATH'       =>  TEMP_PATH,// 缓存路径设置 (仅对File方式缓存有效)
		'DATA_CACHE_SUBDIR'     =>  false,    // 使用子目录缓存 (自动根据缓存标识的哈希创建子目录)
		'DATA_PATH_LEVEL'       =>  1,        // 子目录缓存级别

		// TP框架扩展配置[ThinkPHP framework configuration]
		'M_DEPRECATED' 			=> ture, // 禁用M方法
		
		//============//
		//Admin module//
		//============//
		
		/** EmailPush Controller **/
		// 管理界面条目数
		'MANAGE_PAGE_ITEM_COUNT' => 10,
		
		// 推送配置
		'PUSH_SERVER_URL' => '', // http://115.28.154.115:1720/emailPushAPI
		
		// 推送[Push]
		'EMAIL_PUSH_SWITCH' => true, // 邮件推送开关
		
		/** LikeActivity Controller **/
		'LIKE_ACTIVITY_CID' 		=> 1, // 点赞活动分类父ID
		'LIKE_ACTIVITY_CONTENT_CID' => 2, // 活动详情分类ID
		'LIKE_ACTIVITY_RECRUIT_CID' => 3, // 招聘专场分类ID
		'LIKE_ACTIVITY_BOSS_CID' 	=> 4, // 大佬分类ID
		
		//=============//
		//WeChat Module//
		//=============//
		
		/** APIController **/
		'WECHAT_API_VALID' => TRUE, // 开发者验证开关
		
		
		
		
);