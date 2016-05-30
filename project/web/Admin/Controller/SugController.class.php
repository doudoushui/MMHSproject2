<?php
namespace Admin\Controller;
use Think\Controller;
class SugController extends Controller {
	//显示商品列表
    public function index(){
       $sug = M('suggestion');
       $id=$_SESSION['userid'];

        $num = !empty($_GET['num']) ? $_GET['num'] : 2;
       if(!empty($_GET['keyword'])){
            //有关键字
            $where = "username like '%".$_GET['keyword']."%'";
        }else{
            $where ='';
        }

       $count = $sug->where($where)->count();

       // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;

        $sql = "SELECT * FROM hs_suggestion limit $limit";

        $sugs = $sug->query($sql);

         $pages = $Page->show();


        $this->assign('sugs',$sugs);
         // $this->assign('xj',$xj);
        $this->assign('pages',$pages);
       // 解析模板
       $this->display();
    }




    //执行修改
    // public function update(){
    //     // var_dump($_POST);
    //      //创建数据表对象
    //     $orders = M('order');
    //     // var_dump($orders);
    //     // var_dump($_GET);
    //     // $orders->ostate = $_GET['ostate'];
    //     $ostate = $_GET['ostate'];
    //     $id = $_GET['id'];
    //     $data['id'] = $id;
    //     $data['ostate'] = $ostate;
    //    $res = $orders->save($data);
    //    echo '<pre>';
    //        print_r($res);
    //    echo '</pre>';
    //    if ($res) {
    //         $this->success('修改成功', U('Admin/Order/index'),0);
    //     }else{
    //         $this->error('修改失败', U('Admin/Order/index'),0);
    //     }
        
    // }

}