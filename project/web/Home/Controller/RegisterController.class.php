<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function index(){
	 $this->display();  
    }

    public function register(){

        //创建表对象
        $user = D('user'); 

       if (!$user->create()){     // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $info = $user->getError();
           $this->error($info);
        }

       $username = I('post.username');

        $pwd = md5(I('post.pwd'));
        // var_dump($pwd);
        $tel = I('post.tel');
        $email = I('post.email');

        $data['username'] = $username;
        $data['pwd'] = $pwd; //密码加密
        $data['tel'] = $tel; //密码加密
        $data['email'] = $email; //密码加密
        // var_dump($data);
        // die();
       
        $res =  $user->add($data);
        // var_dump($res);

       
        if($res){
              //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
             $this->success('新增成功', U('Home/Login/index'),3);
        }else{
             //错误页面的默认跳转页面是返回前一页，通常不需要设置
             $this->error('新增失败');
        }

}
}