<?php namespace Home\Controller; 

use Hdphp\Controller\Controller;

//测试控制器
class GoodsController extends Controller{

	//构造函数
	public function __init()
	{
	}
	
    //动作
    public function goods(){
        //获取$gid
        $gid=$_GET['gid'];
        $goodData=Db::table('goods g')->join('detail d','g.gid','=','d.gid')->where('g.gid',$gid)->first();
        //得到当前商品下面的货品信息
        $goodData['pro']=Db::table('goods_list')->where('gid',$gid)->get();
        // 得到商品下总库存
        $goodData['total']=0;
        foreach($goodData['pro'] as $gk=>$gv){
            $goodData['total']+=$gv['inventory'];
        }
        // 获取当前商品的规格属性信息
        $attr=Db::table('goods_attr')->where('gid',$gid)->get();
        //循环组合商品属性信息
        //定义一个新数组接收组合好的信息
        $arr=array();
        foreach($attr as $k=>$v){
            $arr[$v['taid']][]=$v;
        }
        // p($arr);
        // 循环判断属性是否是规格
        $spec=array();
        foreach($arr as $kk=>$vv){
            //根据taid获取对应的属性信息
            $a=Db::table('type_attr')->where('taid',$kk)->first();
            // 判断$a里面的class是否是1
            if($a['class']==1){
                $spec[]=array(
                        'name'=>$a['taname'],
                        'opt'=>$vv
                    );
            }
        }
        View::with('spec',$spec);
        View::with('goodData',$goodData);
        View::make();
    }

    //ajaxGetPro异步获取货品数据
    public function ajaxGetPro(){
        //获取属性数据
        $combine=$_POST['combine'];
        $gid=$_POST['gid'];
        $combine=trim($combine,',');
        //根据combine条件及gid条件获取货品
        $where="combine='".$combine."' and gid=".$gid;
        $pros=Db::table('goods_list')->where($where)->first();
        // p($pros);
        if(empty($pros)){
            $this->ajax(array(
                    'state'=>0,
                    'message'=>'库存为0,请选择其他规格'
                ));
        }else if($pros['inventory']==0){
            $this->ajax(array(
                    'state'=>0,
                    'message'=>'库存为0,请选择其他规格'
                ));
        }else{
            // p($pros);
            // 将$pros的combine分割
            $combine=explode(',',$pros['combine']);
            // 获取商品信息
            $good=Db::table('goods')->where('gid',$gid)->first();
            $price=$good['shopprice'];
            //根据$combine的值，循环获取附加价格，加到$price上
            foreach($combine as $ck=>$cv){
                $price+=Db::table('goods_attr')->where('gtid',$cv)->pluck('added');
            }

            //组合商品价格及库存数量
            $arr=array(
                    'price'=>$price,
                    'inventory'=>$pros['inventory']
                );
            $this->ajax(array(
                    'state'=>1,
                    'message'=>$arr
                ));
        }
    }

    //异步添加购物车方法
    public function ajaxAddCart(){
        // 获取购买的数量
        $num=$_POST['num'];
        //获取商品规格信息
        $combine=trim($_POST['combine'],',');
        //$combine为空，就说明信息有误
        if($combine==''){
            $this->ajax(array(
                    'state'=>0,
                    'message'=>'请求有误，请核对后操作'
                ));
        }
        $good=Db::table('goods_list')->where('combine',$combine)->get();
        //如果已经有了$_SESSION['cart']，还需要判断当前规格对应的货品在购物车中有没有，有的话只增加数量
        if(isset($_SESSION['cart'])){
            //调用havaPro,判断货品是否以及存在
            $res=$this->havaPro($_SESSION['cart'],$good[0]['glid']);
            if(!empty($res)){
                //提取$res中的index值，这个值是以及存在的货品的在$_SESSION['cart']对应得索引
                $index=$res['index'];
                // 将$_SESSION['cart']中$index索引下的num增加$num
                $_SESSION['cart'][$index]['num']+=$num;
                $this->ajax(array(
                        'state'=>2,
                        'message'=>'添加成功'
                    ));
            }
        }
        //判断$good长度是否为0
        if(count($good)==0){
            $this->ajax(array(
                    'state'=>0,
                    'message'=>'库存为0,请重新选择规格'
                ));
        }else if($good[0]['inventory']==0){
            $this->ajax(array(
                    'state'=>0,
                    'message'=>'库存为0,请重新选择规格'
                ));
        }else{
            //将选择的规格对应的货品以及购买的数量压到session中
            $_SESSION['cart'][]=array(
                    'glid'=>$good[0]['glid'],'num'=>$num
                );
            $this->ajax(array(
                    'state'=>1,
                    'message'=>count($_SESSION['cart'])
                ));
        }
    }

    //判断货品id是否以及存在$_SESSION['cart']
    private function havaPro($sess,$glid){
        //循环$sess,判断$glid是否等于$v里面的glid
        foreach($sess as $k=>$v){
            //如果$v['glid']=$glid，那么就返回$v对应的键名
            if($v['glid']==$glid){
                return array('index'=>$k);
            }
        }
        return array();
    }
}
