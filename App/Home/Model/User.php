<?php namespace Home\Model;
use Hdphp\Model\model;
class User extends Model{
	/*获取用户表中的所有信息*/
	public function getAll(){
		return $this->get();
	}
	/*添加注册的用户信息*/
	public function addUser($post){
		return $this->insert(array('username'=>$post['username'],'password'=>md5($post['password']),'email'=>$post['email']));
	}
	/*验证登录信息*/
	public function validlogin($post){
		$res1=$this->where('username','=',$post['username'])->where('password','=',md5($post['password']))->first();
		$_SESSION['preusername']=$post['username'];
		return $res1;
	}
}
