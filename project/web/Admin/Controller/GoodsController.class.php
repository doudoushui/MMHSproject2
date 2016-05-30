<?php
 // 设定要用的默认时区。自 PHP 5.1 可用
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
    //date_default_timezone_set('PRC');

	//显示商品列表
    public function index(){
        //创建对象
        $goods = M('goods');

       //获取每页显示的数量
       $num = !empty($_GET['num']) ? $_GET['num'] : 5;

        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "gname like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }
        // 查询满足要求的总记录数
        $count = $goods->where($where)->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;
        //执行查询
        $goodss = $goods->where($where)->order('gtime desc')->limit($limit)->select();
        //分页显示输出
        $pages = $Page->show();
        //处理hobby字段
        // foreach ($goodss as $k => $v) {
        //    $goodss[$k]['hobby'] = str_replace(array('0','1','2'), array('篮球','足球','球球'),$v['hobby']);
        // }
        
        //分配变量
        $this->assign('goodss',$goodss);
        $this->assign('pages',$pages);
    	//解析模板
    	$this->display();
    }

    //显示商品的添加页面
    public function add(){
        
        //创建对象
        $cate = M('category');
        //查询所有分类
         
         //执行查询
        $cates = $cate->order('concat(path,id) asc')->select();
       // var_dump($cates);

        //遍历
        foreach ($cates as $k => $v) {
            //获取要添加|---个数
            $c = count(explode(',',$v['path']))-2;//查看等级
            $cates[$k]['cname'] = str_repeat('|--',$c).$v['cname'];
        // var_dump($v['id']);
    }
        // var_dump($v['id']);
        // die();
        //分配变量
        $this->assign('cates',$cates);
        // $this->assign('v',$v);
       //解析模板
    	$this->display();
    }
    //处理商品的数据添加
    public function insert(){
        //调用函数处理图片上传
        //Uploads('pic');
       //var_dump($_POST);
        $_POST['gtime'] = date('Y/m/d H:i:s');
        $_POST['cid']=$cate_id;
        //创建表对象
        // $goods = M('goods');
        $goods = D('goods');
        //处理图片
        if($_FILES['gpic']['error'] == 0){
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   =     3145728 ;// 设置附件上传大小    
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->rootPath  =       './Public';
            $upload->savePath  =      '/Uploads/'; // 设置附件上传目录   
            // 上传文件     
            $info   =   $upload->upload();    
            if(!$info) {// 上传错误提示错误信息       
                $this->error($upload->getError());    
            }else{// 上传成功        
                // $this->success('上传成功！'); 
                $str =  ltrim($upload->rootPath,'.').$info['gpic']['savepath'].$info['gpic']['savename'];
                $_POST['gpic'] = $str;
            }
        }
        //创建数据
        if(!$goods->create()){
            //获取错误信息
            $info = $goods->getError();
            $this->error($info);
        }
        // var_dump($res);die;
        //执行添加
       if($goods->add()){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('新增成功', U('Admin/goods/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('新增失败');
       }

    }
    //图片的设置
    public function img(){
        //获取商品id
        $id = I('get.id');
        //创建表对象 
       
        $goods = M('goods'); 
        $info = $goods->find($id);
       // var_dump($goods);
        //关联hs_image表
        //$image =M('image');
    // $where = 'goods_id = ".."';
        $where = 'goods_id = '."$id".'';
        $image = $goods->join('left join hs_image on hs_goods.id = hs_image.goods_id')->where($where)->select();
       
        //分配变量
        $this->assign('info',$info);
        $this->assign('image',$image);
        //解析模板
        $this->display();
       
    }
    //处理商品的数据添加
    public function edit_img(){
      //调用函数处理图片上传
        $goods = M('image'); 
         //$gid=I('post.id');
         $goods_id=$_POST['goods_id'];
        //var_dump($_POST);die;
        //处理图片
        if($_FILES['iname']['error'] == 0){
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   =     3145728 ;// 设置附件上传大小    
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->rootPath  =       './Public';
            $upload->savePath  =      '/Uploads/'; // 设置附件上传目录   
            // 上传文件     
            $info   =   $upload->upload();    
            if(!$info) {// 上传错误提示错误信息       
                $this->error($upload->getError());    
            }else{// 上传成功        
                // $this->success('上传成功！'); 
                $str =  ltrim($upload->rootPath,'.').$info['iname']['savepath'].$info['iname']['savename'];
                $_POST['iname'] = $str;
            }
        }
       
        //创建数据
        //$goods->create();
     //添加数据
       //$id = $goods->add();
       
        // //创建数据
        if(!$goods->create()){
            //获取错误信息
            $info = $goods->getError();
            $this->error($info);
        }

        // var_dump($res);die;
        //执行添加
       if($goods->add()){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('新增成功', U('Admin/goods/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('新增失败');
       }
       
    }
    //
    public function img_del(){
        // var_dump($_GET);
        //创建表对象
        $goods = M('image');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $goods->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    //商品的修改
    public function save(){
        // var_dump($_GET);
        $id = I('get.id');
        //创建表对象
        $goods = M('goods');
        //查询当前商品的数据
        $info = $goods->find($id);
        // var_dump($info);die;
        //处理爱好字段
        // $hobby = explode(',',$info['hobby']);

        //分配变量
        $this->assign('info',$info);
       // $this->assign('hobby',$hobby);

        //解析模板
        $this->display();
    }
    //执行修改
    public function update(){
        $_POST['gtime'] = date('Y/m/d H:i:s');
        
        // var_dump($_POST);
         //创建数据表对象
        $goods = M('goods');

        //处理hobby字段
        // if(!empty($_POST['hobby'])){
        //     $_POST['hobby'] = implode(',', $_POST['hobby']);
        // }

        //处理图片
        if($_FILES['gpic']['error'] == 0){
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   =     3145728 ;// 设置附件上传大小    
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->rootPath  =       './Public';
            $upload->savePath  =      '/Uploads/'; // 设置附件上传目录   
            // 上传文件     
            $info   =   $upload->upload();    
            if(!$info) {// 上传错误提示错误信息       
                $this->error($upload->getError());    
            }else{// 上传成功        
                // $this->success('上传成功！'); 
                $str =  ltrim($upload->rootPath,'.').$info['gpic']['savepath'].$info['gpic']['savename'];
                $_POST['gpic'] = $str;
            }

            //获取原来图片的;路径
            $res = $goods->find($_POST['id']);
            $pic = $res['gpic'];
            // var_dump($pic);
            //删除图片
            unlink('.'.$pic);
        }


       
        //创建数据
        $res = $goods->create();
        //执行修改
       $res =  $goods->save();
       // var_dump($res);
        //执行添加
       if($res){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('更新成功', U('Admin/goods/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('更新失败');
       }
    }

public function ajaxedit(){
        // var_dump($_GET);
        $_GET['gtime'] = date('Y/m/d H:i:s');
        
        //创建表对象
        $user = M('goods');
        //执行修改
        $res = $user->save($_GET);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function ajaxedit2(){
        // var_dump($_GET);
        //创建表对象
        // var_dump($_POST);
        // exit;
        $user = M('goods');
        // var_dump($user);
        // $id = $_POST['id'];
        $state = $_POST['state']=='上架'?0:1;
        $_POST['state'] = $state;
        $user->create();
        $res = $user->save();
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
   
    public function ajaxedit_hot(){
        // var_dump($_GET);
        //创建表对象
        // var_dump($_POST);
        // exit;
        $user = M('goods');
        // var_dump($user);
        // $id = $_POST['id'];
        $state = $_POST['is_hot']=='热销'?0:1;
        $_POST['is_hot'] = $state;
        $user->create();
        $res = $user->save();
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

     public function ajaxedit_new(){
        // var_dump($_GET);
        //创建表对象
        // var_dump($_POST);
        // exit;
        $user = M('goods');
        // var_dump($user);
        // $id = $_POST['id'];
        $state = $_POST['is_new']=='新品'?0:1;
        $_POST['is_new'] = $state;
        $user->create();
        $res = $user->save();
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
        // var_dump($_GET);
        //创建表对象
        $goods = M('goods');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $goods->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
}