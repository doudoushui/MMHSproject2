<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	// var_dump($_SESSION);
        $user = M('user');

         $id = $_SESSION['userid'];
         $pic = $user->query("select pic from hs_user where id = $id");
        $res =  $user->_sql();
        // var_dump($res);

         $pic = $pic[0]['pic'];
         // var_dump($pic);

        $this->assign('pic',$pic);

				$this->display();  
		}
}