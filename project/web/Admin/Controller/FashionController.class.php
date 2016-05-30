<?php 
namespace Admin\Controller;
use Think\Controller;
class FashionController extends Controller {
	public function index(){
		// echo '后台潮流动态信息管理';
		//创建对象
		$fashion = M('fashion');
    
    //查询编辑器上传的内容
    $res = $fashion->find($id);
    $res = htmlspecialchars_decode($res['fmsg']);//把样式转变成便签
    // $res =$res['fmsg'];//把便签转变成样式


    // $res = htmlspecialchars_decode($vo.);{$vo.fmsg}
		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 2;

		//获取关键字
		if (!empty($_GET['keyword'])) {
			//有关键字
			$where = "title like '%".$_GET['keyword']."%'";
		}else{
			$where = '';
		}

		//查询满足要求的总记录数
		$count = $fashion->where($where)->count();
		//实例化分页类 传入中记录数和每页显示的记录数
		$Page = new \Think\Page($count,$num);
		//获取limit参数
		$limit = $Page->firstRow.','.$Page->listRows;

		//查询
		$fashions = $fashion->where($where)->order('id desc')->limit($limit)->select();
		// var_dump($fashions);
		// die();
		

		// $res = htmlspecialchars_decode($fashions['fmsg']);
		//分页显示输出
		$pages = $Page->show();

		//分配变量
		$this->assign('fashions',$fashions);
		$this->assign('pages',$pages);
		// $this->assign('res',$res);
		//解析模板
		$this->display();
	}

	//显示潮流动态信息添加页面
	public function add(){
		// echo '潮流动态信息添加页面';
		// 解析模板
		$this->display();
	}

	//处理潮流动态信息添加
	public function insert(){
		//创建表对象
		$fashion = M('fashion');

		$_POST['ftime'] = date('Y/m/d H:i:s');
		$fmsg = htmlspecialchars_decode($_POST['fmsg']);
		// echo $fmsg;
		// die();

		//处理图片
		if($_FILES['fpic']['error'] == 0){
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
		        $str =  ltrim($upload->rootPath,'.').$info['fpic']['savepath'].$info['fpic']['savename'];
		        $_POST['fpic'] = $str;
		    }
		}
		$fashion->create();
		//执行添加
		if($fashion->add()){
			//设置成功添加后跳转页面地址
			$this->success('新增成功',U('Admin/Fashion/index'),3);
		}else{
			//错误时的跳转页面
			$this->error('新增失败');
		}
	}

	//潮流动态信息的修改
	public function save(){
		// var_dump($_GET);die;
		$id = I('get.id');
		//创建表对象
		$fashion = M('fashion');

		//查询当前用户的数据
		$info = $fashion->find($id);

		// var_dump($info);die;
		
		$res = $fashion->find($id);
		$res = htmlspecialchars_decode($res['fmsg']);

		$this->assign('info',$info);
		$this->assign('res',$res);

		//解析模板
		$this->display();
	}

	//执行修改
	public function update(){
		//创建数据表对象
		$fashion = M('fashion');
		$_POST['ftime'] = date('Y/m/d H:i:s');
   

		//处理图片
		if($_FILES['fpic']['error'] == 0){
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
		        $str =  ltrim($upload->rootPath,'.').$info['fpic']['savepath'].$info['fpic']['savename'];
		        $_POST['fpic'] = $str;
		    }

		    //获取原来图片的;路径
		    $res = $fashion->find($_POST['id']);
		    $pic = $res['fpic'];
		    // var_dump($pic);
		    //删除图片
		    unlink('.'.$pic);
		}

		//创建数据
		$res = $fashion->create();
		//执行修改
		$res = $fashion->save();
		//执行添加
		if ($res) {
			//设置成功后跳转页面地址
			$this->success('更新成功',U('Admin/Fashion/index'),3);
		}else{
			//错误信息页面跳转
			$this->error('更新失败');
		}
	}

	public function ajaxdel(){
        // var_dump($_GET);
        //创建表对象
        $fashion = M('fashion');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $fashion->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function ajaxeditfpub(){
     $fashion = M('fashion');
		$_POST['ftime'] = date('Y/m/d H:i:s');
   
     $res = $fashion->save($_POST);

     if($res){
      echo 1;
     }else{
      echo 0;
     }
    }
     public function ajaxeditftitle(){
     $fashion = M('fashion');
		$_POST['ftime'] = date('Y/m/d H:i:s');
   
     $res = $fashion->save($_POST);

     if($res){
      echo 1;
     }else{
      echo 0;
     }
    }


 }
?>