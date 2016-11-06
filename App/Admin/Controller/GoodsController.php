<?php
namespace Admin\Controller;

use Hdphp\Controller\Controller;
use Admin\Model\Goods;
//测试控制器
class GoodsController extends Controller {
	private $goods;
	//构造函数
	public function __init() {
		$this -> goods = new Goods();
	}

	//商品列表
	public function index() {
		$gdata = Db::table('goods') -> get();
		foreach($gdata as $gk=>$gv){
			$sumInventory=0;
			$sum=Db::table('goods_list')->where('gid',$gv['gid'])->lists('inventory');
			// $gdata[$gk]['gnumber']=array_sum($sum);
			if(!empty($sum)){
				foreach($sum as $sk=>$sv){
					$sumInventory+=$sv;
				}
				$gdata[$gk]['gnumber']=$sumInventory;
			}
		}
		View::with('gdata', $gdata);
		View::make();
	}

	/*添加商品的方法*/
	//动作
	public function add() {
		if (IS_POST) {
			/*商品基本信息*/
			$uid = Db::table('admin') -> where('username', $_SESSION['username']) -> pluck('uid');
			$goods = array('gname' => $_POST['gname'], 'unit' => $_POST['unit'], 'marketprice' => $_POST['marketprice'], 'shopprice' => $_POST['shopprice'], 'pic' => $_POST['pic'], 'click' => $_POST['click'], 'time' => time(), 'uid' => $uid, 'bid' => $_POST['bid'], 'cid' => $_POST['cid'], 'tid' => $_POST['tid']);
			/*开启事务*/
			Db::beginTransaction();
			/*定义一个状态指示符*/
			$state = true;
			/*先将商品基本信息添加到数据库*/
			$gid = Db::table('goods') -> insertGetId($goods);
			if ($gid) {
				$state = true;
			} else {
				$state = false;
			}

			/*商品详细信息*/
			$detail = array('intro' => $_POST['intro'], 'service' => $_POST['service'], 'gid' => $gid, 'small' => 0, 'medium' => $_POST['medium'], 'big' => 0);
			/*再将商品详细信息添加到数据库*/
			$detailres = Db::table('detail') -> insert($detail);
			if ($detailres) {
				$state = true;
			} else {
				$state = false;
			}
			/*商品规格信息*/
			$goodsattr = array();
			foreach ($_POST['spec'] as $k => $v) {
				foreach ($v as $kk => $vv) {
					$goodsattr[] = array('taid' => $k, 'gtvalue' => $vv, 'added' => $_POST['addprice'][$k][$kk], 'gid' => $gid);
				}
			}
			//p($goodsspec);
			/*商品属性信息*/
			if(isset($_POST['attr'])){
				foreach ($_POST['attr'] as $atk => $atv) {
					$goodsattr[] = array('taid' => $atk, 'gtvalue' => $atv, 'added' => 0, 'gid' => $gid);
				}
			}
			
			//			p($goodsattr);die;
			/*将商品的属性和规格信息添加到数据库中*/
			foreach ($goodsattr as $gk => $gv) {
				$res = Db::table('goods_attr') -> insert($gv);
				if ($res === false) {
					$state = false;
				} else {
					$state = true;
				}
			}
			if ($state) {
				Db::commit();
				$this -> success('商品信息添加成功', U('Admin/Goods/index'));
			} else {
				Db::rollback();
				$this -> error('商品信息添加失败', U('Admin/Goods/index'));
			}
		} else {
			/*获取商品的分类信息*/
			$cateData = Db::table('category') -> get();
			$cateData = Data::tree($cateData, 'cname');
			View::with('cateData', $cateData);
			/*获取商品品牌的信息*/
			$brandData = Db::table('brand') -> get();
			View::with('brandData', $brandData);
			View::make();
		}
	}

