<?php 
namespace Home\Controller;
use Think\Controller;
class RecommendController extends Controller {
	public function index(){
		//创建对象
		$recommend = M('recommend');

		//查询
		$recommends = $recommend->select();
		// var_dump($recommends);
		
		//分页显示输出
		// $pages = $Page->show();

		//分配变量
		$this->assign('recommends',$recommends);
		$this->assign('recommendmsgs',$recommendmsgs);
		$this->assign('pages',$pages);
  
        $user = M('user');

		 $id = $_SESSION['userid'];
		 $pic = $user->query("select pic from hs_user where id = $id");
		$res =  $user->_sql();
		// var_dump($res);

		 $pic = $pic[0]['pic'];
		 // var_dump($pic);

		$this->assign('pic',$pic);
		//解析模板
		$this->display();
	}

	public function ajax(){
        //创建表对象
        $recommend = M('recommend');
        
        // $res = $recommend->save($_POST);
        $recommends = $recommend -> page($_POST['p'],6) -> order('id') ->select();
        //json_encode($recommends);
       
       //向ajax返回数据
        if ($recommends) {
            echo json_encode($recommends);
        }else{
            echo 0;
        }
    } 

    public function intro(){
    	// var_dump($_GET);die;
		$id = I('get.id');
		//创建表对象
		$recommend = M('recommend');
		$recommendmsg = M('recommendmsg');
		//查询当前用户的数据
		$info = $recommend->find($id);
		// var_dump($info);die;
		
		$res = $recommend->find($id);
		// var_dump($info);
		$res = htmlspecialchars_decode($res['r_msg']);


		$where = "recomid = $id";
		//查询
		$recommendmsgs = $recommendmsg->where($where)->order('rmsgtime desc')->select();
		// echo $ressql = $recommendmsg->_sql();die;
		// var_dump($recommendmsgs);die;

		$this->assign('recommendmsgs',$recommendmsgs);
		$this->assign('info',$info);
		$this->assign('res',$res);

  $user = M('user');

   $id = $_SESSION['userid'];
   $pic = $user->query("select pic from hs_user where id = $id");
  $res =  $user->_sql();
  // var_dump($res);

   $pic = $pic[0]['pic'];
   // var_dump($pic);

  $this->assign('pic',$pic);
    	//解析模板
    	$this->display();
    }

    public function ajaxadd(){
        //创建表对象
        $recommendmsg = M('recommendmsg');
        //创建数据
        $recommendmsg->create();
        //获取上传评论时间
		$_POST['rmsgtime'] = date('Y/m/d H:i:s');
		// $_POST['recommsg'] = "<div class='msgBox'><dl><dt><img src='__PUBLIC__/Home/jQQlyb/images/tx.jpg' width='50' height='50'/></dt>Username<br>2016-05-21</dl><div class='msgTxt'>".$_POST['msg']."</div></div>";
		$_POST['recommsg'] = $_POST['msg'];
		// echo $_POST;
        $rmsg['recommsg'] = $_POST['recommsg'];
        $rmsg['rmsgtime'] = $_POST['rmsgtime'];
        $rmsg['recomid'] = $_POST['id'];
        $res = $recommendmsg->add($rmsg);
        // echo $recommendmsg->_sql();
        // echo $rmsg;
       
       //向ajax返回数据
        if ($res) {
            echo 1;
        }else{
            echo 0;
        }
    }

 }
?>