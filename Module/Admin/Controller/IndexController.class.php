<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController	{
	
	public function __construct() {
		parent::__construct();
		$this->_validate();
	}
	
	public function index() {
		echo 'a';
	}
}