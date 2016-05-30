<?php
 // 设定要用的默认时区。自 PHP 5.1 可用
namespace Home\Controller;
use Think\Controller;
class CartController extends Controller {
    //显示商品列表
    public function index(){
        // $user = M('user');

        //  $id = $_SESSION['userid'];
        //  $pic = $user->query("select pic from hs_user where id = $id");
        // $res =  $user->_sql();
        // // var_dump($res);

        //  $pic = $pic[0]['pic'];
        //  // var_dump($pic);

        // $this->assign('pic',$pic);
        if (!empty($_GET['goods_id'])) {
        
        $goods_id =$_GET['goods_id'];//17
        $qty =$_GET['qty'];//1
        // var_dump($_SESSION);
        // var_dump($_GET);
        if(empty($_SESSION['username'])){
             $this->success('请先登录哟~~~',U('Home/Login/index'),2);exit;
        }
        if($qty<1){
           $this->success('购买量不能小于1件呦~~,请重新购买呦',$_SERVER['HTTP_REFERER']);
           exit;
        }
        
        //创建对象
        $goods=M('Goods');
        // $user = M('user');

        //  $id = $_SESSION['userid'];
        //  $pic = $user->query("select pic from hs_user where id = $id");
        // $res =  $user->_sql();
        // // var_dump($res);

        //  $pic = $pic[0]['pic'];
        //  // var_dump($pic);

        // $this->assign('pic',$pic);
        $info=$goods->find($id);
        //var_dump($info);
        //分配变量
        // $this->assign('info',$info);
        $res=$goods->query("select * from hs_goods where id=$goods_id");
        //var_dump($res);
        $kc=$res['0']['stock'];
        $xl=$res['0']['sale'];
        //查库存  判断购买量是否大于库存
        if($qty >=$kc){
          $qty=$kc;
        }
        // //var_dump($kc);//显示库存
        //  if(!empty($_SESSION['cart'])){
        //    unset($_SESSION['cart']);
        // }
        //通过查询商品的库存来判断购买数量与库存的关系
        //判断商品已经存在session中我就直接+数量
        if (!empty($_SESSION['cart'][$goods_id])) {
            //之前的数量+上新值
                  $_SESSION['cart'][$goods_id]['qty'] += $qty;
                  // $_SESSION['cart'][$goods_id]['qty'] = $_SESSION['cart'][$goods_id]['qty']+$qty;
            //redirect('正在生成购物车信息....','','1');
            //exit;
        }else{

            $_SESSION['cart'][$goods_id]['qty']=$qty;//1
        }
        $_SESSION['cart'][$goods_id]['goods_id']=$goods_id;//cart.17.gid=17
        $_SESSION['cart'][$goods_id]['gpic']=$res[0]['gpic'];
        $_SESSION['cart'][$goods_id]['gname']=$res[0]['gname'];
        $_SESSION['cart'][$goods_id]['price']=$res[0]['price'];
       // var_dump($_SESSION['cart']['qty']);die();
        $ss=$_SESSION['cart'];
        //var_dump($ss);
       // var_dump($ss);
         //var_dump($_SESSION);
        // die();
         foreach ($ss as $k => $v) {
        //    var_dump($k);
        //    var_dump($v);
        //   // var_dump($ss);
        //    //var_dump($k);
         }
       //var_dump($v['gname']);
        //分配变量
        $this->assign('ss',$ss);
        //$this->assign('k',$k);
       // $this->assign('v',$v);
        $this->assign('res',$res);
        $this->assign('info',$info);
        //解析模板
        //$this->display();
        } else {
          $ss=$_SESSION['cart'];
          $this->assign('ss',$ss);
        }
        //带头像
         $user = M('user');

         $uid = $_SESSION['userid'];
         $pic = $user->query("select pic from hs_user where id = $uid");
        //$ress =  $user->_sql();
        // var_dump($res);

         $pic = $pic[0]['pic'];
         // var_dump($pic);
        //分配变量
        $this->assign('pic',$pic);
        //解析模板
        $this->display();
    }
     public function add(){
      if(empty($_SESSION['username'])){
             $this->success('请先登录哟~~~',U('Home/Login/index'),2);
             exit;
        }
       $goods_id=$_GET['goods_id']; 
       $qty=$_GET['qty']; 
       //var_dump($_SESSION);
       //var_dump($_GET);die();
       //创建对象
        $goods=M('Goods');
        $where['id']=$goods_id;
        $goodss=$goods->where($where)->select();
       // var_dump($goodss);
        $kc=$goodss['0']['stock'];
        $xl=$goodss['0']['sale'];
       // var_dump($kc);
       // var_dump($xl);
        //查库存  判断购买量是否大于库存
        if($qty >=$kc){
          $qty=$kc;
        }
        //通过查询商品的库存来判断购买数量与库存的关系
        //判断商品已经存在session中我就直接+数量
        if (!empty($_SESSION['cart'][$goods_id])) {
            //之前的数量+上新值
                  $_SESSION['cart'][$goods_id]['qty'] += $qty;
                  // $_SESSION['cart'][$goods_id]['qty'] = $_SESSION['cart'][$goods_id]['qty']+$qty;
            //redirect('正在生成购物车信息....','','1');
            //exit;
        }else{
          $_SESSION['cart'][$goods_id]['qty']=$qty;//1
        }
        $_SESSION['cart'][$goods_id]['goods_id']=$goods_id;//cart.17.gid=17
        $_SESSION['cart'][$goods_id]['gpic']=$goodss[0]['gpic'];
        $_SESSION['cart'][$goods_id]['gname']=$goodss[0]['gname'];
        $_SESSION['cart'][$goods_id]['price']=$goodss[0]['price'];
       // var_dump($_SESSION['cart']['qty']);die();
       // $ss=$_SESSION['cart'];
      // var_dump($_SESSION['cart']);
        //$this->redirect('index');
       // $this->redirect($_SERVER['HTTP_REFERER']);
       $this->success('加入购物车成功~~~', $_SERVER['HTTP_REFERER']);
    }
   
