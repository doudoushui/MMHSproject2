<?php
namespace Admin\Controller;
use Think\Controller;
class OutController extends Controller {

	public function index(){
		session_start();
		// var_dump($_SESSION);
		
	// var_dump($_SESSION);
	// die();
		//解析模板
		$this->display();
	}

	public function login(){
		// var_dump($_POST);

		// $admin = M('admin_user');

		$admin = D("admin_user"); // 实例化User对象
		if (!$admin->create()){     // 如果创建失败 表示验证没有通过 输出错误提示信息     
			exit($admin->getError());
		}else{     // 验证通过 可以进行其他数据操作

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
			session_start();
			$_SESSION['adminid'] = $info['id'];
			session('adminname',$info['adminname']);
			session('vcode',$_POST['vcode']);
			
		// 	if($_SESSION['vode'] == $_POST['vcode']){
		// 	$this->success('登录成功',U('Admin/Index/index'),2);

		// }else{
		// 	$this->error('验证码错误','',3);

		// }
			// var_dump($_SESSION);
			$this->success('登录成功',U('Admin/Index/index'),2);
			
		}else{
			$this->error('登录失败','',3);
		}
	}

	public function Email(){
		// sendMail('13701383017@139.com','来自星星的川哥','您的验证码为:5211314');
		sendMail('18994398312@163.com','娃','<a href="http://lamp43">点击验证</a>');
	}

}