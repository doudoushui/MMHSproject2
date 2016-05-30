<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	public function index(){
		// session_start();
		// var_dump($_SESSION);
		//解析模板
		$this->display();
	}

	public function login(){
		// var_dump($_POST);

		// $admin = M('admin_user');

		$admin = D("admin_user"); // 实例化User对象
		if (!$admin->create()){     // 如果创建失败 表示验证没有通过 输出错误提示信息     
			 $info = $admin->getError();
       $this->error($info);
		}
		//接受数据
		$adminname = I('post.adminname');
		$pwd = I('post.pwd');
		// $vode = I('post.vcode');
  // die();
		//查询
		$info = $admin->where('adminname = "'.$adminname.'" and pwd = "'.$pwd.'" ')->find();
		// echo $admin->_sql();
		// var_dump($info);
		//检测用户是否存在
		if(!empty($info)){
			@session_start();
			$_SESSION['adminid'] = $info['id'];
			// $_SESSION['admin']['adminname'] = $info['name'];
			// $_SESSION['admin']['vcode'] = $_POST['vcode'];
			session('adminname',$info['adminname']);
			session('vcode',$_POST['vcode']);
			
			// var_dump($_SESSION);
			// die();

			$this->success('登录成功',U('Admin/Index/index'),2);
			
		}else{
			// var_dump($_SESSION);
			// echo 'sssssss';
			// die();

			$this->error('登录失败','',3);
		}
	}

	// public function Email(){
	// 	// sendMail('13701383017@139.com','来自星星的川哥','您的验证码为:5211314');
	// 	sendMail('18994398312@163.com','娃','<a href="http://lamp43">点击验证</a>');
	// }

}