<?php namespace Home\Controller;

use Hdphp\Controller\Controller;

//测试控制器
class CateController extends Controller{

    //构造函数
    public function __init()
    {
    }

    //动作
    public function cate(){
        $cdata=Db::table('category')->get();

        $cid=$_GET['cid'];
        $arr=$this->getChild($cid);
        $cids=array();
        if(empty($arr)){
            $cids[]=$cid;
        }else{
            foreach($arr as $k=>$v){
                $cids[]=$v['cid'];
            }
        }

        // p($cids);
        $gids=Db::table('goods')->whereIn('cid',$cids)->lists('gid');
        $attrs=$this->getAttr($gids);
        // p($attrs);
        $num=count($attrs);
        $param=isset($_GET['sx'])?explode('_',$_GET['sx']):0;
        $filter=count($param)!=$num?array_fill(0,$num,0):$param;
        $goods=$this->getGooodsByFilter($filter,$gids);
        View::with('cdata',$cdata);
        View::with('filter',$filter);
        View::with('goods',$goods);
        View::with('attrs',$attrs);
        View::make();
    }

    /*获取点击的分类对应的商品信息*/
    public function getGoods($cid){
      	$gdata=Db::table('category')->get();
      	$goods=array();
      	foreach($gdata as $gk=>$gv){
      		if($gv['cid']==$cid){
      			$goods[]=$gv;
      			$goods=array_merge($goods,$this->getGoods($gv['cid']));
      		}
      	}
      	return $goods;
    }
    // 获取所选分类子类
    private function getChild($cid){
      	$cates=Db::table('category')->get();
      	$arr=array();
      	foreach($cates as $k=>$v){
      		if($v['pid']==$cid){
      			$arr[]=$v;
      			$arr=array_merge($arr,$this->getChild($v['cid']));
      		}
      	}
      	return $arr;
    }
    //获取商品属性
    private function getAttr($gids){
      	$attrs=Db::table('goods_attr ga')->join('type_attr ta','ga.taid','=','ta.taid')->where('ta.class',1)->whereIn('gid',$gids)->groupBy('gtvalue')->get();
      	$arr=array();
      	foreach($attrs as $k=>$v){
      		$arr[$v['taid']][]=array(
      				'id'=>$v['gtid'],
      				'value'=>$v['gtvalue']
      			);
      	}
      	$attr=array();
      	foreach($arr as $kk=>$vv){
      		$name=Db::table('type_attr')->where('taid',$kk)->pluck('taname');
      		$attr[]=array(
      				'name'=>$name,
      				'opt'=>$vv
      			);
      	}
      	return $attr;
    }

    private function getGooodsByFilter($filter,$gids){
        $goodid=array();
        //循环$filter获取商品的id
        foreach($filter as $k=>$v){
          // 判断$v是否大于0才进行筛选
          if($v>0){
            // $sql='select * from ccshop_goods_attr where gtid='.$v;
            $sql="select a.gid from lashou_goods_attr a join lashou_goods_attr b on a.gtvalue=b.gtvalue where b.gtid=".$v;
            $data=Db::select($sql);
            // p($data);
            $goodid[]=$data;
          }
        }
        //循环重组数组，方便组合sql语句
        $arr=array();
        foreach ($goodid as $kk => $vv) {
            foreach($vv as $gk=>$gv){
                $arr[$kk][$gk]=$gv['gid'];
            }
        }
        $where='';
        $where.="gid in(".implode(',',$gids).")";
        foreach($arr as $ak=>$av){
            $where.=" and gid in(".implode(',',$av).")";
        }
        // echo $where;
        $goods=DB::table('goods')->where($where)->get();
        return $goods;
    }
}
