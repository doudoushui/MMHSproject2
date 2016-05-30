<?php 
namespace Admin\Controller;
use Think\Controller;
class ResumeController extends Controller {
	public function index(){
		// echo '后台简历信息管理';
		//创建对象
		$resume = M('resume');

		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 2;

		//获取关键字
		if (!empty($_GET['keyword'])) {
			//有关键字
			$where = "resume_work like '%".$_GET['keyword']."%'";
		}else{
			$where = '';
		}

		//查询满足要求的总记录数
		$count = $resume->where($where)->count();
		//实例化分页类 传入中记录数和每页显示的记录数
		$Page = new \Think\Page($count,$num);
		//获取limit参数
		$limit = $Page->firstRow.','.$Page->listRows;
		//查询
		// $resumes = $resume->where($where)->limit($limit)->select();
		// 
		// $resumes = $resume->join('RIGHT JOIN resume ON job.id = resume.resume_wid')->select();

 		$resumes =  $resume->join('hs_job ON hs_job.id = hs_resume.resume_wid')->where($where)->limit($limit)->select();
 		// var_dump($resumes);
 		// die();
 		foreach ($resumes as $k => $v) {
 			// var_dump($v['work']);
 			// var_dump($v['id']);
 			$work = $v['work'];
 			$wid = $v['id'];
 			$resume -> query("update hs_resume set resume_work = '$work' where resume_wid = $wid");
 		}		
		$resumes = $resume->where($where)->limit($limit)->select();
		// var_dump($resumes);die;
		//分页显示输出
		$pages = $Page->show();

		//分配变量
		$this->assign('resumes',$resumes);
		$this->assign('pages',$pages);
		//解析模板
		$this->display();
	}

	//显示简历信息添加页面
	public function add(){
		// echo '简历信息添加页面';
		// 解析模板
		$this->display();
	}

	//处理简历信息添加
	public function insert(){
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

        // $res = $_POST;
        // var_dump($res);die;
		//创建数据
		$resume->create();

		//执行添加
		if($resume->add()){
			//设置成功添加后跳转页面地址
			$this->success('新增成功',U('Admin/Resume/index'),3);
		}else{
			//错误时的跳转页面
			$this->error('新增失败');
		}
	}


	//简历信息的修改
	public function save(){
		// var_dump($_GET);die;
		$id = I('get.id');
		//创建表对象
		$resume = M('resume');
		//查询当前用户的数据
		$info = $resume->find($id);
		// var_dump($info);die;
		
		// $res = $resume->find($id);
		// $res = htmlspecialchars_decode($res['jinfo']);


		$this->assign('info',$info);
		// $this->assign('res',$res);

		//解析模板
		$this->display();
	}

	//执行修改
	public function update(){
		//创建数据表对象
		$resume = M('resume');

		//处理图片
        if($_FILES['resume_pic']['error'] == 0){
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   =     3145728 ;// 设置附件上传大小    
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->rootPath  =       './Public';
            $upload->savePath  =      '/Uploads/'; // 设置附件上传目录   
            // 上传文件     
            $info   =   $upload->upload();    
            if(!$info) {// 上传错误提示错误信息       
                $this->error($upload->getError());    
            }else{// 上传成功        
                // $this->success('上传成功！'); 
                $str =  ltrim($upload->rootPath,'.').$info['resume_pic']['savepath'].$info['resume_pic']['savename'];
                $_POST['resume_pic'] = $str;
            }

            //获取原来图片的;路径
            $res = $resume->find($_POST['id']);
            $resume_pic = $res['resume_pic'];
            // var_dump($resume_pic);
            //删除图片
            unlink('.'.$pic);
        }


		//创建数据
		$res = $resume->create();
		//执行修改
		$res = $resume->save();
		// echo $resume->_sql();die;
		//执行添加
		if ($res) {
			//设置成功后跳转页面地址
			$this->success('更新成功',U('Admin/resume/index'),3);
		}else{
			//错误信息页面跳转
			$this->error('更新失败');
		}
	}

	public function ajaxdel(){
        // var_dump($_GET);
        //创建表对象
        $resume = M('resume');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $resume->delete($id);
        // echo $id;die;

        // echo $resume->_sql();die;


        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function ajaxedit(){
        //创建表对象
        $resume = M('resume');
        //获取上传时间
		$_POST['restime'] = date('Y/m/d H:i:s');
        
        $res = $resume->save($_POST);
       
       //向ajax返回数据
        if ($res) {
            echo 1;
        }else{
            echo 0;
        }
    } 

 }
?>