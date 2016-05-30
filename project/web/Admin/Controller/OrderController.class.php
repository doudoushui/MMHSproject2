<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller {
	//显示商品列表
    public function index(){
        //创建对象
        $order = M('order');
        $og = M('order_goods');

        // var_dump($order);
       //获取每页显示的数量
      $num = !empty($_GET['num']) ? $_GET['num'] : 2;

        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "ordernum like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }
        // var_dump($where);
        // 查询满足要求的总记录数
        $count = $og->where($where)->count();
     // var_dump($count);
// exit;
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;

         //执行查询
       $sql = "SELECT o.id,o.ordertime,o.ordernum,og.gpic,og.gname,og.price,og.qty,og.ordernum,og.order_id,o.allprice,o.oname,o.tel,o.address,o.ostate FROM hs_order o, hs_order_goods og WHERE o.id=og.order_id limit $limit";
        $orders =$order->query($sql);  

        // 分页显示输出
        $pages = $Page->show();
      
        
        
        //分配变量
        $this->assign('orders',$orders);
        $this->assign('pages',$pages);
    	//解析模板
    	$this->display();
    }




    //执行修改
    public function update(){
        // var_dump($_POST);
         //创建数据表对象
        $orders = M('order');
        // var_dump($orders);
        // var_dump($_GET);
        // $orders->ostate = $_GET['ostate'];
       $ostate = $_GET['ostate'];
       $id = $_GET['id'];
        $data['id'] = $id;
        $data['ostate'] = $ostate;
       $res = $orders->save($data);
        $orders->_sql();
       // echo '<pre>';
       //     print_r($res);
       // echo '</pre>';
       if ($res) {
            $this->success('修改成功', U('Admin/Order/index'),0);
        }else{
            $this->error('修改失败', U('Admin/Order/index'),0);
        }
        
    }

    Public function momo(){
      $orders = M('order');
      // echo '<pre>';
        // print_r($_POST);
      // echo '</pre>';
      $id = $_POST['id'];
      $oname = $_POST['oname'];
      // $date['id'] = $id;
      $data['oname'] = $oname;
      $res = $orders->where("id='$id'")->save($data);
     // echo $orders->_sql();
       // echo '<pre>';
         // print_r($res);
       // echo '</pre>';
  if($res){
    echo 1;
  }else{
    echo 0;
  }
    }

}