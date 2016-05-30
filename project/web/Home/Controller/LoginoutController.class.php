<?php
namespace Home\Controller;
use Think\Controller;
class LoginoutController extends Controller {

    public function index(){
        // session_start();
        // var_dump($_SESSION);
        // unset($_SESSION);
        $_SESSION = array();
      // var_dump($_SESSION);//null
      // die();
     if(empty($_SESSION)){
            $this->success('退出成功',U('Home/Index/index'),2);

    }else{
        $this->error('退出失败','',3);
    }

}

}