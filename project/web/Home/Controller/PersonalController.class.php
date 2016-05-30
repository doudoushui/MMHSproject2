<?php

// if (empty($_SESSION['home'])) {
//         redirect('您未登录',URL.'dl.php','5');
//         exit;
//       }
namespace Home\Controller;
use Think\Controller;
class PersonalController extends Controller {
    public function index(){
        if(empty($_SESSION)){
            $this->error('您没登陆',U('Home/Login/index'),'5');
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
    	$this->display();
    }


    public function information(){
        if(empty($_SESSION)){
            $this->error('您没登陆',U('Home/Login/index'),'5');
        }
        // echo '<pre>';
        //     print_r($_SESSION);
        // echo '</pre>';
    	$user = M('user');
        $id=$_SESSION['userid'];
        $xj = $user->find($id);
    	$users = $user->query("SELECT * FROM hs_user WHERE id='$id'");

        //处理hobby字段
        foreach ($users as $k => $v) {
          $users[$k]['hobby'] = str_replace(array('0','1','2'), array('篮球','足球','球球'),$v['hobby']);
        }
        //分配变量
        $this->assign('xj',$xj);
        $this->assign('users',$users);
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

    // public function update(){
    // 	echo '<pre>';
    // 		print_r($_POST);
    // 	echo '</pre>';

    // 	// 解析模板
    // 	$this->display();
    // }

    public function revamp(){
        if(empty($_SESSION)){
            $this->error('您没登陆',U('Home/Login/index'),'5');
        }
        
        //创建表对象
        $user = M('user');
        //查询当前用户的数据
        $id=$_SESSION['userid'];
        $xj = $user->find($id);
        // var_dump($info);die;
        //处理爱好字段
        $hobby = explode(',',$xj['hobby']);

        //分配变量
        $this->assign('xj',$xj);
        $this->assign('hobby',$hobby);

        //解析模板
        $this->display();
    }

    //执行修改
    public function update(){
         //创建数据表对象
        $user = M('user');
        //处理hobby字段
        if(!empty($_POST['hobby'])){
            $_POST['hobby'] = implode(',', $_POST['hobby']);
        }
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
            $res = $user->find($_POST['id']);
            $pic = $res['pic'];

            //删除图片
            unlink('.'.$pic);
        }
       
        // 创建数据
        $res = $user->create();
        //执行修改
       $res =  $user->save();
       // var_dump($res);
        //执行添加
       if($res){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('更新成功', U('Home/Personal/information'),300);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('更新失败',U('Home/Personal/revamp'),300);
       }
    }

     public function head(){
        if(empty($_SESSION)){
            $this->error('您没登陆',U('Home/Login/index'),'5');
        }
        
        //创建表对象
        $user = M('user');
        //查询当前用户的数据
        $userid=$_SESSION['userid'];
        $xj = $user->find($userid);
        // var_dump($info);die;

        //分配变量
        $this->assign('xj',$xj);

        //解析模板
        $this->display();
    }
    
    //执行修改
    public function headnow(){
         //创建数据表对象
        $user = M('user');
        $po=M('portrait');
        echo '<pre>';
            print_r($_SESSION);
            print_r($_POST);
        echo '</pre>';
        $id=$_POST['id'];
        // exit;
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
            $res = $user->find($_POST['id']);
            $pic = $res['pic'];

            //删除图片
            unlink('.'.$pic);
        }
        $res = $user->create();
        //执行修改
       $res =  $user->save();
       // var_dump($res);
        // die;
      echo $sql = "SELECT `pic` FROM hs_user WHERE `id`='$id'";
      $oa = $user->query($sql);
      echo '<pre>';
          print_r($oa);
      echo '</pre>';
      $pic1 = $oa[0]['pic'];
      $user_id = $_SESSION['userid'];
      $udefault = $_POST['udefault'];
     echo $data['pic'] = $pic1;
     echo $data['user_id'] = $user_id;
     echo $data['udefault'] = $udefault;

      $ress = $po->add($data);
      $po->_sql();
      echo '<pre>';
          print_r($ress);
      echo '</pre>';

    echo $sql = "SELECT `udefault` FROM hs_portrait WHERE `id`='$ress'";
      $oaa = $po->query($sql);
      echo '<pre>';
        print_r($oa);
      echo '</pre>';
      $udefault1 = $oa[0]['udefault'];
      
      if($udefault==0){
         $udefault1 = '1';
         $dataa['udefault'] = $udefault1;
         $oaa = $po->where('user_id="'.$user_id.'"')->save($dataa);
         $udefault2 = '0';
         $datas['udefault'] = $udefault2;
         $res1 = $po->where('id="'.$ress.'"')->save($datas);
                echo $po->_sql();
         echo '<pre>';
           print_r($res1);
         echo '</pre>';

          if($res1){
            $this->success('成功',U('Home/Personal/index'),300);
          }else{
            $this->error('失败',U('Home/Personal/head'),300);
          }
      }
    }


     public function change(){
        if(empty($_SESSION)){
            $this->error('您没登陆',U('Home/Login/index'),'5');
        }
        
        //创建表对象
        $user = M('user');
        //查询当前用户的数据
        $id=$_SESSION['userid'];
        $xj = $user->find($id);
        // var_dump($info);die;
        //处理爱好字段

        //分配变量
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

        //解析模板
        $this->display();
    }

    public function uchange(){
    $user = M('user');
    
    // echo '<pre>';
    //     print_r($_SESSION);
    //     print_r($_POST);
    // echo '</pre>';
   $id=$_SESSION['userid'];
  $pwd = md5($_POST['pwd']);
   
   $users = $user->query("SELECT `pwd` FROM hs_user WHERE `id`='$id'");
   // echo '<pre>';
   //     print_r($users);
   // echo '</pre>';
    foreach ($users as $v) {
     $pwd3 = $v['pwd'];
    }



    if($pwd == $pwd3){
        $pwd1 = md5($_POST['pwd1']);
        $data['id'] = $id;
        $data['pwd'] = $pwd1;
       $res =  $user->save($data);
        if ($res) {
            $this->success('修改成功', U('Home/Personal/information'),60);
        }else{
            $this->error('修改失败', U('Home/Personal/change'),60);
        }
    }else{
        $this->error('密码不正确', U('Home/Personal/change'),60);
    }


        // $this->display();
    }
    
}