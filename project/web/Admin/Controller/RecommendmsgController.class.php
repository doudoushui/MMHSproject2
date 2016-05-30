<?php 
namespace Admin\Controller;
use Think\Controller;
class RecommendmsgController extends Controller {
	public function index(){
		// echo '评论信息管理';
		//创建对象
		$recommendmsg = M('recommendmsg');

		//查询编辑器上传的内容
		$res = $recommendmsg->find($id);
		// $res = htmlspecialchars_decode($res['r_msg']);

		/*echo $recommendmsg->_sql();
		echo $recommendmsg->getLastSql();*/

		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 5;

		//获取关键字
		if (!empty($_GET['keyword'])) {
			//有关键字
			$where = "rcompany like '%".$_GET['keyword']."%'";
		}else{
			$where = '';
		}

		//查询满足要求的总记录数
		$count = $recommendmsg->where($where)->count();
		//实例化分页类 传入中记录数和每页显示的记录数
		$Page = new \Think\Page($count,$num);
		//获取limit参数
		$limit = $Page->firstRow.','.$Page->listRows;

		//查询
		$recommendmsgs = $recommendmsg->join('hs_recommend ON hs_recommend.id = hs_recommendmsg.recomid')->where($where)->limit($limit)->order('rmsgtime desc')->select();
		// var_dump($recommendmsgs);die();
		// $res = htmlspecialchars_decode($recommends['commsg']);
		
		foreach ($recommendmsgs as $k => $v) {
 			// var_dump($v['work']);
 			// var_dump($v['id']);
 			$rcompany = $v['r_title'];
 			$recomid = $v['id'];
 			$recommendmsg -> query("update hs_recommendmsg set rcompany = '$rcompany' where recomid = $recomid");
 		}	
 		$recommendmsgs = $recommendmsg->where($where)->limit($limit)->order('rmsgtime desc')->select();
 		// $rid = $res['id'];
 		// var_dump($res);die;
		//分页显示输出
		$pages = $Page->show();

		//分配变量
		$this->assign('recommendmsgs',$recommendmsgs);
		$this->assign('pages',$pages);
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
		$recommendmsg = M('recommendmsg');

		//获取上传时间
		$_POST['comtime'] = date('Y/m/d H:i:s');
		//创建数据
		$recommendmsg->create();
		//执行添加
		if($recommendmsg->add()){
			//设置成功添加后跳转页面地址
			$this->success('新增成功',U('Admin/recommendmsg/index'),3);
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
		$recommendmsg = M('recommendmsg');
		//查询当前用户的数据
		$info = $recommendmsg->find($id);
		// var_dump($info);die;
		
		$resg = $recommendmsg->find($id);
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
		$recommendmsg = M('recommendmsg');

		//获取上传时间
		$_POST['comtime'] = date('Y/m/d H:i:s');

		//创建数据
		$goodscom = $recommendmsg->create();
		//执行修改
		$goodscom = $recommendmsg->save();
		//执行添加
		if ($goodscom) {
			//设置成功后跳转页面地址
			$this->success('更新成功',U('Admin/recommendmsg/index'),3);
		}else{
			//错误信息页面跳转
			$this->error('更新失败');
		}
	}

	public function ajaxdel(){
        // var_dump($_GET);
        //创建表对象
        $recommendmsg = M('recommendmsg');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $recommendmsg->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function ajaxedit(){
        //创建表对象
        $recommendmsg = M('recommendmsg');

        $res = $recommendmsg->save($_POST);

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