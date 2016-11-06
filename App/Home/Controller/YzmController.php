<?php namespace Home\Controller;
use Hdphp\Controller\Controller;
class YzmController extends Controller{
	public function codeshow(){
		Code::fontSize(20)->make();
	}
}
