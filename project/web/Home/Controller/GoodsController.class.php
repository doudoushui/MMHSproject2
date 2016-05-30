<?php
 // 设定要用的默认时区。自 PHP 5.1 可用
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    //date_default_timezone_set('PRC');
    //显示商品列表
    public function index(){
        $id = I('get.id');
        //创建对象
        $cates=M('Category');
        $info=$cates->find($id);
        // $where ='display=1 ';
        // $where = array('display'=>1);
        $where['display'] = 1;
        $where['state'] = 1;
        //$where ='cate_id='."$id".'';
        $goods=$cates->join('right join hs_goods on hs_category.id=hs_goods.cate_id')->where($where)->order('pid')->limit(15)->select();
       // echo $cates->_sql();die();
       //var_dump($goods);
       $goods = M('goods');
       //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 4;
       //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $wheres = "gname like '%".$_GET['keyword']."%'";
        }else{
            $wheres = '';
        }
       // //查询满足要求的总记录数
        $count = $goods->where($wheres)->count();
        // //实例化分页类 传入中记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        // //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;
        //查询
        $goodss = $goods->where($wheres)->where('state = 1')->limit($limit)->select();
        // var_dump($jobs);
        //分页显示输出
        $pages = $Page->show();
        //分配变量
        //$this->assign('cate',$cate);
        $this->assign('goods',$goods);
        $this->assign('goodss',$goodss);
        $this->assign('info',$info);
        $this->assign('pages',$pages);
        //解析模板
    	// $this->display();
        $cate = M('category');
      //查看sql语句
      //$cate->getLastSql();
      // echo $cate->getLastSql();
      //获取每页显示的数量
      //$num = !empty($_GET['num']) ? $_GET['num'] : 20;
      //获取关键字
      if(!empty($_GET['keyword'])){
        //有关键字
        $wh = "cname like '%".$_GET['keyword']."%'";
        }else{
       $wh = '';
        }
        // 查询满足要求的总记录数
        //$count = $cate->where($where)->count();
        //实例化分页类 传入总记录数和每页显示的记录数
       // $Page = new \Think\Page($count,$num);
        //获取limit参数
       // $limit = $Page->firstRow.','.$Page->listRows;
      //  $limit = 'pid<6';
        //执行查询
        $where='display=1';
       // $cat = $cate->where($wh)->order('concat(path,id) asc')->limit(12)->select();//执行查询
        $cates = $cate->where($where)->order('concat(path,id) asc')->limit(12)->select();
        
       // $cates = $cate->where($where)->order('pid')->limit(12)->select();
        // 分页显示输出
       // $pages = $Page->show();
        //遍历
        foreach ($cates as $k => $v) {
           //获取要添加|---个数
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['cname'] = str_repeat('',$c).$v['cname'];

        }
        // foreach ($cat as $k => $v) {
        //     //获取要添加|---个数
        //     $c = count(explode(',',$v['path']))-2;
        //     $cates[$k]['cname'] = str_repeat('|-',$c).$v['cname'];

        // }
         //var_dump($cates);
       // die;
      //分配变量
        $this->assign('cates',$cates);
        $this->assign('cat',$cat);
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

     public function search(){
        //创建对象gnamegname
        $goods = M('goods');
        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "gname like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }
       //执行查询
        $goodss = $goods->where($where)->select();
        //var_dump($goodss);
        foreach ($goodss as $k => $v) {
          //var_dump($v);
        }
        //分配变量
        $this->assign('goodss',$goodss);
        $this->assign('v',$v);
         $cate = M('category');
       $cate_id=empty($_GET['cate_id'])?1:$_GET['cate_id'];
      //查看sql语句
      //$cate->getLastSql();
      // echo $cate->getLastSql();
      //获取每页显示的数量
     //$num = !empty($_GET['num']) ? $_GET['num'] : 20;
      //获取关键字
      // if(!empty($_GET['keyword'])){
      //   //有关键字
      //   $wh = "cname like '%".$_GET['keyword']."%'";
      //   }else{
      //  $wh = '';
      //   }
      //  $limit = 'pid<6';
        //执行查询
        $where='display=1';
        $where='pid<10';
       // $cat = $cate->where($wh)->order('concat(path,id) asc')->limit(12)->select();//执行查询
        //$cates = $cate->where($where)->order('concat(path,id) asc')->limit(12)->select();
        
       $cates = $cate->where($where)->order('pid')->limit(15)->select();
        // 分页显示输出
        //$pages = $Page->show();
        //遍历
        foreach ($cates as $k => $v) {
           //获取要添加|---个数
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['cname'] = str_repeat('',$c).$v['cname'];

        }
      //var_dump($cates);
      // die;
      //分配变量
        $this->assign('cates',$cates);
        $this->assign('cat',$cat);
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

public function zan_edit(){
       $user = M('goods');
       //var_dump($_GET);die;
       //var_dump($_GET['zan']);
       //$_GET['gtime'] = date('Y/m/d H:i:s');
      // var_dump($_GET);
       $_GET['zan']=$_GET['zan']+1;
       $_GET['id'];
       //创建表对象
       //$_GET['zan']=$zan;
       
        // var_dump($_GET);
        //执行修改
        $user->create();
        $res = $user->save($_GET);
       // 执行更新数据
        if($res){
            $this->success('多谢点赞呦,亲~~~', $_SERVER['HTTP_REFERER']);
        }else{
           //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('点赞失败');
        }
    }
    public function ajax(){
        //创建表对象
        $goods = M('goods');
        //$res = $goods->save($_GET);
        $goodss = $goods-> page($_GET['p'],4) -> order('id') ->select();
        // echo $goods->_sql();
         //var_dump($goodss);
        //json_encode($jobs);
        //向ajax返回数据
        if ($goodss) {
            // echo json_encode($jobs);
            $this->ajaxReturn($goodss);
        }else{
            echo 0;
        }
    } 
     public function ajaxsearch(){
        //创建表对象
        $goods = M('goods');
        //$res = $goods->save($_GET);
        $goodss = $goods-> page($_GET['p'],4) -> order('id') ->select();
        echo $goods->_sql();die();
        var_dump($goodss);
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