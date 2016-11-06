<?php namespace Admin\Model;
use Hdphp\Model\Model;
class Category extends Model{
	/*获取所有分类信息*/
	public function getAll(){
		return $this->get();
	}
	/*添加分类*/
	public function addCate($post){
		return $this->insert($post);
	}
	/*获取要修改分类信息*/
	public function getEditCateData($cid){
		return $this->where('cid','=',$cid)->first();
	}
	/*修改分类*/
	public function edit($post){
		return $this->where('cid','=',$post['cid'])->update(array('cname'=>$post['cname'],'sort'=>$post['sort'],'tid'=>$post['tid']));
	}
	/*删除分类信息*/
	public function del($cid){
		return $this->where('cid','=',$cid)->delete();
	}
	/*添加子分类*/
	public function addSon($post){
		return $this->insert($post);
	}
	/*子分类列表*/
	public function getSonCate($cid){
		$arr=array();
		$data=Db::table('category c')->leftJoin('type t','c.tid','=','t.tid')->get();
		foreach($data as $k=>$v){
			if(Data::isChild($data,$v['cid'],$cid)){
				$arr[]=$v;
			}
		}
		$arr[]=$this->where('cid','=',$cid)->first();
		return $arr;
	}
}
