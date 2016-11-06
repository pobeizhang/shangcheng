<?php namespace Admin\Controller;
use Hdphp\Controller\Controller;
use Admin\Model\Type_attr;
class GoodsListsController extends Controller{
	private $type_attr;
	public function __init(){
		$this->type_attr=new Type_attr();
	}
	/*货品列表和添加货品的方法*/
	public function index(){
		if(IS_POST){
			$gid=$_GET['gid'];
			$tid=$_GET['tid'];
			$_POST['gid']=$gid;
			$combine=$_POST['combine'];
			$combine=implode(',',$combine);
			$_POST['combine']=$combine;
			// p($_POST);die;
			$combineData=Db::table('goods_list')->get(array('combine'));
			foreach($combineData as $tk=>$tv){
				if($combine==$tv['combine']){
					$this->error('该货品组合已存在',U('Admin/GoodsLists/index',array('gid'=>$gid,'tid'=>$tid)));
					die;
				}
			}
			if($_POST['number']==''){
				$_POST['number']=time().'_'.$gid;
			}
			$res=Db::table('goods_list')->insert($_POST);
			if($res){
				$this->success('货品添加成功',U('Admin/GoodsLists/index',array('gid'=>$gid,'tid'=>$tid)));
			}else{
				$this->error('货品添加失败',U('Admin/GoodsLists/index',array('gid'=>$gid,'tid'=>$tid)));
			}
		}else{
			$gid=$_GET['gid'];
			$tid=$_GET['tid'];
			$spec=Db::table('type_attr')->field('taname','taid')->where("tid=$tid and class=1")->get();
			foreach($spec as $k=>$v){
				$spec[$k]['opt']=Db::table('goods_attr')->where("gid=$gid and taid={$v['taid']}")->get();
			}
			$gdata=Db::table('goods_list')->where('gid',$gid)->get();
			// p($gdata);
			foreach($gdata as $dk=>$dv){
				$gdata[$dk]['combine']=Db::table('goods_attr')->where("gtid in({$dv['combine']})")->get();
			}
			/*p($gdata);
			p($spec);*/
			// p($spec);
			View::with('gdata',$gdata);
			View::with('spec',$spec);
			View::make();
		}
	}
	/*删除货品的方法*/
	public function del(){
		$res=Db::table('goods_list')->where('glid',Q('glid'))->delete();
		if($res){
			$this->success('货品删除成功',U('Admin/GoodsLists/index',array('gid'=>Q('gid'),'tid'=>Q('tid'))));
		}else{
			$this->error('货品删除失败',U('Admin/GoodsLists/index',array('gid'=>Q('gid'),'tid'=>Q('tid'))));
		}
	}
	/*修改货品的方法*/
	public function edit(){
		p($_POST);
	}
}