   public function zan(){
       $user = M('goods');
       //var_dump($_GET['zan']);
       //$_GET['gtime'] = date('Y/m/d H:i:s');
       $zan=$_GET['zan']+1;
       //创建表对象
       $_GET['zan']=$zan;
        // var_dump($_GET);
        //执行修改
        $user->create();
        $res = $user->save($_GET);
       // 执行更新数据
        if($res){
            $this->success('多谢点赞呦,亲~~~', $_SERVER['HTTP_REFERER']);
        }else{
           //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('更新失败');
        }
    }
    //减数量
    public function jian(){
      $goods_id = I('get.goods_id');
      $qty = $_GET['qty'];
      // die;
       // var_dump($_SESSION);
       if ($qty == 1) {
        // $_SESSION['cart'][$goods_id]['qty'] = 1;
       }else{
        $_SESSION['cart'][$goods_id]['qty'] = $qty-1;
       }
       // $this->success('', $_SERVER['HTTP_REFERER']);
       $this->redirect('index');
    }
    //加数量
    public function jia(){
       $goods_id = I('get.goods_id');
       $qty = $_GET['qty'];
       $goods=M('goods');
       $where['id']=$goods_id;
       $goodss=$goods->where($where)->select();
        $stock=$goodss[0]['stock'];
       // var_dump($stock);die();
       if ($qty >=$stock) {
         $_SESSION['cart'][$goods_id]['qty'] = $stock;
       }else{
        $_SESSION['cart'][$goods_id]['qty'] = $qty+1;
       }
       $this->redirect('index');
       
    }
    public function del(){
         // var_dump($_GET);die();
        //获取id
        $goods_id = $_GET['goods_id'];
        unset ($_SESSION['cart'][$goods_id]);
        // $this->success('删除成功,~~~', $_SERVER['HTTP_REFERER']);
        $this->success('删除成功', U('index'));
      
      
    }
    public function delall(){
        //$goods_id = $_GET['goods_id'];
        //var_dump($goods_id);
       $_SESSION['cart'] = array();
      // session(null);
        $this->success('删除成功,购物车空空如也~~~~', U('index'));
     // var_dump($_SESSION);
      
    }
}