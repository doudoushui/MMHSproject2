<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
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

	public function CreateVcode(){
		$Verify = new \Think\Verify();
		// // $Verify -> length = 3;
		$Verity -> fontsize = 40;
		$Verify->entry();

		

	}


}