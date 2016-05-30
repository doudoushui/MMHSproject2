<?php 
namespace Admin\Controller;
use Think\Controller;
class GoodscommentController extends Controller {
	public function index(){
		// echo '评论信息管理';
		//创建对象
		$goodscomment = M('goods_comment');

		//查询编辑器上传的内容
		$res = $goodscomment->find($id);
		$res = htmlspecialchars_decode($res['r_msg']);

		/*echo $goodscomment->_sql();
		echo $goodscomment->getLastSql();*/

		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 2;

		//获取关键字
		if (!empty($_GET['keyword'])) {
			//有关键字
			$where = "gname like '%".$_GET['keyword']."%'";
		}else{
			$where = '';
		}

		//查询满足要求的总记录数
		$count = $goodscomment->where($where)->count();
		//实例化分页类 传入中记录数和每页显示的记录数
		$Page = new \Think\Page($count,$num);
		//获取limit参数
		$limit = $Page->firstRow.','.$Page->listRows;

		//查询
		$goodscomments = $goodscomment->where($where)->limit($limit)->select();
		// var_dump($goodscomments);
		$res = htmlspecialchars_decode($recommends['commsg']);
		
		//分页显示输出
		$pages = $Page->show();

		//分配变量
		$this->assign('goodscomments',$goodscomments);
		$this->assign('pages',$pages);
		$this->assign('res',$res);
		//解析模板
		$this->display();
	}

	//评论信息添加页面
	public function add(){
		// echo评论信息添加页面';
		// 解析模板
		$this->display();
	}

	//评论信息添加
	public function insert(){
		//创建表对象
		$goodscomment = M('goods_comment');

		//获取上传时间
		$_POST['comtime'] = date('Y/m/d H:i:s');
		//处理图片
        if($_FILES['gpic']['error'] == 0){
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
                $str =  ltrim($upload->rootPath,'.').$info['gpic']['savepath'].$info['gpic']['savename'];
                $_POST['gpic'] = $str;
            }
        }

		//创建数据
		$goodscomment->create();
		//执行添加
		if($goodscomment->add()){
			//设置成功添加后跳转页面地址
			$this->success('新增成功',U('Admin/Goodscomment/index'),3);
		}else{
			//错误时的跳转页面
			$this->error('新增失败');
		}
	}

	// 评论信息的修改
	public function save(){
		// var_dump($_GET);die;
		$id = I('get.id');
		//创建表对象
		$goodscomment = M('goods_comment');
		//查询当前用户的数据
		$info = $goodscomment->find($id);
		// var_dump($info);die;
		
		$resg = $goodscomment->find($id);
		$resg = htmlspecialchars_decode($resg['commsg']);
		echo $res;
		$this->assign('info',$info);
		$this->assign('resg',$resg);

		//解析模板
		$this->display();
	}

	//执行修改
	public function update(){
		//创建数据表对象
		$goodscomment = M('goods_comment');

		//获取上传时间
		$_POST['comtime'] = date('Y/m/d H:i:s');

		//处理图片
        if($_FILES['gpic']['error'] == 0){
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
                $str =  ltrim($upload->rootPath,'.').$info['gpic']['savepath'].$info['gpic']['savename'];
                $_POST['gpic'] = $str;
            }
        }

		//创建数据
		$goodscom = $goodscomment->create();
		//执行修改
		$goodscom = $goodscomment->save();
		//执行添加
		if ($goodscom) {
			//设置成功后跳转页面地址
			$this->success('更新成功',U('Admin/Goodscomment/index'),3);
		}else{
			//错误信息页面跳转
			$this->error('更新失败');
		}
	}

	public function ajaxdel(){
        // var_dump($_GET);
        //创建表对象
        $goodscomment = M('goods_comment');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $goodscomment->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function ajaxedit(){
        //创建表对象
        $goodscomment = M('goods_comment');

        $res = $goodscomment->save($_POST);

        //获取上传时间
		// $_POST['comtime'] = date('Y/m/d H:i:s');
       
       //向ajax返回数据
        if ($res) {
            echo 1;
        }else{
            echo 0;
        }
    }


 }
?>