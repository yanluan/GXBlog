<?php
return array (

	    /* Action name of controller */
		'ADMIN_CONTROLLER_MAP' => array(
			1 => array(
					'name' => '起始页',
					'controller' => 'Index',
					'action' => 'index',
					'icon_class' => 'fa fa-home',
					'sub_map' => array(),
			),
			2 => array(
						'name' => '内容',
						'action' => 'index',
						'controller' => 'Content',
						'icon_class' => 'fa fa-archive',
						'sub_map' => array(
								1 => array(
										'name' => '文章',
										'controller' => 'Post',
										'action' => 'index',
										'icon_class' => 'fa fa-book',
										'sub_map' => array(
												1 => array(
														'name' => '管理文章',
														'controller' => 'Post',
														'action' => 'manage',
														'icon_class' => 'fa fa-list-ol',
														'sub_map' => array(),
												),
												2 => array(
														'name' => '撰写新文章',
														'controller' => 'Post',
														'action' => 'add',
														'icon_class' => 'fa fa-pencil-square-o',
														'sub_map' => array(),
												),
										),
								),
								2 => array(
										'name' => '页面',
										'controller' => 'Page',
										'action' => 'index',
										'icon_class' => 'fa fa-file-text-o',
										'sub_map' => array(
												1 => array(
														'name' => '页面管理',
														'controller' => 'Page',
														'action' => 'manage',
														'icon_class' => 'fa fa-list-ol',
														'sub_map' => array(),
												),
												2 => array(
														'name' => '新增页面',
														'controller' => 'Page',
														'action' => 'add',
														'icon_class' => 'fa fa-pencil-square-o',
														'sub_map' => array(),
												),
										),
								),
								3 => array(
										'name' => '栏目',
										'controller' => 'Category',
										'action' => 'index',
										'icon_class' => 'fa fa-th-list',
										'sub_map' => array(
												1 => array(
														'name' => '栏目管理',
														'controller' => 'Category',
														'action' => 'manage',
														'icon_class' => 'fa fa-list-ol',
														'sub_map' => array(),
												),
												2 => array(
														'name' => '新增栏目',
														'controller' => 'Category',
														'action' => 'add',
														'icon_class' => 'fa fa-pencil-square-o',
														'sub_map' => array(),
												),
										),
								),
						),
			),
			3 => array(
						'name' => '反馈',
						'action' => 'index',
						'controller' => 'Feedback',
						'icon_class' => 'fa fa-envelope-o',
						'sub_map' => array(
								1 => array(
										'name' => '留言',
										'controller' => 'Comment',
										'action' => 'manage',
										'icon_class' => 'fa fa-comments-o',
										'sub_map' => array(),
						),
				),
			),
			4 => array(
						'name' => '设置',
						'action' => 'index',
						'controller' => 'Setting',
						'icon_class' => 'fa fa-cogs',
						'sub_map' => array(
								1 => array(
										'name' => '网站',
										'controller' => 'Site',
										'action' => 'index',
										'icon_class' => 'fa  fa-desktop',
										'sub_map' => array(),
								),
								2 => array(
										'name' => '个人资料',
										'controller' => 'Profile',
										'action' => 'index',
										'icon_class' => 'fa fa-user',
										'sub_map' => array(),
								),
				),
			),
		),
		
		/* top bar tpl */
		'MY_PROFILE' => '个人资料',
		'MY_MESSAGES' => '消息中心',
		'LOCK_SCREEN' => '锁定后台',
		'LOG_OUT' => '退出',
		
		/* Illegal Controller */
		'ILLEGAL_WELCOME'	=> '抱歉，您的版本不是完整版，请联系管理员！',
		
		/* Login controller */
		'LOGIN_WELCOME' 		=> '欢迎您来到<em>GXBlog</em>系统后台！',
		'WELCOME_SUB'  			=> '请输入您的用户名和密码来登陆。',
		'FORGOT_PASSWORD'  		=> '忘记密码?',
		'KEEP_SIGNED'			=> '记住我',
		'CREATE_ACCOUNT'		=> "还没有账户？<a href=\"#\" class=\"register\">创建账户</a>",
		'LOGIN_ERROR'			=> "貌似有些问题，请仔细检查下再试喔！",
		'ENTER_EMAIL' 			=> "请在下方输入框输入您的邮件地址来获取新密码！",
		'LOGIN_SUCCESSFULLY'	=> "登陆成功",
		'LOGIN_FAILED'			=> "用户名或密码错误",
		'EMAIL_SENT'			=> "重置密码已发送到指定邮箱，请查收！",
		'EMAIL_NOT_SENT'		=> "邮件地址错误，请检查后再试。",
		'LOG_OUT_SUCCESSFULLY'  => "登出成功",
		'TO_UNLOCK'				=> "请输入密码解锁",
		'NOT_ME'				=> "我不是",
		
		/* Index controller */
		
		

);