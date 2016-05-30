<?php
namespace Admin\Controller;
use Think\Controller;
class LoginoutController extends Controller {

	public function index(){
		// session_start();
		// var_dump($_SESSION);
		unset($_SESSION);
	  // var_dump($_SESSION);
	 if(empty($_SESSION)){
			$this->success('退出成功',U('Admin/Login/index'),2);

	}else{
		$this->error('退出失败','',3);
	}

}

}