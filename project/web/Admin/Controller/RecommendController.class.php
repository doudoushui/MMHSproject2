<?php 
namespace Admin\Controller;
use Think\Controller;
class RecommendController extends Controller {
	public function index(){
		// echo '后台社区优秀婚庆信息管理';
		//创建对象
		$recommend = M('recommend');

		//查询编辑器上传的内容
		$res = $recommend->find($id);
		$res = htmlspecialchars_decode($res['r_msg']);
		// echo $res;

		/*echo $recommend->_sql();
		echo $recommend->getLastSql();*/

		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 2;

		//获取关键字
		if (!empty($_GET['keyword'])) {
			//有关键字
			$where = "r_title like '%".$_GET['keyword']."%'";
		}else{
			$where = '';
		}

		//查询满足要求的总记录数
		$count = $recommend->where($where)->count();
		//实例化分页类 传入中记录数和每页显示的记录数
		$Page = new \Think\Page($count,$num);
		//获取limit参数
		$limit = $Page->firstRow.','.$Page->listRows;

		//查询
		$recommends = $recommend->where($where)->limit($limit)->select();
		// var_dump($recommends);

		$res = htmlspecialchars_decode($recommends['r_msg']);

		//分页显示输出
		$pages = $Page->show();

		//分配变量
		$this->assign('recommends',$recommends);
		$this->assign('pages',$pages);
		$this->assign('res',$res);
		//解析模板
		$this->display();
	}

	//显示优秀婚庆信息添加页面
	public function add(){
		// echo '优秀婚庆信息添加页面';
		// 解析模板
		$this->display();
	}

	//处理优秀婚庆信息添加
	public function insert(){
		//创建表对象
		$recommend = M('recommend');
		// $res = $_POST;
		// var_dump($res);die;

		//获取上传时间
		$_POST['rtime'] = date('Y/m/d H:i:s');

		//处理图片
        if($_FILES['r_pic']['error'] == 0){
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
                $str =  ltrim($upload->rootPath,'.').$info['r_pic']['savepath'].$info['r_pic']['savename'];
                $_POST['r_pic'] = $str;
            }
        }

		//创建数据
		$recommend->create();
		//执行添加
		if($recommend->add()){
			//设置成功添加后跳转页面地址
			$this->success('新增成功',U('Admin/recommend/index'),3);
		}else{
			//错误时的跳转页面
			$this->error('新增失败');
		}
	}

	//优秀婚庆信息的修改
	public function save(){
		// var_dump($_GET);die;
		$id = I('get.id');
		//创建表对象
		$recommend = M('recommend');
		//查询当前用户的数据
		$info = $recommend->find($id);
		// var_dump($info);die;

		$res = $recommend->find($id);
		$res = htmlspecialchars_decode($res['r_msg']);
		// echo $res;
		$this->assign('info',$info);
		$this->assign('res',$res);

		//解析模板
		$this->display();
	}

	//执行修改
	public function update(){
		//创建数据表对象
		$recommend = M('recommend');

		//获取上传时间
		$_POST['rtime'] = date('Y/m/d H:i:s');
		
		//处理图片
        if($_FILES['r_pic']['error'] == 0){
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   = 3145728 ;// 设置附件上传大小    
            $upload->exts      = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->rootPath  = './Public';
            $upload->savePath  = '/Uploads/'; // 设置附件上传目录   
            // 上传文件     
            $info   =   $upload->upload();    
            if(!$info) {// 上传错误提示错误信息       
                $this->error($upload->getError());    
            }else{// 上传成功        
                // $this->success('上传成功！'); 
                $str =  ltrim($upload->rootPath,'.').$info['r_pic']['savepath'].$info['r_pic']['savename'];
                $_POST['r_pic'] = $str;
            }
        }

		//创建数据
		$res = $recommend->create();
		//执行修改
		$res = $recommend->save();
		//执行添加
		if ($res) {
			//设置成功后跳转页面地址
			$this->success('更新成功',U('Admin/recommend/index'),3);
		}else{
			//错误信息页面跳转
			$this->error('更新失败');
		}
	}

	public function ajaxdel(){
        // var_dump($_GET);
        //创建表对象
        $recommend = M('recommend');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $recommend->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function ajaxedit(){
        //创建表对象
        $recommend = M('recommend');
        
        $res = $recommend->save($_POST);
       
       //向ajax返回数据
        if ($res) {
            echo 1;
        }else{
            echo 0;
        }
    }


 }
?>