<?php
namespace Admin\Controller;
use Think\Controller;
class AdminuserController extends CommonController {
	//显示管理员列表
    public function index(){
        // echo '后台管理员列表';
        //创建对象
        $admin = M('admin_user');
        // $access = M('think_auth_group_access');
   
        // var_dump($_SESSION);
       //获取每页显示的数量
       $num = !empty($_GET['num']) ? $_GET['num'] : 5;

        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "Adminname like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }


        // 查询满足要求的总记录数
        $count = $admin->where($where)->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;

         //执行查询
        // $admins = $admin->where($where)->limit($limit)->select();
       

       $double = $admin->join('RIGHT JOIN hs_think_auth_group_access ON hs_admin_user.id = hs_think_auth_group_access.uid')->where($where)->limit($limit)->select();
       // echo $admin->_sql();

       // var_dump($double);
       // die();


        // 分页显示输出
        $pages = $Page->show();

        //处理groupid字段
        foreach ($double as $k => $v) {
           $double[$k]['group_id'] = str_replace(array('1','2','3'), array('用户增删改查组','管理员查看组','big boss'),$v['group_id']);

        }
        
     //分配变量
        // $this->assign('admin',$admin);
        $this->assign('double',$double);
        $this->assign('pages',$pages);
    	//解析模板
    	$this->display();
    }

    //显示管理员的添加页面
    public function add(){
    	// echo '管理员添加';
    	//解析模板
    	$this->display();
    }

    //处理管理员的数据添加
    public function insert(){
        // var_dump($_POST);
        // die();
        // var_dump($_FILES);
        // die();

        //创建表对象
        $admin = M('admin_user');
        // $access = M('think_auth_group_access');

        if(!empty($_POST['groupid'])){
            $_POST['groupid'] = implode(',', $_POST['groupid']);
        }
   
        // 处理图片
        if($_FILES['pic']['error'] == 0){
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   =     3145728 ;// 设置附件上传大小    
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->rootPath  =       './Public';
            $upload->savePath  =      '/Uploads/'; // 设置附件上传目录   
            // 上传文件     
         $info   =   $upload->upload();    
         // var_dump($info);
            if(!$info) {// 上传错误提示错误信息       
                $this->error($upload->getError());    
            }else{// 上传成功        
                // $this->success('上传成功！'); 
                $str =  ltrim($upload->rootPath,'.').$info['pic']['savepath'].$info['pic']['savename'];
                $_POST['pic'] = $str;
            }
        }

        //创建数据
        
            $admin->create();
            $res = $admin->add(); //$res => 新增id

            //创建表对象
           $access = M('think_auth_group_access');

           //创建数据
          $_POST['uid']=$res;
          // var_dump($_POST['groupid']);
          $_POST['group_id'] = $_POST['groupid'];
       
           $access->create();
           $ress = $access->add();  //新增id
          // var_dump($ress);
          //      die();

        //执行添加
       // if($admin->add()){
       if($res){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('新增成功', U('Admin/Adminuser/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('新增失败');
       }

    }

    //管理员的修改
    public function save(){
        // var_dump($_GET);
        $id = I('get.id');
        //创建表对象
        $admin = M('admin_user');
        $access = M('think_auth_group_access');

       $ress = $access->query("select group_id from hs_think_auth_group_access where uid = $id");
        // $ress =  $access->_sql();
      $group_id = $ress[0];
       // var_dump($ress);

        //查询当前管理员的数据
        $info = $admin->find($id);
        // var_dump($info);die;
   

        //分配变量
        $this->assign('info',$info);
        $this->assign('group_id',$group_id);

        //解析模板
        $this->display();
    }

    //执行修改
    public function update(){
        // var_dump($_POST);
         //创建数据表对象
        $admin = M('admin_user');
        // if (!$admin->create()){     // 如果创建失败 表示验证没有通过 输出错误提示信息     
        //     $info = $admin->getError();
        //    $this->error($info);
        // }
        
        //处理hobby字段
        if(!empty($_POST['groupid'])){
            $_POST['groupid'] = implode(',', $_POST['groupid']);
        } 
        $access = M('think_auth_group_access');
        $_POST['group_id'] = $_POST['groupid'];
        $access -> create($_POST);
       $ress = $access -> add();
       // var_dump($ress);
       // die();



        //处理图片
        if($_FILES['pic']['error'] == 0){
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
                $str =  ltrim($upload->rootPath,'.').$info['pic']['savepath'].$info['pic']['savename'];
                $_POST['pic'] = $str;
            }

            //获取原来图片的;路径
            $res = $admin->find($_POST['id']);
            $pic = $res['pic'];
            // var_dump($pic);
            //删除图片
            unlink('.'.$pic);
        }
      
        //创建数据
        $res = $admin->create();
        //执行修改
       $res =  $admin->save();
       // var_dump($res);
        //执行添加
       if($res){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('更新成功', U('Admin/Adminuser/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('更新失败');
       }
    }


    public function ajaxdel(){
        // var_dump($_GET);
        //创建表对象
        $admin = M('admin_user');
        // $access = M('think_auth_group_access');

        $id = $_GET['id'];

       // $ress = $access->execute("delete * from hs_think_auth_group_access where uid = $id");

        //获取id
        //执行删除
        $res = $admin->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }


}