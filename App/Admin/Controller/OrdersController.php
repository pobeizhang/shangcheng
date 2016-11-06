<?php namespace Admin\Controller;
use Hdphp\Controller\Controller;
class OrdersController extends Controller{
	public function orders(){
		$orders=Db::table('order')->get();
		// p($orders);
		View::with('orders',$orders);
		View::make();
	}
	/*发货操作*/
	public function fahuo(){
		$oid=Q('oid');
		$res=Db::table('order')->where('oid',$oid)->update(array('get'=>'1'));
		if($res){
			go('Admin/Orders/orders');
		}else{
			$this->error('发货失败',U('Admin/Orders/orders'));
		}
	}
}