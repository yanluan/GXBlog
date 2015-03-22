<?php
namespace Common\Model;
use Think\Log;
use Think\Model\RelationModel;
class PostModel extends RelationModel {
	
	public function __construct() {
		$this->_dispose();
		parent::__construct();
	}
	protected $_map = array( );
	
	private function _dispose() {
		$MC = get_config("Model.ini.php");
		$this->_map = $MC['PostModel']['_map'];
	}
}