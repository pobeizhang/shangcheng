<?php namespace Home\Controller; 

use Hdphp\Controller\Controller;
use Home\Model\User;
//测试控制器
class RegisterController extends Controller{
	private $user;
	//构造函数
	public function __init()
	{
		$this->user=new User();
	}
	
    //动作
    public function register(){
    	if(IS_POST){
    		$res=$this->user->addUser($_POST);
			
			if($res){
				$this->success('注册成功',U('Home/Login/login'));
			}else{
				$this->error('注册失败',U('Home/Register/register'));
			}
    	}else{
    		View::make();
    	}
    }
	/*异步验证邮箱*/
	public function validEmail(){
		$preg="/^\d{8,11}@qq.com|\w{5,18}@(163|126|139|gmail|yahoo|msn|hotmail|aol|ask|live|0355|263|3721|yeah|googlemail|mail)\.(com|net)$/"; 
		if(preg_match($preg, $_POST['edata'])){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	/*异步验证用户名*/
	public function validusername(){
		$preg="/^[\w]{6,20}$/u";
		$user=Db::table('lashou_user')->where('username','=',$_POST['udata'])->first();
		if(preg_match($preg, $_POST['udata'])&&$user==null){
			echo 1;
		}else if(preg_match($preg, $_POST['udata'])&&$user!=null){
			echo 2;
		}else{
			echo 0;
		}
		die;
	}
	
	/*异步验证密码*/
	public function validpwd(){

//		密码太弱
		$preg1="/^[a-zA-Z0-9]{6,10}$/u";
//		密码适中
		$preg2="/^[a-zA-Z0-9_]{6,10}$/u";
//		密码适中
		$preg3="/^[a-zA-Z0-9]{10,20}$/u";
//		密码安全
		$preg4="/^[a-zA-Z0-9_]{10,20}$/u";
		if(preg_match($preg1, $_POST['pdata'])){
			echo 1;
		}else if(preg_match($preg2, $_POST['pdata']) || preg_match($preg3, $_POST['pdata'])){
			echo 2;
		}else if(preg_match($preg4, $_POST['pdata'])){
			echo 3;
		}else{
			echo 0;
		}
	}
	
	/*异步验证密码确认*/
	public function validqueren(){
		if($_POST['pd1']==$_POST['pd2']){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	/*异步验证验证码*/
	public function vyzm(){
		$code=$_SESSION['code'];
		if(strtoupper($_POST['data'])==$code){
			echo 1;
		}else{
			echo 0;
		}
	}
}
