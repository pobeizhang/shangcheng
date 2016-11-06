<?php namespace Admin\Controller; 
use Hdphp\Controller\Controller;
use Admin\Model\Type;
use Admin\Model\Type_attr;
//测试控制器
class ShopTypeController extends Controller{
	private $type;
	private $type_attr;
	//构造函数
	public function __init()
	{
		$this->type=new Type();
		$this->type_attr=new Type_attr();
		/*if(!isset($_SESSION['username'])){
			$this->success('请先登录',U('Admin/Login/login'));
		}*/
	}
	
    /*商品类型列表*/
    public function shopType(){
		$allData=$this->type->getAll();
		View::with('allData',$allData);
		View::make();
    }
	/*添加商品类型的方法*/
	public function addType(){
		if(IS_POST){
			$res=$this->type->addData($_POST);
			if($res){
				$this->success('添加成功',U('Admin/ShopType/shopType'));
			}else{
				$this->error('添加失败',U('Admin/ShopType/shopType'));
			}
		}else{
			View::make();
		}
		
	}
	/*编辑商品类型的方法*/
	public function editShopType(){
		if(IS_POST){
			$editres=$this->type->editData(Q('tid'),$_POST);
			if($editres){
				$this->success('修改成功',U('Admin/ShopType/shopType'));
			}else{
				$this->error('修改失败',U('Admin/ShopType/shopType'));
			}
		}else{
			$oneTypeData=$this->type->getOneTypeInformation(Q('tid'));
			View::with('oneTypeData',$oneTypeData);
			View::make();
		}
	}
	/*删除商品类型的方法*/
	public function delShopType(){
		$delres=$this->type->delData(Q('tid'));
		if($delres){
			$this->success('删除成功',U('Admin/ShopType/shopType'));
		}else{
			$this->error('删除失败',U('Admin/ShopType/shopType'));
		}
	}
	/*商品属性*/
	public function shopAttribute(){
		$attrData=$this->type_attr->where('tid','=',Q('tid'))->getAll();
		View::with('attrData',$attrData);
		View::make();
	}
	/*添加商品属性*/
	public function addShopAttribute(){
		if(IS_POST){
			$res=$this->type_attr->addAttribute($_POST);
			if($res){
				$this->success('添加成功',U('Admin/ShopType/shopType'));
			}else{
				$this->error('添加失败',U('Admin/ShopType/shopType'));
			}
		}else{
			
			View::make();
		}
	}
	/*编辑商品属性*/
	public function editTypeAttr(){
		if(IS_POST){
			$res=$this->type_attr->updateTypeAttr($_POST);
			if($res){
				$this->success('更新成功',U('Admin/ShopType/shopType'));
			}else{
				$this->error('更新失败',U('Admin/ShopType/shopType'));
			}
		}else{
			$ed=$this->type_attr->getOneData(Q('taid'));
			View::with('ed',$ed);
			View::make();
		}
	}
	/*删除指定商品属性*/
	public function delTypeAttr(){
		$res=$this->type_attr->delOneAttr(Q('taid'));
		if($res){
			$this->success('删除成功',U('Admin/ShopType/shopType'));
		}else{
			$this->error('删除失败',U('Admin/ShopType/shopType'));
		}
	}
}
