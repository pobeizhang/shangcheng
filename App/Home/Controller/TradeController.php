<?php namespace Home\Controller; 

use Hdphp\Controller\Controller;

//测试控制器
class TradeController extends Controller{

	//构造函数
	public function __init()
	{
	}
	
    //确认订单方法
	public function submitOrder(){
		$totalprice=0;
		// p($_POST);
		// p($_SESSION['goodinfo']);
		// 循环提交的购物车索引infoindex
		foreach($_POST['infoIndex'] as $k=>$v){
			$totalprice+=$_SESSION['goodinfo'][$v]['totalprice'];
		}
		// p($totalprice);
		View::with('index',$_POST['infoIndex']);
		View::with('totalprice',$totalprice);
		View::with('goodinfo',$_SESSION['goodinfo']);
		View::make();
	}

	// 提交订单
	public function trade(){
		if(IS_POST){
			/*// p($_POST);
			p($_SESSION['goodinfo']);
			die;*/
			if(isset($_POST['infoIndex'])&&$_POST['consignee']!=''&&$_POST['address']!=''&&$_POST['mobile']!=''){
				// 组合订单表需要的数据
				$data=array(
						'number'=>date('YmdHis').mt_rand(1000,10000),
						'consignee'=>$_POST['consignee'],
						'address'=>$_POST['address'],
						'mobile'=>$_POST['mobile'],
						'total'=>$_POST['total'],
						'time'=>time(),
						'remark'=>$_POST['remark'],
						'status'=>'未付款',
						'uid'=>Db::table('user')->where('username',$_SESSION['preusername'])->pluck('uid')
					);
				//将数据插入到订单表中,并得到oid
				$oid=Db::table('order')->insertGetId($data);
				$_SESSION['oid']=$oid;
				// p($_SESSION['goodinfo']);
				// p($_SESSION['cart']);
				/*foreach($_SESSION['goodinfo'] as $k=>$v){
					$order_list=array(
							'quantity'=>$_POST['amount'][$k]['num'],
							'subtotal'=>$v['shopprice']*$_POST['amount'][$k]['num'],
							'gid'=>$v['gid'],
							'oid'=>$oid,
							'glid'=>$v['pid'],
						);
					$res=Db::table('order_list')->insert($order_list);
				}*/
				foreach($_SESSION['goodinfo'] as $k=>$v){
					foreach($_POST['infoIndex'] as $ki=>$oi){
						if($k==$oi){
							$order_list=array(
								'quantity'=>$_POST['amount'][$k]['num'],
								'subtotal'=>$v['shopprice']*$_POST['amount'][$k]['num'],
								'gid'=>$v['gid'],
								'oid'=>$oid,
								'glid'=>$v['pid'],
							);
							$res=Db::table('order_list')->insert($order_list);
						}
					}	
				}
				$this->success('正在提交订单，即将进入付款页面......',U('Home/Trade/trade'),2);
			}else{
				$this->error('未选择商品或者地址信息不完整',U('Home/ShoppingCart/shoppingCart'));
			}
		}else{
			/*//求取购物车中货品的总价
			$totalprice=0;
			foreach($_SESSION['goodinfo'] as $gk=>$gv){
				$totalprice+=$gv['totalprice'];
			}
			// p($_SESSION['goodinfo']);
			View::with('totalprice',$totalprice);*/
			// p($_SESSION['oid']);
			$oid=$_SESSION['oid'];
			// p($oid);
			$orders_prices=Db::table('order')->where('oid',$oid)->pluck('total');
			$uid=Db::table('user')->where('username',$_SESSION['preusername'])->pluck('uid');
			$orders=Db::table('order o')->join('order_list ol','o.oid','=','ol.oid')->where('uid',$uid)->get();
			// p($orders);die;
			$arrs=array();
			foreach($orders as $k=>$v){
				if($v['oid']==$oid){
					$arrs[]=$v;
				}
			}
			// p($arrs);
			foreach($arrs as $ak=>$av){
				$arrs[$ak]['gname']=Db::table('goods')->where('gid',$av['gid'])->pluck('gname');
				$arrs[$ak]['pic']=Db::table('goods')->where('gid',$av['gid'])->pluck('pic');
				$combine=explode(',',Db::table('goods_list')->where('glid',$av['glid'])->pluck('combine'));
				$spec=Db::table('goods_attr')->whereIn('gtid',$combine)->get(array('gtvalue'));
				$specs=array();
				foreach($spec as $sk=>$sv){
					$specs[$sk]=$sv['gtvalue'];
				}
				$arrs[$ak]['spec']=$specs;
			}
			// p($arrs);
			$account=Db::table('user')->where('username',$_SESSION['preusername'])->pluck('account');
			// p($account);
			View::with('account',$account);
			View::with('orders_prices',$orders_prices);
			View::with('orders',$arrs);
			View::make();
		}		
	}

	//支付页面
	public function zhifu(){
		if(IS_POST){
			// p($_POST);
			//订单id
			$oid=$_POST['oid'];
			//需要支付的总金额
			$account=$_POST['account'];
			$account_money=Db::table('user')->where('username',$_SESSION['preusername'])->pluck('account');
			$account_money=$account_money-$account;
			$res1=Db::table('user')->where('username',$_SESSION['preusername'])->update(array('account'=>$account_money));
			$res2=Db::table('order')->where('oid',$oid)->update(array('status'=>'已完成'));
			if($res1&&$res2){
				$this->success('正在支付，请稍等...',U('Home/Trade/zhifu'));
			}else{
				$this->error('由于某种原因，支付未能完成',U('Home/Trade/trade'));
			}
		}else{
			View::make();
		}		
	}
}
