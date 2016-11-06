<?php namespace Home\Controller; 

use Hdphp\Controller\Controller;

//测试控制器
class ShoppingCartController extends Controller{

	//构造函数
	public function __init()
	{
	}
	
    //动作
    public function shoppingcart(){
    	//判断是否以及添加购物车
		if(isset($_SESSION['cart'])){
			// p($_SESSION['cart']);
			//循环购物车数据，得到对应的商品详细信息
			$goodinfo=array();
			foreach($_SESSION['cart'] as $k=>$v){
				//根据$v['glid']获取商品id
				$gid=Db::table('goods_list')->where('glid',$v['glid'])->pluck('gid');
				// p($gid);
				// 根据$gid获取商品信息
				$good=Db::table('goods')->where('gid',$gid)->first();
				//得到货品的规格组合
				$combine=Db::table('goods_list')->where('glid',$v['glid'])->pluck('combine');
				// p($combine);
				// 将货品信息压到商品信息中
				$good['pid']=$v['glid'];
				//将当前货品的数量压入
				$good['num']=$v['num'];
				// 拆分规格信息
				$specs=explode(',',$combine);
				// p($specs);
				//循环规格，得到规格信息
				foreach($specs as $sk=>$sv){
					$specinfo=Db::table('goods_attr')->where('gtid',$sv)->first();
					// 压入附加价格
					$good['shopprice']+=$specinfo['added'];
					// 压入规格值
					$good['spec'][]=$specinfo['gtvalue'];
				}
				//得到当前循环的购物车商品总价格
				$good['totalprice']=$v['num']*$good['shopprice'];
				// p($good);
				// 将获取的所有商品信息压到$goodinfo
				//将当前购物车的键名压到商品信息中
				$good['cartIndex']=$k;
				$goodinfo[]=$good;
			}
			//求取购物车中货品的总价
			$totalprice=0;
			/*foreach($goodinfo as $gk=>$gv){
				$totalprice+=$gv['totalprice'];
			}*/
			// p($goodinfo);
			// p($_SESSION['cart']);
			//将goodinfo数据添加到session中
			$_SESSION['goodinfo']=$goodinfo;
			View::with('goodinfo',$goodinfo);
			View::with('totalprice',$totalprice);
		}
        View::make();
    }

    //删除购物车方法
	public function delCart(){
		$index=$_GET['index'];
		//删除$_session['cart']中$index对应的数据
		unset($_SESSION['cart'][$index]);
		//删除完 购物车后判断购物车剩余商品数量
		if(count($_SESSION['cart'])==0){
			unset($_SESSION['cart']);
		}
		//跳转到购物车首页
		go('shoppingCart');
	}

	

}
