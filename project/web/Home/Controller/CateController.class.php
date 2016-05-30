<?php
namespace Home\Controller;
use Think\Controller;
class CateController extends Controller {
	//显示分类列表
    public function index(){
       $cate_id=I('get.cate_id');
        //var_dump($_GET);
        //创建对象
        $goods=M('Goods');
        $where['is_hot'] = 1;
        $where['cate_id']=$_GET['cate_id'];
       //var_dump($where);
       $g= $goods->where($where)->select();
      //  var_dump($g);
       //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 12;
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
        $goodss = $goods->where($wheres)->limit($limit)->select();
        // var_dump($jobs);
        //分页显示输出
        $pages = $Page->show();
        foreach ($g as $k => $v) {
           //var_dump($v['cate_id']);
        }
        //分配变量
        $this->assign('g',$g);
        $this->assign('v',$v);
        $this->assign('pages',$pages);
        //实例化商品分类页
       $cate = M('category');
       $cate_id=empty($_GET['cate_id'])?1:$_GET['cate_id'];
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
        //查询满足要求的总记录数
        //$count = $cate->where($where)->count();
        //实例化分页类 传入总记录数和每页显示的记录数
        //$Page = new \Think\Page($count,$num);
        //获取limit参数
        //$limit = $Page->firstRow.','.$Page->listRows;
        //$limit = 'pid<6';
        //执行查询
        $where='display=1';
        $where='pid<10';
        $cates = $cate->where($where)->order('pid')->limit(15)->select();
        // 分页显示输出
        // $pages = $Page->show();
        //遍历
        foreach ($cates as $k => $v) {
           //获取要添加|---个数
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['cname'] = str_repeat('',$c).$v['cname'];

        }
       foreach ($cat as $k => $v) {
            //获取要添加|---个数
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['cname'] = str_repeat('|-',$c).$v['cname'];

        }
         //var_dump($cates);
       // die;
      //分配变量
        $this->assign('cates',$cates);
        $this->assign('cat',$cat);
        //$this->assign('pages',$pages);
        $user = M('user');

         $id = $_SESSION['userid'];
         $pic = $user->query("select pic from hs_user where id = $id");
        $res =  $user->_sql();
        // var_dump($res);

         $pic = $pic[0]['pic'];
         // var_dump($pic);

        $this->assign('pic',$pic);
        //解析模板
        $this->display();
    }
    public function ajax(){
        //创建表对象
        $goods = M('goods');
         // var_dump($_GET);die;
         //die();
        //$res = $goods->save($_GET);
        // $where=$_GET['p'];
        $where->cate_id=$_GET['cate_id'];
        $goodss = $goods->where('state=1')-> page($_GET['p'],4) ->where($where)->select();
        // ($goodss);
        //echo  $goods->_sql();
        //console.log($res);
        // $goodss
        //json_encode($jobs);
        //向ajax返回数据
        if ($goodss) {
            // echo json_encode($goodss);
            $this->ajaxReturn($goodss);
        }else{
            echo 0;
        }
    } 
}