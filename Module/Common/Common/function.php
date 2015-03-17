<?php
use Think\Log;
use Common\Library\Model\Int\AdminModelInterface;

/**
 * 判断是否登陆.
 *
 * @author genialx
 * @param string $type 用户类型
 * @return boolean
 */
function is_log($type = AdminModelInterface::ADMIN_SESSION_ID) {
	if(session("?{$type}")) return true;
	return false;
}

/**
 * 获取当前登录的管理员ID.
 * 
 * @return mixed|boolean
 */
function get_admin_id($type = AdminModelInterface::ADMIN_SESSION_ID) {
	if(session("?{$type}")) return session("{$type}");
	return false;
}

/**
 * 设置登陆标记（session）.
 *
 * @author genialx
 * @param string $type
 * @param string $value
 * @return boolean
 */
function set_log($type = null, $value = null) {
	if(!isset($value)) return false;
	if(session("?{$type}")) session($type, null);
	Log::record("[SESSION] index: {$type} value: {$value}", Log::INFO);
	session($type, $value);
	return true;
}

/**
 * 登出.
 * @author genialx
 * @param string $type
 * @return boolean
 */
function log_out($type = null) {
	if(session("?{$type}")) return session($type, null);
	return false;
}

/**
 * Login action.
 * 
 * @param string $username
 * @param string $userpass
 * @param string $type
 * @return boolean
 */
function login($username, $userpass, $type = AdminModelInterface::ADMIN_SESSION_ID) {
	$data = M('admin')->field('id')->where(array('account'=>$username, 'password'=>$userpass))->find();
	if(count($data) > 0) return set_log($type, $data['id']);
	return false;
}

/**
 * Get now time format 'Y-m-d H:i:s'
 * 
 */
function get_now_time() {
	return date("Y-m-d H:i:s", time());
}


/**
 * Get config file.
 *
 * @param string $file
 * @return multitype:|unknown
 */
function get_config($file = null) {
	if(!isset($file))  return array();
	$config = require_once dirname(dirname(dirname(dirname(__FILE__))))  . "/Conf/" . $file;
	return $config;
}

/**
 * 打印函数.
 * 
 */
function p($v) {
	echo "<pre>" . print_r($v,true) . "</pre>";
}