<?php namespace Admin\Controller;
use Hdphp\Controller\Controller;
use Admin\Model\Brand;
class BrandController extends Controller{
	private $brand;
	public function __init(){
		$this->brand=new Brand();
	}
	/*品牌列表*/
	public function brand(){
		if(IS_POST){
			$arr=array();
			foreach($_POST['sort'] as $k=>$v){
				$arr[]=array(
					'sort'=>$v,
					'bid'=>$_POST['bid'][$k]
				);
			}
			foreach($arr as $kk=>$vv){
				$res=Db::table('brand')->where('bid','=',$vv['bid'])->update(array('sort'=>$vv['sort']));
			}
			if($res){
					$this->success('正在为你排序，请稍等...',U('Admin/Brand/brand'));
				}else{
					$this->error('排序失败',U('Admin/Brand/brand'));
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
			$brandData=$this->brand->orderBy('sort',$sort)->get();
			View::with('brandData',$brandData);
		}	View::make();
	}
	/*添加品牌*/
	public function addBrand(){
		if(IS_POST){
			$res=$this->brand->add_brand($_POST);
			if($res){
				$this->success('品牌添加成功',U('Admin/Brand/brand'));
			}else{
				$this->error('品牌添加失败',U('Admin/Brand/brand'));
			}
		}else{
			View::make();
		}
	}
	/*上传品牌logo*/
	public function up(){
		$filePath=Upload::type('jpg,png,gif')->make();
		echo $filePath[0]['path'];
	}
	/*编辑品牌*/
	public function editBrand(){
		if(IS_POST){
			$res=$this->brand->edit_brand($_POST);
			if($res){
				$this->success('品牌修改成功',U('Admin/Brand/brand'));
			}else{
				$this->error('品牌修改失败',U('Admin/Brand/brand'));
			}
		}else{
			$editData=$this->brand->where('bid','=',Q('bid'))->first();
			View::with('editData',$editData);
			View::make();
		}
	}
	/*删除品牌*/
	public function delBrand(){
		$res=$this->brand->del_brand(Q('bid'));
		if($res){
			$this->success('品牌删除成功',U('Admin/Brand/brand'));
		}else{
			$this->error('品牌删除失败',U('Admin/Brand/brand'));
		}
	}
}
