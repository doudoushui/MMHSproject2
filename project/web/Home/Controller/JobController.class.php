<?php 
namespace Home\Controller;
use Think\Controller;
class JobController extends Controller {
	public function index(){
		//创建对象
		$job = M('job');
		$user = M('user');

		$id = $_SESSION['userid'];
		$pic = $user->query("select pic from hs_user where id = $id");
		$res =  $user->_sql();
		// var_dump($res);

		$pic = $pic[0]['pic'];
		// var_dump($pic);

		$this->assign('pic',$pic);

		/*echo $job->_sql();
		echo $job->getLastSql();*/

		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 3;

		//获取关键字
		if (!empty($_GET['keyword'])) {
			//有关键字
			$where = "work like '%".$_GET['keyword']."%'";
		}else{
			$where = '';
		}

		// //查询满足要求的总记录数
		$count = $job->where($where)->count();
		// //实例化分页类 传入中记录数和每页显示的记录数
		$Page = new \Think\Page($count,$num);
		// //获取limit参数
		$limit = $Page->firstRow.','.$Page->listRows;

		//查询
		$jobs = $job->where($where)->limit($limit) -> order(p,3) ->select();
		// var_dump($jobs);

		//分页显示输出
		$pages = $Page->show();

		//分配变量
		$this->assign('jobs',$jobs);
		$this->assign('pages',$pages);
		//解析模板
		$this->display();
	}

	public function ajax(){
        //创建表对象
        $job = M('job');

        //获取关键字
		if (!empty($_GET['keyword'])) {
			//有关键字
			$where = "work like '%".$_GET['keyword']."%'";
		}else{
			$where = '';
		}
        
        // $res = $job->save($_POST);
        $jobs = $job -> page($_POST['p'],6)->where($where) -> order('id') ->select();
        //json_encode($jobs);
       
       //向ajax返回数据
        if ($jobs) {
            echo json_encode($jobs);
        }else{
            echo 0;
        }
    } 

    public function intro(){
    	// var_dump($_GET);die;
		$id = I('get.id');
		//创建表对象
		$job = M('job');

		//查询当前用户的数据
		$info = $job->find($id);
		// var_dump($info);die;
		
		$res = $job->find($id);
		// var_dump($info);
		$res = htmlspecialchars_decode($res['jinfo']);


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

    public function resume(){
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

    //处理招聘信息添加
	public function resinsert(){
		//创建表对象
		$resume = M('resume');

		//获取上传时间
		$_POST['restime'] = date('Y/m/d H:i:s');

		 
		//处理图片
        if($_FILES['resume_pic']['error'] == 0){
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   =  3145728 ;// 设置附件上传大小    
            $upload->exts      =  array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->rootPath  =  './Public';
            $upload->savePath  =  '/Uploads/'; // 设置附件上传目录   
            // 上传文件     
            $info   =   $upload->upload();  
            // var_dump($info);die;  
            if(!$info) {// 上传错误提示错误信息       
                $this->error($upload->getError());    
            }else{// 上传成功        
                // $this->success('上传成功！'); 
                $str =  ltrim($upload->rootPath,'.').$info['resume_pic']['savepath'].$info['resume_pic']['savename'];
                $_POST['resume_pic'] = $str;
            }
        }
		//创建数据
		$resume->create();
		// $resume->add();
		// $res = $resume->_sql();
		// echo ($res);die();
		// var_dump($resume);die;
		//执行添加
		if($resume->add()){
			//设置成功添加后跳转页面地址
			$this->success('简历投递成功',U('Home/Job/index'),3);
		}else{
			//错误时的跳转页面
			$this->error('简历投递失败,请重新按要求填写');
		}
	}


 }
?>