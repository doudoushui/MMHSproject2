<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {

	public function CreateVcode(){
		$Verify = new \Think\Verify();
		$Verify -> length = 4;
		$Verity -> fontsize = 20;
		$Verify->entry();

	}


}