<?php namespace Home\Controller; 

use Hdphp\Controller\Controller;

//测试控制器
class MemberController extends Controller{

	//构造函数
	public function __init()
	{
	}
	
    //动作
    public function my_orders(){
       if(IS_POST){
       		p($_POST);
    	}else{
    	   $uid=Db::table('user')->where('username',$_SESSION['preusername'])->pluck('uid');
	       $orders=Db::table('order o')->join('order_list ol','o.oid','=','ol.oid')->where('uid',$uid)->get();
	       // p($orders);die;
	       foreach($orders as $k=>$v){
	       		$orders[$k]['gname']=Db::table('goods')->where('gid',$v['gid'])->pluck('gname');
	       		$orders[$k]['pic']=Db::table('goods')->where('gid',$v['gid'])->pluck('pic');
	       }
	       // p($orders);
	       /*账户余额*/
	       $account=Db::table('user')->where('username',$_SESSION['preusername'])->pluck('account');
	       /*购买成功的数量*/
	       $numbers=Db::table('order m')->join('order_list n','n.oid','=','m.oid')->where('uid',$uid)->where('status','已完成')->get();
	       $numbers=count($numbers);
	       /*未付款数量*/
	       $error=Db::table('order m')->join('order_list n','n.oid','=','m.oid')->where('uid',$uid)->where('status','未付款')->get();
	       $error=count($error);
	       /*已付款的数量*/
	       $success=Db::table('order m')->join('order_list n','n.oid','=','m.oid')->where('uid',$uid)->where('status','已完成')->get();
	       $success=count($success);
	       View::with('success',$success);
	       View::with('error',$error);
	       View::with('numbers',$numbers);
	       View::with('account',$account);
	       View::with('orders',$orders);
	       View::make();
    	}
       
    }
    /*自定义单间物品付款*/
	public function oneGoodPay(){
		// 待付款商品id
		$oid=$_GET['oid'];
		// 付款金额
		$account=$_GET['account'];
		$account_money=Db::table('user')->where('username',$_SESSION['preusername'])->pluck('account');
		$account_money=$account_money-$account;
		$res1=Db::table('user')->where('username',$_SESSION['preusername'])->update(array('account'=>$account_money));
		$res2=Db::table('order')->where('oid',$oid)->update(array('status'=>'已完成'));
		if($res1&&$res2){
			$this->success('正在支付，请稍等...',U('Home/Member/my_orders'));
		}else{
			$this->error('由于某种原因，支付未能完成',U('Home/Member/my_orders'));
		}
	}
	/*已付款页面*/
	public function my_payed(){
		$uid=Db::table('user')->where('username',$_SESSION['preusername'])->pluck('uid');
		$orders=Db::table('order o')->join('order_list ol','o.oid','=','ol.oid')->where('uid',$uid)->get();
		// p($orders);die;
		foreach($orders as $k=>$v){
			$orders[$k]['gname']=Db::table('goods')->where('gid',$v['gid'])->pluck('gname');
			$orders[$k]['pic']=Db::table('goods')->where('gid',$v['gid'])->pluck('pic');
		}
		// p($orders);
		/*账户余额*/
		$account=Db::table('user')->where('username',$_SESSION['preusername'])->pluck('account');
		/*购买成功的数量*/
		$numbers=Db::table('order m')->join('order_list n','n.oid','=','m.oid')->where('uid',$uid)->where('status','已完成')->get();
		$numbers=count($numbers);
		/*未付款数量*/
		$error=Db::table('order m')->join('order_list n','n.oid','=','m.oid')->where('uid',$uid)->where('status','未付款')->get();
		$error=count($error);
		/*已付款的数量*/
        $success=Db::table('order m')->join('order_list n','n.oid','=','m.oid')->where('uid',$uid)->where('status','已完成')->get();
        $success=count($success);
        View::with('success',$success);
		View::with('error',$error);
		View::with('numbers',$numbers);
		View::with('account',$account);
		View::with('orders',$orders);
		View::make();
	}
	public function my_collections(){
       View::make();
    }
	
	public function my_collections_shop(){
       View::make();
    }
	
	public function my_address(){
       View::make();
    }
	
	public function my_bills(){
		$uid=Db::table('user')->where('username',$_SESSION['preusername'])->pluck('uid');
	    /*账户余额*/
	    $account=Db::table('user')->where('username',$_SESSION['preusername'])->pluck('account');
	    /*购买成功的数量*/
	    $numbers=Db::table('order m')->join('order_list n','n.oid','=','m.oid')->where('uid',$uid)->where('status','已完成')->get();
	    $numbers=count($numbers);
	    $orders=Db::table('order o')->join('order_list ol','o.oid','=','ol.oid')->where('uid',$uid)->get();
	    // p($orders);die;
	    foreach($orders as $k=>$v){
	        $orders[$k]['gname']=Db::table('goods')->where('gid',$v['gid'])->pluck('gname');
	       	$orders[$k]['pic']=Db::table('goods')->where('gid',$v['gid'])->pluck('pic');
	       	$cid=Db::table('goods')->where('gid',$v['gid'])->pluck('cid');
	       	$orders[$k]['cname']=Db::table('category')->where('cid',$cid)->pluck('cname');
	    }
	    // p($orders);
	    View::with('orders',$orders);
	    View::with('numbers',$numbers);
		View::with('account',$account);
        View::make();
    }
	
	public function my_setting(){
       View::make();
    }
	
	public function my_news(){
       View::make();
    }

    /*账户充值*/
    public function chongzhi(){
    	$money=$_POST['data'];
    	$money=$money+Db::table('user')->where('username',$_SESSION['preusername'])->pluck('account');
    	$res=Db::table('user')->where('username',$_SESSION['preusername'])->update(array('account'=>$money));
    	// p($res);die;
    	if($res){
    		$this->ajax(array(
    				'state'=>'1',
    				'money'=>$money
    			));
    	}else{
    		$this->ajax(array(
    				'state'=>'0',
    				'money'=>$_POST['data']
    			));
    	}
    	die;
    }
}