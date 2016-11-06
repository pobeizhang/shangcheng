<?php namespace Admin\Model;
use Hdphp\Model\Model;
class Type extends Model{
	/*获取所有数据*/
	public function getAll(){
		return $this->get();
	}
	/*添加数据*/
	public function addData($post){
		return $this->insert($post);
	}
	/*获取指定的一条商品类型的信息*/
	public function getOneTypeInformation($tid){
		return $this->where('tid','=',$tid)->first();
	}
	/*修改商品类型的方法*/
	public function editData($tid,$post){
		return $this->where('tid','=',$tid)->update(array('tname'=>$post['tname']));
	}
	/*删除一条商品类型的信息的方法*/
	public function delData($tid){
		$data=Db::table('type_attr')->where('tid','=',$tid)->get(array('taid'));
		
		foreach($data as $k=>$v){
			Db::table('type_attr')->where('taid','=',$v['taid'])->delete();
			
		}
		$res=$this->where('tid','=',$tid)->delete();
		return $res;
//		p($data);
//		return $this->where('tid','=',$tid)->delete();
	}
}
