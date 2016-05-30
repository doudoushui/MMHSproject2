<?php
  namespace Home\Controller;
  use Think\Controller;
  class OrderaddressController extends Controller{

  	public function index(){

  		if(empty($_SESSION)){
  			$this->error('您没登陆',U('Home/Login/index'),'5');
  		}

  		// 创建对象
      // var_dump($_SESSION); 
  		$user = M('user');
  		$id=$_SESSION['userid'];
  		$xj = $user->find($id);
      $orderaddres = M('order_address');
      // var_dump($res);
  		// 获取每页显示的数量
  		$num = !empty($_GET['num']) ? $_GET['num'] : 5;
  		if(!empty($_GET['keyword'])){
  			// 有关键字
  			$where = "oname like '%".$_GET['keyword']."%'";
  		}else{
  			$where = '';
  		}
       $where['user_id'] = $id;
  		 $count = $orderaddres->where($where)->count();

  		// 实例化分页类 传入总记录数和每页显示的记录数
  		$Page = new \Think\Page($count,$num);
  		// 获取limit参数
  		$limit = $Page->firstRow.','.$Page->listRows;

     $sql = "SELECT u.id,u.username,oa.id,oa.user_id,oa.oname,oa.tel,oa.default,oa.address FROM hs_user u, hs_order_address oa WHERE u.id=oa.user_id AND `user_id`='$id' limit $limit";
  		$orderaddress = $orderaddres->query($sql);

  		$pages = $Page->show();
     // var_dump($orderaddress);
  		// 分配变量
  		$this->assign('xj',$xj);
  		$this->assign('orderaddress',$orderaddress);
  		$this->assign('pages',$pages);
  		// 解析模板
  		$this->display();
  	}

    public function addaddress(){
      if(empty($_SESSION)){
        $this->error('还未登录,请登录',U('Home/Login/index'),'5');
        }
        $user = M('user');
        $id=$_SESSION['userid'];
        $xj = $user->find($id);


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

        // 解析模板
        $this->display();
    }
    

    public function amend(){
       $orderaddres = M('order_address');
        //获取id
        $id = $_GET['id'];
        $user_id = $_SESSION['userid'];
        //执行更新
        $data['default'] = '1';
        $orderaddres->where('user_id="'.$user_id.'"')->save($data);

        $datas['default'] = '0';
        $res = $orderaddres->where('id="'.$id.'"')->save($datas);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
       
       
    }


    public function update(){
      // echo '<pre>';
      //   print_r($_POST);
      //   print_r($_SESSION);
      // echo '</pre>';

      $orderaddress = M('order_address');
      $userid = $_SESSION['userid'];
      $oname = $_POST['oname'];
      $tel = $_POST['tel'];
        $hcity = $_POST['hcity'];
        $hproper = $_POST['hproper'];
        $harea = $_POST['harea'];
        $ad = $_POST['ad'];
      $str = $hcity.$hproper.$harea.$ad;
      $default = $_POST['default'];

    
      $data['user_id'] = $userid;
      $data['oname'] = $oname;
      $data['tel'] = $tel;
      $data['address'] = $str;
      $data['default'] = $default;

      $res = $orderaddress->add($data);
      // echo '<pre>';
      //   print_r($res);
      // echo '</pre>';
      
    $sql = "SELECT `default` FROM hs_order_address WHERE `id`='$res'";
      $oa = $orderaddress->query($sql);
      // echo '<pre>';
      //   print_r($oa);
      // echo '</pre>';
      $default1 = $oa[0]['default'];
      if(empty($default1)){
         $default2 = '1';
         $dataa['default'] = $default2;
         $oaa = $orderaddress->where('id="'.$res.'"')->save($dataa);
         if($oaa){
          $this->success('提交成功',U('Home/Orderaddress/index'),3);
        }else{
          $this->error('提交失败',U('Home/Orderaddress/addaddress'),3);
        }

      }else{
        $default2 = '1';
         $dataa['default'] = $default2;
         $oaa = $orderaddress->where('user_id="'.$userid.'"')->save($dataa);
         $default3 = '0';
         $datas['default'] = $default3;
         $ress = $orderaddress->where('id="'.$res.'"')->save($datas);
                // echo $orderaddress->_sql();
         // echo '<pre>';
         //   print_r($ress);
         // echo '</pre>';

          if($ress){
            $this->success('成功',U('Home/Orderaddress/index'),3);
          }else{
            $this->error('失败',U('Home/Orderaddress/addaddress'),3);
          }
      }
     
    }

    public function xg(){
      // echo '<pre>';
      //   print_r($_SESSION);
      //   print_r($_GET);
      // echo '</pre>';
      if(empty($_SESSION)){
        $this->error('您没登陆',U('Home/Login/index'),'5');
      }
      $user = M('user');
      $oa = M('order_address');
      $userid=$_SESSION['userid'];
      $id=$_GET['id'];
      $xj = $user->find($userid);
      $info = $oa->find($id);

      $this->assign('xj',$xj);
      $this->assign('info',$info);
      // 解析模板
      $this->display();
    }

    public function xgl(){
      // echo '<pre>';
      //   print_r($_SESSION);
      //   print_r($_POST);
      // echo '</pre>';

      $oa = M('order_address');
      $oa->create();
      $res = $oa->save();
      
      if($res){
        $this->success('修改成功',U('Home/Orderaddress/index'),3);
      }else{
        $this->error('修改失败',U('Home/Orderaddress/xg'),3);
      }
    }

    public function ajaxdel(){
        // var_dump($_GET);
        //创建表对象
        $orderaddres = M('order_address');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $orderaddres->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
  }
?>