<?php namespace Admin\Model;
use Hdphp\Model\Model;
class Brand extends Model{
	/*添加品牌*/
	public function add_brand($post){
		return $this->insert($post);
	}
	/*修改品牌*/
	public function edit_brand($post){
		return $this->where('bid','=',$post['bid'])->update(array('bname'=>$post['bname'],'sort'=>$post['sort'],'ishot'=>$post['ishot'],'logo'=>$post['logo']));
	}
	/*删除品牌*/
	public function del_brand($bid){
		return $this->where('bid','=',$bid)->delete();
	}
}
