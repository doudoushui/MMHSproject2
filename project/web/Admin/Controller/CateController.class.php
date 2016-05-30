<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends Controller {
	//显示分类列表
    public function index(){
        // echo '后台分类列表';
        //创建对象
        $cate = M('category');
   
        //查看sql语句
        // echo $cate->_sql();
        // echo $cate->getLastSql();

       //获取每页显示的数量
       $num = !empty($_GET['num']) ? $_GET['num'] : 5;

        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "cname like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }
        // 查询满足要求的总记录数
        $count = $cate->where($where)->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;

         //执行查询
        $cates = $cate->where($where)->order('concat(path,id) asc')->limit($limit)->select();

        // 分页显示输出
        $pages = $Page->show();
        //遍历
        foreach ($cates as $k => $v) {
            //获取要添加|---个数
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['cname'] = str_repeat('|--',$c).$v['cname'];

        }
         //var_dump($cates);

        // die;
      
        //分配变量
        $this->assign('cates',$cates);
        $this->assign('pages',$pages);
    	//解析模板
    	$this->display();
    }

    //显示分类的添加页面
    public function add(){
        //创建对象
        $cate = M('category');
        //查询所有分类
        $cates = $cate->order('concat(path,id) asc')->select();
         foreach ($cates as $k => $v) {
            //获取要添加|--个数
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['cname'] = str_repeat('|--',$c).$v['cname'];

        }
        // var_dump($cates);
        //分配变量
        $this->assign('cates',$cates);
    	//解析模板
        $this->display();
    }

    //处理分类的数据添加
    public function insert(){
        //创建表对象
        $cate = M('category');
        //针对path字段进行获取
        //检查是否为顶级分类
        if($_POST['pid'] == 0){
            $_POST['path'] = '0,';
        }else{
            //查找父级分类的信息
            $info = $cate->where('id = '.$_POST['pid'])->find();
            // var_dump($info);
            $_POST['path'] = $info['path'].$info['id'].',';
        }

        // 创建数据
       $cate->create();
        //执行添加
       if($cate->add()){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('新增成功', U('Admin/Cate/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('新增失败',U('Admin/Cate/index'));
       }

    }

    //分类的修改
    public function save(){
        // var_dump($_GET);
        $id = I('get.id');
        //创建表对象
        $cate = M('category');
        //获取所有分类
        $cates = $cate->select();
        // var_dump($cates);
        foreach ($cates as $k =>$v){
      //计算出分隔多少次
      $c=count(explode(',',$v['path']))-2;
      $cates[$k]['cname']=str_repeat('|---',$c).$v['cname'];
        }
        //查询当前分类的数据
        $info = $cate->find($id);
        // var_dump($info);die;
    
        //分配变量
        $this->assign('info',$info);
        $this->assign('cates',$cates);

        //解析模板
        $this->display();
    }
    public function del(){
        //获取接收的数据
        $id = $_GET['id'];//3
        $pid = $_GET['pid'];//0
       // $path = $_GET['path'];
        //var_dump($_GET);
        //实例化对象
        $cate=M('category');
        $where['id'] = array('EQ',$id);
        // $where['pid'] = array('EQ',0);
        $cates=$cate->where($where)->select();
        if ($cates[0]['pid'] === '0') {//判断类型和数值是否为0
            $this->success('不能删除，该类是顶级分类呦',U('Admin/Cate/index'),2);
            exit;
        }

        $data['pid'] = $id;
        $cates=$cate->where($data)->select();
        if ($cates) {
            $this->success('不能删除，该类别下面还有子类呦',U('Admin/Cate/index'),2); 
                exit;
        }

        //还有商品不能删除
        $goods=M('goods');
        $wh['cate_id']=$id;
        //var_dump($wh);
        $goodss=$goods->where($wh)->select();
        // $gid=$goodss[0]['cate_id'];
          if($goodss)
            {
               $this->success('不能删除，该类别下面还有商品呦',U('Admin/Cate/index'),2); 
                exit;
            }
        //执行删除
        $res = $cate->where($where)->delete();
        if($res){
           $this->success('删除成功',U('Admin/Cate/index'),2);
        
        }else{
           $this->error('删除失败');
        }
    }
    //执行修改
    public function update(){
         //创建数据表对象
        $cate = M('category');

         //针对path字段进行获取
        //检查是否为顶级分类
        if($_POST['pid'] == 0){
            $_POST['path'] = '0,';
        }else{
            //查找父级分类的信息
            $info = $cate->where('id = '.$_POST['pid'])->find();
            // var_dump($info);
            $_POST['path'] = $info['path'].$info['id'].',';
        }
        //var_dump($_POST);die;
        

        //创建数据
        $res = $cate->create();
        //执行修改
       $res =  $cate->save();
       // var_dump($res);
        //执行添加
       if($res){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('更新成功', U('Admin/cate/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('更新失败');
       }
    }
    public function ajaxedit(){
        // var_dump($_GET);
        //创建表对象
        $cate = M('category');
        //获取id
       
        //$id = $_GET['id'];
        //$id = I('get.id');
        //执行删除
        $res = $cate->save($_GET);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

public function ajaxedit_display(){
        // var_dump($_GET);
        //创建表对象
        // var_dump($_POST);
        // exit;
        $user = M('category');
        // var_dump($user);
        // $id = $_POST['id'];
        $state = $_POST['display']=='显示'?0:1;
        $_POST['display'] = $state;
        $user->create();//创建数据
        $res = $user->save();//执行修改
        // // $data['state'] = $state;
        // // $user->create();
        // //执行修改
        // $res = $user->where("id='$id'")->save($data);
        // 
        // $user = M();
        // $sql = " UPDATE hs_goods SET state='$state' WHERE id='$id'";
        // $res = $user->execute($sql);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function ajaxdel(){
        //alert($_GET);
        //创建表对象
        $cate = M('category');
        $id = $_GET['id'];
        //获取id
        // $where['pid']<=0;
        // $pid = I('get.pid');
        //$path=$_GET['path'];
        //$where=id >6;
        //执行删除
        $res = $cate->$where($where)->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
}