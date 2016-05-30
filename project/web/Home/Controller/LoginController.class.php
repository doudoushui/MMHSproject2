<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
		$this->display();  
    }

    public function login(){

    	$user = D("user"); // 实例化User对象
       if (!$user->create()){     // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $info = $user->getError();
           $this->error($info);
        }
		//接受数据
		$username = I('post.username');
		$pwd = I('post.pwd');
		// var_dump($pwd);
		$pwd = md5(I('post.pwd'));
		// var_dump($pwd);
		// die();


		// $vode = I('post.vcode');
        // die();
		//查询
		$info = $user->where('username = "'.$username.'" and pwd = "'.$pwd.'" ')->find();
		// echo $admin->_sql();
		// var_dump($info);
		//检测用户是否存在
		if(!empty($info)){
			@session_start();
			$_SESSION['userid'] = $info['id'];
			session('username',$info['username']);
			session('vcode',$_POST['vcode']);
			

			// var_dump($_SESSION);
			// die();
			$this->success('登录成功',U('Home/Index/index'),2);
			
		}else{
			$this->error('登录失败,请重新登录诺~~','',3);
		}
}
}