	/*获取属性*/
	public function getAttr() {
		//获取tid
		$tid = $_POST['tid'];
		$attrs = Db::table('type_attr') -> where('tid', '=', $tid) -> get();
		//循环$attrs组合普通属性及规格属性的表单信息
		// 定义变量，接受普通属性及规格属性的表单信息
		$attr = $spec = '';
		foreach ($attrs as $k => $v) {
			//判断当前的属性是规格还是普通
			//1表示规格，不等于1表示是普通
			if ($v['class'] == 1) {
				$spec .= '<tr class="info"><td>' . $v['taname'] . '</td>';
				if ($v['tavalue'] == '') {
					//因为是规格，所以需要有附加价格的表单
					$spec .= '<td><input type="text" name="spec[' . $v["taid"] . '][]"></td>';
					$spec .= '<td>附加价格:<input type="text" name="addprice[' . $v["taid"] . '][]"></td><td><span class="add-spec btn btn-success"><i class="icon-plus icon-white"></i>添加规格</span></td></tr>';
				} else {
					//将属性值以|分割
					$arr = explode('|', $v['tavalue']);
					$spec .= '<td><select name="spec[' . $v["taid"] . '][]">';
					foreach ($arr as $kk => $vv) {
						$spec .= '<option value="' . $vv . '">' . $vv . '</option>';
					}
					$spec .= '</select></td>';
					//组合附加价格
					$spec .= '<td>附加价格:<input type="text" name="addprice[' . $v["taid"] . '][]"></td><td><span class="add-spec btn btn-success"><i class="icon-plus icon-white"></i>添加规格</span></td></tr>';
				}
			} else {
				//组合表单提示信息
				$attr .= '<tr class="info"><td>' . $v['taname'] . '</td>';
				//判断当前的属性有没有属性值。如果没有呢，就给一个默认的文本框
				if ($v['tavalue'] == '') {
					$attr .= '<td><input type="text" name="attr[' . $v["taid"] . ']"></td></tr>';
				} else {
					//将属性值以|分割
					$arr = explode('|', $v['tavalue']);
					$attr .= '<td><select name="attr[' . $v["taid"] . ']">';
					//循环组合分割后的属性表单
					foreach ($arr as $kk => $vv) {
						$attr .= '<option value="' . $vv . '">' . $vv . '</option>';
					}
					$attr .= '</select></td></tr>';
				}
			}
		}
		$attrArr = array('attr' => $attr, 'spec' => $spec);
		//ajax返回数据
		$this -> ajax($attrArr);
	}

	/*上传列表图*/
	public function up() {
		$filePath = Upload::type('jpg,png,gif') -> make();
		echo $filePath[0]['path'];
	}

	/*正文编辑图片上传*/
	public function UploadImg() {
		$filePath = Upload::type('jpg,png,gif') -> make();
		$arr['error'] = 0;
		$arr['url'] = $filePath[0]['path'];
		$this -> ajax($arr);
	}

	/*修改商品*/
	public function edit() {
		if (IS_POST) {
			// p($_POST);die;
			/*商品基本信息*/
			$uid = Db::table('admin') -> where('username', $_SESSION['username']) -> pluck('uid');
			$goods = array('gname' => $_POST['gname'], 'unit' => $_POST['unit'], 'marketprice' => $_POST['marketprice'], 'shopprice' => $_POST['shopprice'], 'pic' => $_POST['pic'], 'click' => $_POST['click'], 'time' => time(), 'uid' => $uid, 'bid' => $_POST['bid'], 'cid' => $_POST['cid'], 'tid' => $_POST['tid']);
			/*开启事务*/
			Db::beginTransaction();
			/*定义一个状态指示符*/
			$state = true;
			/*先将商品基本信息添加到数据库*/
			$gid=$_POST['gid'];
			$editGoodsRes= Db::table('goods') ->where('gid',$gid)->update($goods);
			/*if ($editGoodsRes) {
				$state = true;
			} else {
				$state = false;
			}*/

			/*商品详细信息*/
			$detail = array('intro' => $_POST['intro'], 'service' => $_POST['service'], 'gid' => $gid, 'small' => 0, 'medium' => $_POST['medium'], 'big' => 0);
			/*再将商品详细信息添加到数据库*/
			$deid=$_POST['deid'];
			$detailres = Db::table('detail') ->where('deid',$deid)->update($detail);
			
			/*商品规格信息*/
			$goodsattr = array();
			foreach ($_POST['spec'] as $k => $v) {
				foreach ($v as $kk => $vv) {
					$goodsattr[] = array('taid' => $k,'gtvalue' => $vv, 'added' => $_POST['addprice'][$k][$kk], 'gid' => $gid,'gtid'=>$_POST['gtid1'][$k][$kk]);
				}
			}
			/*商品属性信息*/
			foreach ($_POST['attr'] as $atk => $atv) {
				$goodsattr[] = array('taid' => $atk,'gtvalue' => $atv, 'added' => 0, 'gid' => $gid,'gtid'=>$_POST['gtid2'][$atk]);
			}
			//p($goodsattr);die;
			/*修改商品的属性和规格信息*/
			foreach ($goodsattr as $gk => $gv) {
				$res = Db::table('goods_attr')->where('gtid',$gv['gtid'])->update(array('gtvalue'=>$gv['gtvalue'],'added'=>$gv['added'],'taid'=>$gv['taid'],'gid'=>$gv['gid']));
				if ($res === false) {
					$state = false;
					break;
				} else {
					$state = true;
				}
			}
			if ($state) {
				Db::commit();
				$this -> success('商品信息修改成功', U('Admin/Goods/index'));
			} else {
				Db::rollback();
				$this -> error('商品信息修改失败', U('Admin/Goods/index'));
			}
		} else {
			/*商品基本信息数据*/
			$gdata = Db::table('goods') -> join('detail', 'lashou_goods.gid', '=', 'lashou_detail.gid') -> first();
			$cdata = Db::table('category') -> get();
			$bdata = Db::table('brand') -> get();
			$cdata = Data::tree($cdata, 'cname');

			$array=$this -> getGoodsAttr(Q('gid'), $gdata['tid']);
			/*p($array);
			die ;*/
			View::with('data', $gdata);
			View::with('cdata', $cdata);
			View::with('bdata', $bdata);
			View::with('array',$array);
			View::make();
		}
	}

