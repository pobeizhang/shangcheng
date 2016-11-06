<?php namespace Home\Controller; 

use Hdphp\Controller\Controller;

//测试控制器
class IndexController extends Controller{

	//构造函数
	public function __init()
	{
	}
	
    //动作
    public function index(){
    	$categoryData=Db::table('category')->where('pid',0)->get();
    	// p($categoryData);
    	foreach ($categoryData as $k => $v) {
    		$categoryData[$k]['child1']=Db::table('category')->where('pid',$v['cid'])->get();
    	}
    	foreach ($categoryData as $kk => $vv) {
    		foreach ($vv['child1'] as $kkk => $vvv) {
    			$categoryData[$kk]['child1'][$kkk]['child2']=Db::table('category')->where('pid',$vvv['cid'])->get();
    		}
    	}
    	// p($categoryData);
    	// die;
       // View::with('categoryData',$categoryData);
       View::make();
    }
}
