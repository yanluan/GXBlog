<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
namespace Think\Cache\Driver;

use Think\Cache;

defined ( 'THINK_PATH' ) or exit ();
/**
 * Wincache缓存驱动
 */
class Wincache extends Cache {
	
	/**
	 * 架构函数
	 * 
	 * @param array $options
	 *        	缓存参数
	 * @access public
	 */
	public function __construct($options = array()) {
		if (! function_exists ( 'wincache_ucache_info' )) {
			E ( L ( '_NOT_SUPPERT_' ) . ':WinCache' );
		}
		$this->options ['expire'] = isset ( $options ['expire'] ) ? $options ['expire'] : C ( 'DATA_CACHE_TIME' );
		$this->options ['prefix'] = isset ( $options ['prefix'] ) ? $options ['prefix'] : C ( 'DATA_CACHE_PREFIX' );
		$this->options ['length'] = isset ( $options ['length'] ) ? $options ['length'] : 0;
	}
	
	/**
	 * 读取缓存
	 * 
	 * @access public
	 * @param string $name
	 *        	缓存变量名
	 * @return mixed
	 */
	public function get($name) {
		N ( 'cache_read', 1 );
		$name = $this->options ['prefix'] . $name;
		return wincache_ucache_exists ( $name ) ? wincache_ucache_get ( $name ) : false;
	}
	
	/**
	 * 写入缓存
	 * 
	 * @access public
	 * @param string $name
	 *        	缓存变量名
	 * @param mixed $value
	 *        	存储数据
	 * @param integer $expire
	 *        	有效时间（秒）
	 * @return boolean
	 */
	public function set($name, $value, $expire = null) {
		N ( 'cache_write', 1 );
		if (is_null ( $expire )) {
			$expire = $this->options ['expire'];
		}
		$name = $this->options ['prefix'] . $name;
		if (wincache_ucache_set ( $name, $value, $expire )) {
			if ($this->options ['length'] > 0) {
				// 记录缓存队列
				$this->queue ( $name );
			}
			return true;
		}
		return false;
	}
	
	/**
	 * 删除缓存
	 * 
	 * @access public
	 * @param string $name
	 *        	缓存变量名
	 * @return boolean
	 */
	public function rm($name) {
		return wincache_ucache_delete ( $this->options ['prefix'] . $name );
	}
	
	/**
	 * 清除缓存
	 * 
	 * @access public
	 * @return boolean
	 */
	public function clear() {
		return wincache_ucache_clear ();
	}
}