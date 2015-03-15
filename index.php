<?php
/** 
 * GXBlog - 高效、简洁的博客系统
 * 
 * @copyright Copyright 2014-2015 沈阳晨信网络科技有限公司 (http://www.echenxin.com)
 * @license GNU Library General Public License 3.0
 */
 
 // Check environment
if (version_compare ( PHP_VERSION, '5.3.0', '<' ))
	die ( 'require PHP > 5.3.0 !' );
	
	// Open the debug mode
define ( 'APP_DEBUG', True );

// Define the path of app
define ( 'APP_PATH', './Module/' );

// Load the ThinkPHP 3.2 library
require './Library/ThinkPHP/ThinkPHP.php';

// Go for it...

