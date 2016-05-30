<?php 
namespace Admin\Controller;
use Think\Controller;
class JobController extends Controller {
	public function index(){
		// echo '后台招聘信息管理';
		//创建对象
		$job = M('job');
		//获取上传时间
		$_POST['jtime'] = date('Y/m/d H:i:s');
		//查询编辑器上传的内容
		$res = $job->find($id);
		$res = htmlspecialchars_decode($res['jinfo']);

		/*echo $job->_sql();
		echo $job->getLastSql();*/

		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 2;

		//获取关键字
		if (!empty($_GET['keyword'])) {
			//有关键字
			$where = "work like '%".$_GET['keyword']."%'";
		}else{
			$where = '';
		}

		//查询满足要求的总记录数
		$count = $job->where($where)->count();
		//实例化分页类 传入中记录数和每页显示的记录数
		$Page = new \Think\Page($count,$num);
		//获取limit参数
		$limit = $Page->firstRow.','.$Page->listRows;

		//查询
		$jobs = $job->where($where)->limit($limit)->select();
		// var_dump($jobs);
		
		//分页显示输出
		$pages = $Page->show();

		//分配变量
		$this->assign('jobs',$jobs);
		$this->assign('pages',$pages);
		//解析模板
		$this->display();
	}

	//显示招聘信息添加页面
	public function add(){
		// echo '招聘信息添加页面';
		// 解析模板
		$this->display();
	}

	//处理招聘信息添加
	public function insert(){
		//创建表对象
		$job = M('job');

		//获取上传时间
		$_POST['jtime'] = date('Y/m/d H:i:s');

		//创建数据
		$job->create();
		//执行添加
		if($job->add()){
			//设置成功添加后跳转页面地址
			$this->success('新增成功',U('Admin/Job/index'),3);
		}else{
			//错误时的跳转页面
			$this->error('新增失败');
		}
	}

	//招聘信息的修改
	public function save(){
		// var_dump($_GET);die;
		$id = I('get.id');
		//创建表对象
		$job = M('job');
		//查询当前用户的数据
		$info = $job->find($id);
		// var_dump($info);die;
		
		$res = $job->find($id);
		$res = htmlspecialchars_decode($res['jinfo']);


		$this->assign('info',$info);
		$this->assign('res',$res);

		//解析模板
		$this->display();
	}

	//执行修改
	public function update(){
		//创建数据表对象
		$job = M('job');

		//获取上传时间
		$_POST['jtime'] = date('Y/m/d H:i:s');

		//创建数据
		$res = $job->create();
		//执行修改
		$res = $job->save();
		//执行添加
		if ($res) {
			//设置成功后跳转页面地址
			$this->success('更新成功',U('Admin/Job/index'),3);
		}else{
			//错误信息页面跳转
			$this->error('更新失败');
		}
	}

	public function ajaxdel(){
        // var_dump($_GET);
        //创建表对象
        $job = M('job');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $job->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function ajaxedit(){
        //创建表对象
        $job = M('job');
        //获取上传时间
		$_POST['jtime'] = date('Y/m/d H:i:s');
        
        $res = $job->save($_POST);
       
       //向ajax返回数据
        if ($res) {
            echo 1;
        }else{
            echo 0;
        }
    } 

 }
?>