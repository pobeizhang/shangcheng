<?php namespace Admin\Model;
use Hdphp\Model\Model;
class Admin extends Model{
	public function log($post){
		$data=$this->where('username','=',$post['username'])->first();
		if(md5($post['password'])==$data['password']){
			return true;
		}else{
			return false;
		}
	}
	
	public function op($oppost){
		$oppost['lock']='0';
		$oppost['root']='0';
		$oppost['password']=md5($oppost['password']);
		return $this->insert($oppost);
	}
	
	public function valid_password(){
		return $this->where('username','=',$_SESSION['username'])->get(array('password'));
	}
	
	public function edit_pwd($data){
		return $this->where('username','=',$_SESSION['username'])->update(array('password'=>md5($data)));
	}
}
