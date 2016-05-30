<?php
namespace Home\Controller;
use Think\Controller;
class FashionController extends Controller {
   public function index(){
    	//创建表对象
    $fashion = M('fashion');
			  // var_dump($fashion);
			  $user = M('user');

			   $id = $_SESSION['userid'];
			   $pic = $user->query("select pic from hs_user where id = $id");
			  $res =  $user->_sql();
			  // var_dump($res);

			   $pic = $pic[0]['pic'];
			   // var_dump($pic);

			  $this->assign('pic',$pic);

		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 6;

		// //获取关键字
		// if (!empty($_GET['keyword'])) {
		// 	//有关键字
		// 	$where = "title like '%".$_GET['keyword']."%'";
		// }else{
		// 	$where = '';
		// }

		// //查询满足要求的总记录数
		$count = $fashion->where($where)->count();
		// echo $count;die;
		// //实例化分页类 传入中记录数和每页显示的记录数
		$Page = new \Think\Page($count,$num);
		// //获取limit参数
		$limit = $Page->firstRow.','.$Page->listRows;

		//查询
		$fashions = $fashion->where($where)->limit($limit) -> order(p,1) ->select();
		// var_dump($fashions);

		//分页显示输出
		$pages = $Page->show();


		//分配变量
		$this->assign('fashions',$fashions);
		$this->assign('pages',$pages);
				 $this->display();  
    }

    public function ajaxfashion(){
			  //创建表对象
			  $fashion = M('fashion');

			  // var_dump($_GET);
			  // var_dump($fashion);
			  
			  // $res = $fashion->save($_POST);
			  $fashions = $fashion -> page($_GET['p'],6) -> order('id') ->select();

			  //json_encode($fashions);
			  // var_dump($fashions);
			  // die();
			 
			 //向ajax返回数据
			  if ($fashions) {
			      echo json_encode($fashions);
			  	// $this->ajaxReturn($fashions);
			  }else{
			  	// $this->ajaxReturn('0');
			      echo 0;
			  }
    }
    


    public function msg(){

			  $fashion = M('fashion');

			  $user = M('user');

			  $id = $_SESSION['userid'];
			  $pic = $user->query("select pic from hs_user where id = $id");
			  $res =  $user->_sql();
			  // var_dump($res);

			   $pic = $pic[0]['pic'];
			   // var_dump($pic);

			  $this->assign('pic',$pic);
			  
			  $id = $_GET['id'];
			  // var_dump($id);
			  $info = $fashion->find($id);
			  // var_dump($info);die;
   
		
         //分配变量
        $this->assign('info',$info);
        $this->display();

    }
}