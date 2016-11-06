<?php namespace Admin\Controller; 

use Hdphp\Controller\Controller;
use Admin\Model\Type;
use Hdphp\Client\client;
//测试控制器
class IndexController extends Controller{
	private $type;
	private $client;
	//构造函数
	public function __init()
	{
		$this->type=new Type();
		$this->client=new Client();
		if(!isset($_SESSION['username'])){
			$this->success('请先登录',U('Admin/Login/login'));
		}
	}
	
    //动作
    public function index(){
       View::make();
    }
	//欢迎页面
	public function info(){
		die;
		$sys = array(
			/*访客的操作系统*/
			'os' =>$this->client->Get_Os(),
			/*php版本*/
			'version' => PHP_VERSION,
			/*服务器环境*/
			'server' => $_SERVER['SERVER_SOFTWARE'],
			/*mysql数据库版本*/
			'mysql' => mysql_get_server_info(),
			/*浏览器类型*/
			'browser'=>$this->client->Get_Browser(),
			/*浏览器语言*/
			'language'=>$this->client->Get_Lang(),
			/*获得访客真实ip*/
			'trueIp'=>$this->client->Get_Ip_Addr(),
			/*获得本地真实IP*/
			'localIp'=>$this->client->get_onlineip(),
			
		);
		View::with('sys',$sys);
		View::make();
    }
	
	public function add(){
		$res=$this->type->addData($_POST);
		if($res){
			$this->success('添加成功',U('Admin/Index/index'));
		}else{
			$this->error('添加失败',U('Admin/Index/index'));
		}
	}
	
}
