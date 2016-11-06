<?php namespace Admin\Model;
use Hdphp\Model\Model;
class Type_attr extends Model{
	/*获取所有商品属性信息*/
	public function getAll(){
		return $this->get();
	}
	/*添加商品属性*/
	public function addAttribute($post){
		return $this->insert($post);
	}
	/*获取指定商品类型属性信息*/
	public function getOneData($taid){
		return $this->where('taid','=',$taid)->first();
	}
	/*更新指定商品属性的信息*/
	public function updateTypeAttr($post){
		return $this->where('taid','=',$post['taid'])->update($post);
	}
	/*删除指定商品信息*/
	public function delOneAttr($taid){
		return $this->where('taid','=',$taid)->delete();
	}
	/*获取指定tid对应的商品信息*/
	public function getDataByTid($tid){
		return $this->where('tid',$tid)->get();
	}
}
