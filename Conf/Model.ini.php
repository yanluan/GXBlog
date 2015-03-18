<?php
return array(
		'AdminModel' => array(
			// 键：PHP程序操作的字段，值：数据库真正的字段
			'_map' => array(
						'id'							=>'id',
						'account' 					=>'account',
						'password' 						=>'password',
						'nickname' 						=>'nickname',
						'phone' 						=>'phone',
						'email' 						=>'email',
						'ip' 							=>'ip',
						'last_login_successful' 		=>'last_login_successful',
						'last_login_failed' 			=>'last_login_failed',
						'avatar_url' 					=>'avatar_url',
			),
		),
);
