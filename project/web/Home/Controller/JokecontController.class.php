<?php
namespace Home\Controller;
use Think\Controller;
class JokecontController extends Controller {
    //显示开心一刻列表
    public function index(){
        // echo '后台用户列表';
        //创建对象
        $user = M('joke');
        //var_dump($_GET);die();
        $id=$_GET['id'];
        $where['id']=$id;
        $look_num=$_GET['look_num']+1;
        //创建表对象
        $_GET['look_num']=$look_num;
        //创建数据,保存数据
        $user->create();
        $res = $user->save($_GET);
        //执行查询
        $users = $user->where($where)->select();
        //var_dump($users);die();
        //分配变量
        $this->assign('users',$users);
        //带头像
         $userr = M('user');
         $uid = $_SESSION['userid'];
         $pic = $userr->query("select pic from hs_user where id = $uid");
        //$ress =  $user->_sql();
        // var_dump($res);

         $pic = $pic[0]['pic'];
         // var_dump($pic);
        //分配变量
        $this->assign('pic',$pic);
        $talk = M('joke_talk');
        $whh['joke_id']=$id;
       // var_dump($whh);die;
        $talks=$talk->where($whh)->order('talk_time desc')->limit(6)->select();
        //echo $talk->_sql();die();
        $this->assign('talks',$talks);
        //var_dump($talks);
        //解析模板
        $this->display();
    }
    //处理用户的数据添加
    public function insert(){
       //创建表对象
        $user = M('joke_talk');
        $_POST['talk_time'] = date('Y/m/d H:i:s');
         //创建数据
       $user->create();
       //$user->add($_POST);
      // $res = $user->_sql();
       //echo $res;
       //die();
       //执行添加
       if($user->add()){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
             $this->success('新增成功', U('Home/Joke/index'),3);
            // $this->success('评论成功', $_SERVER['HTTP_REFERER']);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('新增失败');
       }
   }
 public function zanzan(){
       $user = M('joke');
       //var_dump($_GET['zan']);
       //$_GET['gtime'] = date('Y/m/d H:i:s');
       $zan=$_GET['zanzan']+1;
      // var_dump($zan);die();
       //创建表对象
       $_GET['zanzan']=$zan;
         //var_dump($_GET);
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
    
  public function ajaxedit(){
        $_GET['joke_time'] = date('Y/m/d H:i:s');

        // var_dump($_GET);
        //创建表对象
        $user = M('joke');
        //执行修改
        $res = $user->save($_GET);

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
        $user = M('joke');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $user->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
}