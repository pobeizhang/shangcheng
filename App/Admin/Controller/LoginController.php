<?php namespace Admin\Controller;
use Hdphp\Controller\Controller;
use Admin\Model\Admin;
class LoginController extends Controller{
	private $user;
	public function __init(){
		$this->user=new Admin;
	}
	public function login(){
		if(IS_POST){
			if($_POST['verify']==Session::has('code')){
				$res=$this->user->log($_POST);
				if($res){
					$_SESSION['username']=$_POST['username'];
					$_SESSION['welcome']=0;
					$_SESSION['curtime']=time();
					$this->success('登录成功',U('Admin/Index/index'));
				}else{
					$this->error('登录失败',U('Admin/Login/login'));
				}
			}else{
				$this->error('验证码错误',U('Admin/Login/login'));
			}
		}else{
			View::make();
		}
	}
	
	public function loginOut(){
		$res=Session::del('username');
		$res=Session::del('welcome');
		if($res){
			$this->success('退出成功',U('Admin/Login/login'));
		}else{
			$this->error('退出失败',U('Admin/Index/index'));
		}
	}
	
	public function open(){
		if(IS_POST){
			$res=$this->user->op($_POST);
			if($res){
				$this->success('账号已开通',U('Admin/Index/index'));
			}else{
				$this->error('账号开通失败',U('Admin/Login/login'));
			}
		}else{
			View::make();
		}
	}
	//验证码
	public function verify(){
		Code::make();
	}
	
	public function valid(){
		$pwd=current($this->user->valid_password());
		/*p($pwd['password']);
		p(md5($_POST['data']));*/
		if($pwd['password']==md5($_POST['data'])){
			echo 1;
		}else{
			echo 0;
		}
		die;
	}
	
	public function edit(){
		if(IS_POST){
			$res=$this->user->edit_pwd($_POST['newpassword']);
			if($res){
				$this->success('修改成功',U('Admin/Index/index'));
			}else{
				$this->error('修改失败',U('Admin/Login/edit'));
			}
		}else{
			View::make();
		}
	}
}