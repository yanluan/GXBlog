<?php
namespace Admin\Controller;
use Common\Library\Model\Int\AdminModelInterface;
use Common\Library\Util\Int\ErrorCode;
/**
 * Login controller.
 * @author genialx
 * 
 * @todo the verify code;record login data.
 *
 */
class LoginController extends CommonController{
	
	public function __construct() {
		parent::__construct();
		$this->_validate(self::ADMIN_SESSION_ID);
	}
	
	/**
	 * Echo login page.
	 */
	public function index() {
		$this->display();
	}
	
	/**
	 * Login action.
	 * 
	 * @param string $type
	 */
	public function login() {
		if(!count($_POST)) {
			$this->display('index');
		} else {
			if(login(I('post.ebes0csjd'), md5(I('post.do98jf7hs')), self::ADMIN_SESSION_ID)) {
				$this->success(C("LOGIN_SUCCESSFULLY"),  __MODULE__ .  "/Index/index");
			} else {
				$this->error(C("LOGIN_FAILED"));
				$this->display('index');
			}
		}
	}
	
	public function forgotPassword() {
		
		$data['errCode'] = ErrorCode::ERROR_0_CODE;
		$data['errMsg'] = ErrorCode::ERROR_0_MSG;
		$data = json_encode($data,true);
		echo $data;
		return true;
	}
	
}