	/*获取属性信息*/
	public function getGoodsAttr($gid, $tid) {
		$goods_attr = Db::table('goods_attr') -> where('gid', $gid) -> get();
//		p($goods_attr);
		$type_attr = Db::table('type_attr') -> where('tid', $tid) -> get();
		$spec =$attr= "";
		foreach ($goods_attr as $k => $v) {
			foreach ($type_attr as $kk => $vv) {
				if ($vv['taid'] == $v['taid']) {
					if ($vv['class'] == 1) {
						$spec .= '<tr class="info"><td>' . $vv['taname'] . '</td>';
						if ($vv['tavalue'] == '') {
							//因为是规格，所以需要有附加价格的表单
							$spec .= '<td><input type="text" value="'.$v['gtvalue'].'" name="spec[' . $vv["taid"] . '][]"><input type="hidden" value="'.$v['gtid'].'" name="gtid1['.$v['taid'].'][]" /></td>';
							$spec .= '<td>附加价格:<input type="text" value="' . $v['added'] . '" name="addprice[' . $v["taid"] . '][]"></td><td><span class="add-spec btn btn-success"><i class="icon-plus icon-white"></i>添加规格</span></td></tr>';
						} else {
							//将属性值以|分割
							$d = explode('|', $vv['tavalue']);
							$spec .= '<td><select name="spec[' . $vv["taid"] . '][]">';
							foreach ($d as $dk => $dv) {
								if ($dv == $v['gtvalue']) {
									$spec .= '<option selected="" value="' . $dv . '">' . $dv . '';
								} else {
									$spec .= '<option value="' . $dv . '">' . $dv . '</option>';
								}
							}
							$spec .= '</select><input type="hidden" value="'.$v['gtid'].'" name="gtid1['.$v['taid'].'][]" /></td>';
							//组合附加价格
							$spec .= '<td>附加价格:<input type="text" value="'.$v['added'].'" name="addprice[' . $v["taid"] . '][]"></td><td><span class="add-spec btn btn-success"><i class="icon-plus icon-white"></i>添加规格</span></td></tr>';
						}
//						echo $spec;
					} else {
						$attr .= '<tr class="info"><td>' . $vv['taname'] . '</td>';
						if ($vv['tavalue'] == '') {
							//因为是规格，所以需要有附加价格的表单
							$attr .= '<td><input type="text" name="attr[' . $vv["taid"] . ']"><input type="hidden" name="gtid2['.$v['taid'].']" value="'.$v['gtid'].'" /></td>';
							/*$attr .= '<td>附加价格:<input type="text" value="' . $v['added'] . '" name="addprice[' . $v["taid"] . '][]"></td><td><span class="add-spec btn btn-success"><i class="icon-plus icon-white"></i>添加规格</span></td></tr>';*/
						} else {
							//将属性值以|分割
							$d = explode('|', $vv['tavalue']);
							$attr .= '<td><select name="attr[' . $vv["taid"] . ']">';
							foreach ($d as $dk => $dv) {
								if ($dv == $v['gtvalue']) {
									$attr .= '<option selected="" value="' . $dv . '">' . $dv . '';
								} else {
									$attr .= '<option value="' . $dv . '">' . $dv . '</option>';
								}
							}
							$attr .= '</select><input type="hidden" name="gtid2['.$v['taid'].']" value="'.$v['gtid'].'" /></td>';
							/*//组合附加价格
							$attr .= '<td>附加价格:<input type="text" name="addprice[' . $v["taid"] . '][]"></td><td><span class="add-spec btn btn-success"><i class="icon-plus icon-white"></i>添加规格</span></td></tr>';*/
						}
					}
				}
			}
		}
		$array=array(
			'spec'=>$spec,
			'attr'=>$attr
		);
		return $array;
	}

}
