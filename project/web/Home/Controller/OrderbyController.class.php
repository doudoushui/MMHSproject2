<?php
  namespace Home\Controller;
  use Think\Controller;
  class OrderbyController extends Controller{
  	public function index(){

  		$orderaddress = M('order_address');
  		$user_id=$_SESSION['userid'];
      $xj = $orderaddress->where('user_id="'.$user_id.'" AND `default`="0"')->find();

  		$this->assign('xj',$xj);
       $user = M('user');

       $uid = $_SESSION['userid'];
       $pic = $user->query("select pic from hs_user where id = $uid");
      //$ress =  $user->_sql();
      // var_dump($res);

       $pic = $pic[0]['pic'];
       // var_dump($pic);
      //分配变量
      $this->assign('pic',$pic);
  		$this->display();
  	}

  	public function insert(){
      if(empty($_POST['oname'])){
        $this->error('请填写收货地址',U('Home/Orderaddress/addaddress'),300);
      }
      $tmp = M();
      $tmp->startTrans();

  		$order = M('order');
  		$goods = M('goods');
      $og = M('order_goods');
  		$user_id = $_SESSION['userid'];

      $ordernum = time();
      $oname = $_POST['oname'];
      $tel = $_POST['tel'];
      $address = $_POST['address'];
      $allprice = $_POST['allprice'];
      $ordertime = date('Y-m-d H:i:s');
      

      $data['user_id'] = $user_id;
      $data['ordernum'] = $ordernum;
      $data['oname'] = $oname;
      $data['tel'] = $tel;
      $data['address'] = $address;
      $data['allprice'] = $allprice;
      $data['ordertime'] = $ordertime;

      $res = $order->add($data);
      if (!$res) {
        $tmp->rollback();

      }
      $oid = $res;

      
      foreach ($_SESSION['cart'] as $key => $value) {
        $goods_id = $value['goods_id'];
        $id = $value['goods_id'];
        $gpic = $value['gpic'];
        $gname = $value['gname'];
        $price = $value['price'];
        $qty = $value['qty'];
        
        $dataa['user_id'] = $user_id;
        $dataa['goods_id'] = $goods_id;
        $dataa['price'] = $price;
        $dataa['qty'] = $qty;
        $dataa['gpic'] = $gpic;
        $dataa['gname'] = $gname;
        $dataa['order_id'] = $oid;
        $dataa['ordernum'] = $ordernum;
        $ress=$og->add($dataa);
        if (!$ress) {
          
        }
        $resu = $goods->find($id);
        $stock = $resu['stock'];
        $sale = $resu['sale'];
        $stock1 = $stock-$qty;
        $sale1 = $sale+$qty;

        $datas['stock'] = $stock1;
        $datas['sale'] = $sale1;
        $res1 = $goods->where('id="'.$id.'"')->save($datas);
        if (!$res1) {
          $tmp->rollback();
        }
      }
      $tmp->commit();
      // unset($_SESSION['cart']);
      $_SESSION['cart'] = array();
      $this->success('提交成功',U('Home/Order/index'),300);

      // echo '<pre>';
      //   print_r($res);
      // echo '</pre>';
      // if($res){
      // 	$this->success('提交成功',U('Home/Order/index'),300);
      // }else{
      // 	$this->error('提交失败',U('Home/Goods/index'),300);
      // }

      // $sql = "SELECT * FROM hs_goods WHERE id = '$id'";
      // var_dump($sql);
      // var_dump($id);
      
       // $resu = $goods->query($sql);
      // foreach ($resu as $k => $v) {
      // 	 $stock = $v['stock'];
      // 	 $sale = $v['sale'];
      // }
        

        
     
     
    // echo $goods->_sql();
    //   if($res1){
    //   	$this->success('修改成功');
    //   }else{
    //   	$this->error('修改失败');
    //   }

      
    //   if($ress){
    //     $this->success('成功');
    //   }else{
    //     $this->error('失败');
    //   }
    
    }
  }
?>