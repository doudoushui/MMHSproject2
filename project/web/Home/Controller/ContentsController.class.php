<?php
 // 设定要用的默认时区。自 PHP 5.1 可用
namespace Home\Controller;
use Think\Controller;
class ContentsController extends Controller {
    //date_default_timezone_set('PRC');
    //显示商品列表
    public function index(){
        $id =$_GET['id'];
       //var_dump($_GET);
       //var_dump($_SESSION);
        //创建对象
        $goods=M('Goods');
        $image=M('image');
        $info=$goods->find($id);
       // var_dump($info);
        $where['state'] = 1;
        $where['id'] = $id;
         $res = $image->query("select * from hs_image where goods_id=$id");
       //var_dump($res);
       $goodss=$goods->where($where)->select();
       //分配变量
        $this->assign('goodss',$goodss);
        $this->assign('info',$info);
        $this->assign('res',$res);
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
    public function ajax(){
        //创建表对象
        $goods = M('goods');
        //$res = $goods->save($_POST);
        $goodss = $goods-> page($_GET['p'],4) -> order('id') ->select();
        // echo $goods->_sql();
        // var_dump($goodss);
        //json_encode($jobs);
        //向ajax返回数据
        if ($goodss) {
            // echo json_encode($jobs);
            $this->ajaxReturn($goodss);
        }else{
            echo 0;
        }
    } 

   
}