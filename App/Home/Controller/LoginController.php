<?php namespace Home\Controller; 

use Hdphp\Controller\Controller;
use Home\Model\User;
//测试控制器
class LoginController extends Controller{
	private $user;
	//构造函数
	public function __init()
	{
		$this->user=new User();
	}
	
    //动作
    public function login(){
    	if(IS_POST){
    		$res=$this->user->validlogin($_POST);
			
			if($res){
				echo 1;
			}else{
				echo 0;
			}
			die;
    	}else{
    		View::make();
    	}
    }
	/*退出登录操作*/
	public function outLogin(){
		Session::del('preusername');
		$this->success('你已退出登录',U('Home/Index/index'));
	}
}
