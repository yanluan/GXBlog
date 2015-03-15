<?php
return array(
		'UserModel' => array(
			'_map' => array(
						'id'			=>'id',
						'realname' 		=>'realname',
						'nickname' 		=>'nickname',
						'sex' 			=>'sex',
						'phone' 		=>'phone',
						'email' 		=>'email',
						'age' 			=>'age',
						'school' 		=>'school',
						'city' 			=>'city',
						'province' 		=>'province',
						'country' 		=>'country',
						'head_img_url' 	=>'head_img_url',
						'openid' 		=>'openid',
			),
		),
		'AdminModel' => array(
				'_map' => array(
					'id' => 'id',
					'account' => 'account',
					'password' => 'password',
					'nickname' => 'nickname',
					'email' => 'email',
					'ip' => 'ip',
					'last_login_successful' => 'last_login_successful',
					'last_login_failed' => 'last_login_failed',
				),
		),
		'EmailPushModel' => array(
				'_map' => array(
					'id' => 'id',
					'description' => 'description',
					'file' => 'file',
					'content' => 'content',
					'start_time' => 'start_time',
					'interrupted_time' => 'interrupted_time',
					'end_time' => 'end_time',
					'status' => 'status',
				
				),
		),
		'PostModel' => array(
				'_map' => array(
					'id' => 'id',
					'title' => 'title',
					'content' => 'content',
					'description' => 'description',
					'image_url' => 'image_url',
					'vedio_url' => 'vedio_url',
					'audio_url' => 'audio_url',
					'link' => 'link',
					'ctime' => 'ctime',
					'mtime' => 'mtime',
					'author' => 'author',
					'view_count' => 'view_count',
					'like_count' => 'like_count',
					'cid' => 'cid',
					'trash' => 'trash',
					'attr_fields' => 'attr_fields',	
			),
		),
		'ClassicModel' => array(
				'_map' => array(
					'id' => 'id',
					'pid' => 'pid',
					'order_id' => 'order_id',
					'final_dir' => 'final_dir',
					'name' => 'name',
					'trash' => 'trash',
			),
		),
		'LikeActivityModel' => array(
				'_map' => array(
					'id' => 'id',
						'uid' => 'uid',
						'post_id' => 'post_id',
						'like_count' => 'like_count',
						'ranking' => 'ranking',
						'attr_fields' => 'attr_fields',
				),
		),
		'LikeRecordModel' => array(
			'_map' => array(
				'id' => 'id',
					'uid' => 'uid',
					'like_activity_id' => 'like_activity_id',
					
			),
		),
		'KVModel' => array(
			'_map' => array(
					'k' => 'k',
					'v' => 'v',
					'expires' => 'expires' ,
					'noexpire' => 'noexpire',	
			),
		),
);
