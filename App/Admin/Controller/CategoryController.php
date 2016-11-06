<?php namespace Admin\Controller;
use Hdphp\Controller\Controller;
use Admin\Model\Type;
use Admin\Model\Category;
class CategoryController extends Controller{
	private $category;
	public function __init(){
		$this->category=new Category();
	}
	/*分类信息*/
	public function category(){
		if(IS_POST){
			$arr=array();
			foreach($_POST['sort'] as $k=>$v){
				$arr[]=array(
					'sort'=>$v,
					'cid'=>$_POST['cid'][$k]
				);
			}
			foreach($arr as $kk=>$vv){
				$res=Db::table('category')->where('cid','=',$vv['cid'])->update(array('sort'=>$vv['sort']));
			}
			if($res){
					$this->success('正在为你排序，请稍等...',U('Admin/Category/category'));
				}else{
					$this->error('排序失败',U('Admin/Category/category'));
				}
		}else{
			/*一键排序的一些判断*/
			$sort_value=Q('sort');
			if($sort_value==0){
				/*升序排序*/ 
				$sort="asc";
			}else{
				/*降序排序*/
				$sort="desc";
			}
			$catedata=Db::table('category c')->leftJoin('type t','c.tid','=','t.tid')->orderBy('sort',$sort)->get();
			$catedata=Data::tree($catedata,'cname');
			View::with('catedata',$catedata);
			View::make();
		}
		
	}
	/*添加分类*/
	public function addCategory(){
		if(IS_POST){
			$res=$this->category->addCate($_POST);
			if($res){
				$this->success('添加分类成功',U('Admin/Category/category'));
			}else{
				$this->success('添加分类失败',U('Admin/Category/category'));
			}
		}else{
			$types=new Type();
			$typesdata=$types->getAll();
			View::with('typesdata',$typesdata);
			View::make();
		}
	}
	/*修改分类信息*/
	public function editCategory(){
		if(IS_POST){
			
			$res=$this->category->edit($_POST);
			if($res){
				$this->success('修改分类成功',U('Admin/Category/category'));
			}else{
				$this->success('修改分类失败',U('Admin/Category/category'));
			}
		}else{
			$editdata=$this->category->getEditCateData(Q('cid'));
			$types=new Type();
			$typesdata=$types->getAll();
			View::with('editdata',$editdata);
			View::with('typesdata',$typesdata);
			View::make();
		}
	}
	/*删除分类信息*/
	public function delCategory(){
		$res=$this->category->del(Q('cid'));
		if($res){
			$this->success('删除分类成功',U('Admin/Category/category'));
		}else{
			$this->success('删除分类失败',U('Admin/Category/category'));
		}
	}
	/*添加子分类信息*/
	public function addSonCategory(){
		if(IS_POST){
			$res=$this->category->addSon($_POST);
			if($res){
				$this->success('子分类添加成功',U('Admin/Category/category'));
			}else{
				$this->error('添加子分类失败',U('Admin/Catgory/category'));
			}
		}else{
			$cdata=$this->category->where('cid','=',Q('pid'))->first();
			View::with('cdata',$cdata);
			$typedata=Db::table('type')->get();
			View::with('typedata',$typedata);
			View::make();
		}
	}
	/*子分类列表*/
	public function sonCategory(){
		$scate=$this->category->getSonCate(Q('cid'));
		$scate=Data::tree($scate,'cname');
		View::with('scate',$scate);
		View::make();
	}
	/*修改子分类*/
	public function editSonCategory(){
		if(IS_POST){
			$res=$this->category->edit($_POST);
			if($res){
				$this->success('修改子分类成功',U('Admin/Category/category'));
			}else{
				$this->success('修改子分类失败',U('Admin/Category/category'));
			}
		}else{
			$data=$this->category->where('cid','=',Q('cid'))->first();
			View::with('data',$data);
			$typedata=Db::table('type')->get();
			View::with('typedata',$typedata);
			View::make();
		}
	}
}
