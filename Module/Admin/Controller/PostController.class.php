<?php
namespace Admin\Controller;
use Think\Controller;
class PostController extends CommonController {
	
	public function __construct() {
		parent::__construct();
		$this->_validate();
		$this->_assign();
	}
	
	public function manage($isRelation = true, $table ='Post') {
		parent::manage($isRelation,$table);
	}
	
	public function add() {
		$this->display();
	}
}