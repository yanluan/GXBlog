<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController	{
	
	public function __construct() {
		parent::__construct();
		$this->_validate();
		$this->_assign();
	}
	
	public function index() {
		$this->display();
	}
}