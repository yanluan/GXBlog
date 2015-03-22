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
		'PostModel' => array(
			'_map' => array(
						'id'							=>'id',
						'title' 						=>'title',
						'description' 					=>'description',
						'content' 						=>'content',
						'cid' 							=>'cid',
						'tag_id' 						=>'tag_id',
						'alias' 						=>'alias',
						'ctime' 						=>'ctime',
						'mtime' 						=>'mtime',
						'img_url' 						=>'img_url',
						'vedio_url' 					=>'vedio_url',
						'audio_url' 					=>'audio_url',
						'view_count' 					=>'view_count',
						'like_count' 					=>'like_count',
						'unlike_count' 					=>'unlike_count',
						'trash' 						=>'trash',
						'attr_fields' 					=>'attr_fields',
			),
		),
);
