<?php
  namespace Home\Controller;
  use Think\Controller;
  class OrderController extends Controller{
  	public function index(){
  		if(empty($_SESSION)){
  			$this->error('您没登陆',U('Home/Login/index'),'5');
  		}
      // echo '<pre>';
      // 	print_r($_SESSION);
      // echo '</pre>';
  		$userid=$_SESSION['userid'];
  		$user=M('user');
  		$order = M('order');
      $og = M('order_goods');
  		$xj = $user->find($userid);

       $num = !empty($_GET['num']) ? $_GET['num'] : 2;
       if(!empty($_GET['keyword'])){
            //有关键字
            $where = "ordernum like '%".$_GET['keyword']."%'";
        }else{
            $where ='';
        }
         $where['user_id'] = $userid;
       $count = $og->where($where)->count();

        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;
      
       $sql = "SELECT o.id,o.user_id,o.ordertime,o.ordernum,og.goods_id,o.allprice,o.oname,o.tel,o.address,o.ostate,og.gname,og.gpic,og.price,og.qty,og.order_id,og.user_id FROM hs_order o, hs_order_goods og WHERE o.id=og.order_id AND o.user_id=og.user_id AND og.user_id='$userid' limit $limit";
        $orders =$order->query($sql);
        // var_dump($orders);

        $pages = $Page->show();

  		$this->assign('xj',$xj);
      $this->assign('orders',$orders);
      $this->assign('pages',$pages);
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

    public function delivered(){
      if(empty($_SESSION)){
        $this->error('您没登陆',U('Home/Login/index'),'5');
      }
      $userid=$_SESSION['userid'];
      $user=M('user');
      $order = M('order');
      $og = M('order_goods');
      $xj = $user->find($userid);

       $num = !empty($_GET['num']) ? $_GET['num'] : 2;
       if(!empty($_GET['keyword'])){
            //有关键字
            $where = "ordernum like '%".$_GET['keyword']."%'";
        }else{
            $where ='';
        }
       $count =  $og->query('select count(id) from hs_order where ostate=1 and `userid` = "'.$userid.'"' );
        // $count = $og->_sql();
        // var_dump($count);
        // die();
        $count = $count[0]['count(id)'];
        // var_dump($count);
        // die();

       // $count = $og->where($where)->count();

        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;
      
       $sql = "SELECT o.id,o.user_id,o.ordertime,o.ordernum,og.goods_id,o.allprice,o.oname,o.tel,o.address,o.ostate,og.gname,og.gpic,og.price,og.qty,og.order_id,og.user_id FROM hs_order o, hs_order_goods og WHERE o.id=og.order_id AND og.user_id='$userid' AND `ostate`='1' limit $limit";
        $orders =$order->query($sql);
        // var_dump($orders);


        $pages = $Page->show();

      $this->assign('xj',$xj);
      $this->assign('orders',$orders);
      $this->assign('pages',$pages);
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
    

    public function unfilled(){
      if(empty($_SESSION)){
        $this->error('您没登陆',U('Home/Login/index'),'5');
      }
      // echo '<pre>';
      //  print_r($_SESSION);
      // echo '</pre>';
      $userid=$_SESSION['userid'];
      $user=M('user');
      $order = M('order');
      $og = M('order_goods');
      $xj = $user->find($userid);

       $num = !empty($_GET['num']) ? $_GET['num'] : 2;
       if(!empty($_GET['keyword'])){
            //有关键字
            $where = "ordernum like '%".$_GET['keyword']."%'";
        }else{
            $where ='';
        }
        $sql = "select count(id) from hs_order where ostate=0 AND `user_id`='$userid'";
       $count =  $og->query($sql);
        // $count = $og->_sql();
        // var_dump($count);
        // die();
        $count = $count[0]['count(id)'];
        // var_dump($count);
        // die();

       // $count = $og->where($where)->count();

        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;
      
       $sql = "SELECT o.id,o.user_id,o.ordertime,o.ordernum,og.goods_id,o.allprice,o.oname,o.tel,o.address,o.ostate,og.gname,og.gpic,og.price,og.qty,og.order_id FROM hs_order o, hs_order_goods og WHERE o.id=og.order_id AND og.user_id='$userid' AND `ostate`='0' limit $limit";
        $orders =$order->query($sql);
        // var_dump($orders);


        $pages = $Page->show();

      $this->assign('xj',$xj);
      $this->assign('orders',$orders);
      $this->assign('pages',$pages);
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
    

    public function received(){
      if(empty($_SESSION)){
        $this->error('您没登陆',U('Home/Login/index'),'5');
      }
      $userid=$_SESSION['userid'];
      $user=M('user');
      $order = M('order');
      $og = M('order_goods');
      $xj = $user->find($userid);

       $num = !empty($_GET['num']) ? $_GET['num'] : 2;
       if(!empty($_GET['keyword'])){
            //有关键字
            $where = "ordernum like '%".$_GET['keyword']."%'";
        }else{
            $where ='';
        }
        $sql = "select count(id) from hs_order where ostate=2 AND `user_id`='$userid'";
       $count =  $og->query($sql);
        // $count = $og->_sql();
        // var_dump($count);
        // die();
        $count = $count[0]['count(id)'];
        // var_dump($count);
        // die();

       // $count = $og->where($where)->count();

        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;
      
        $sql = "SELECT o.id,o.user_id,o.ordertime,o.ordernum,og.goods_id,o.allprice,o.oname,o.tel,o.address,o.ostate,og.gname,og.gpic,og.price,og.qty,og.order_id,og.user_id FROM hs_order o, hs_order_goods og WHERE o.id=og.order_id AND og.user_id='$userid' AND `ostate`='2' limit $limit";
        $orders =$order->query($sql);
        // var_dump($orders);


        $pages = $Page->show();

      $this->assign('xj',$xj);
      $this->assign('orders',$orders);
      $this->assign('pages',$pages);
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

    public function update(){

      $order = M('order');
     $id=$_GET['id'];
      $ostate = $_GET['ostate'];
     $res = $order-> where('id="'.$id.'"')->setField('ostate',$ostate);

     if($res){
      $this->success('修改成功', U('Home/Order/index'),60);
     }else{
      $this->error('修改失败', U('Home/Order/index'),60);
     }
   }
  }
?>