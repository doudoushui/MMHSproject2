<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- 新增qq头文件 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- bootstrap所需头文件 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="名门新娘婚纱礼服,婚纱礼服,晚礼服,小礼服,礼服旗袍,韩式婚纱,上海婚纱礼服,深圳婚纱礼服,福州婚纱礼服,杭州婚纱礼服店,厦门婚纱礼服馆" />
<meta name="Description" content="一站式婚纱礼服商城，婚纱礼服，晚礼服，旗袍，小礼服等一站式购物，可线下试穿购买，深圳，杭州，福州，厦门，上海等均有实体店铺！" />
<title>哎哟喂名门商城</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="/Public/Home/Content/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|名门新娘婚纱礼服官方商城 - O2O婚纱领导品牌" href="feed.php" />
<link href="/Public/Home/Content/css.css" rel="stylesheet" type="text/css" />

<!-- music 中link -->
 <link rel="stylesheet" type="text/css" href="/Public/Home/music/Css/tplayer.css" />
<link rel="stylesheet" type="text/css" href="/Public/Home/music/Plugins/FontAwesome4.1/css/font-awesome.min.css" />
<!-- end music link -->

 <link href="/Public/Home/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="/Public/Home/dist/js/jquery-1.11.3.min.js"></script>
<script src="/Public/Home/dist/js/bootstrap.min.js"></script>
<script src="/Public/Home/dist/js/holder.js"></script>
<!--QQJS-->

<link href="/Public/Home/qq/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Home/qq/js/jquery-1.8.3.min.js"></script>

<script type="text/javascript" src="/Public/Home/qq/js/lrtk.js"></script>

<!--MUSICJS-->
<script src="/Public/Home/music/Js/jquery.js"></script>
<script src="/Public/Home/music/Js/jquery-ui.js"></script>
<script src="/Public/Home/music/Js/tPlayer.js"></script>

</head>
<body class="am-with-topbar-fixed-top">

<script type="text/javascript" src="/Public/Home/Scripts/jquery-1.9.1.min.js"></script><script type="text/javascript" src="/Public/Home/Scripts/jquery.json.js"></script><script type="text/javascript" src="/Public/Home/Scripts/transport_jquery.js"></script><script type="text/javascript" src="/Public/Home/Scripts/utils.js"></script> 
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script> 
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#index#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<!-- 音乐播放器 -->

 

     <!-- ===========end   music===================== -->
<!--QQjs start-->
<div class="main-im">
  <div id="open_im" class="open-im">&nbsp;</div>  
  <div class="im_main" id="im_main">
    <div id="close_im" class="close-im"><a href="javascript:void(0);" title="点击关闭">&nbsp;</a></div>
    <a href="http://wpa.qq.com/msgrd?v=3&uin=44671053&site=qq&menu=yes" target="_blank" class="im-qq qq-a" title="在线QQ客服">
      <div class="qq-container"></div>
      <div class="qq-hover-c"><img class="img-qq" src="/Public/Home/qq/images/qq.png"></div>
      <span> QQ在线咨询</span>
    </a>
    <div class="im-tel">
      <div>售前咨询热线</div>
      <div class="tel-num">400-123-45678</div>
      <div>售后咨询热线</div>
      <div class="tel-num">010-12345678</div>
    </div>
    <div class="im-footer" style="position:relative">
      <div class="weixing-container">
        <div class="weixing-show">
          <div class="weixing-txt">微信扫一扫<br>关注哎哟喂名门婚纱商城哦</div>
          <img class="weixing-ma" src="/Public/Home/qq/images/weixing-ma.jpg">
          <div class="weixing-sanjiao"></div>
          <div class="weixing-sanjiao-big"></div>
        </div>
      </div>
      <div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
      <div style="clear:both"></div>
    </div>
  </div>
</div>
<block> 
<div  name = "content" class="container-fluid ">
<!--     <?php  ?> -->
    <ul class="nav nav-tabs importent">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo U('Home/Index/index');?>" style="font-size:22px;margin-top:8px;"><span class=" glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;首页</a>&nbsp;&nbsp;
           <a class="navbar-brand" href="<?php echo U('Home/Goods/index');?>" style="font-size:18px;margin-left:10px;margin-top:8px;"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span>&nbsp;&nbsp;商品页</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
           <?php  if(!empty($_SESSION['username'])){ ?>
            <li style="margin-top:8px;"><a href="<?php echo U('Home/Cart/index');?>" style="font-size:18px;"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;&nbsp;购物车</a></li>
            <?php  }else{ ?>
              <li style="margin-top:8px;"><a href="<?php echo U('Home/Joke/index');?>" style="font-size:18px;"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>&nbsp;&nbsp;开心一刻</a></li>
            <?php  } ?>

            <li><a href="#"></a></li>
            <li style="margin-top:8px;"><a href="#" style="font-size:18px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="font-size:18px;"></span>&nbsp;&nbsp;客户评论</a></li>
            <li><a href="#"></a></li>
            <li class="dropdown" style="margin-top:8px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:18px;"><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>&nbsp;&nbsp;社区 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"></a></li>
                <li><a href="<?php echo U('Home/Music/index');?>" style="font-size:18px;">音乐吧</a></li>
                <li role="separator" class="divider"></li>

                <li><a href="<?php echo U('Home/Fashion/index');?>" style="font-size:18px;">潮流动态</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Joke/index');?>" style="font-size:18px;">开心一刻</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Feedback/index');?>" style="font-size:18px;">反馈信息</a></li>
              </ul>
            </li>
          </ul>
          <?php  if(empty($_SESSION['username'])){ ?>
          <ul class="nav navbar-nav navbar-right">
            <li style="margin-right:10px;margin-top:8px;"><a href="<?php echo U('Home/Login/index');?>" style="font-size:18px;">登录</a></li>
            <li style="margin-right:10px;margin-top:8px;"><a href="<?php echo U('Home/Register/index');?>" style="font-size:18px;">注册</a></li>
            <li class="dropdown" style="margin-top:8px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:18px;"><span class="glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;关于我们 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo U('Home/Job/index');?>" style="font-size:18px;">招聘管理</a></li>
                <!-- <li><a href="#">婚庆推荐</a></li> -->
               
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Recommend/index');?>" style="font-size:18px;">优秀婚庆推荐</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Teamintro/index');?>" style="font-size:18px;">团队介绍</a></li>
              </ul>
            </li>

            <li class="dropdown" style="margin-top:8px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:18px;"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;用户 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo U('Home/Login/index');?>" style="font-size:18px;">登录</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Register/index');?>" style="font-size:18px;">注册</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Personal/index');?>" style="font-size:18px;">个人中心</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Admin/Index/index');?>" style="font-size:18px;">后台入口</a></li>
              </ul>
            </li>
            <?php  }else{ ?> 
          <ul class="nav navbar-nav navbar-right">

            <li style="margin-right:10px;margin-top:8px;"><a href="<?php echo U('Home/Order/index');?>" style="font-size:18px;"><span class="glyphicon glyphicon-list-alt" aria-hidden="true" ></span>&nbsp;&nbsp;我的订单</a></li>

            <li class="dropdown" style="margin-top:8px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:18px;"><span class="glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;关于我们 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo U('Home/Job/index');?>" style="font-size:18px;">招聘管理</a></li>
                <!-- <li><a href="#">婚庆推荐</a></li> -->
               
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Recommend/index');?>" style="font-size:18px;">优秀婚庆推荐</a></li>

                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Teamintro/index');?>" style="font-size:18px;">团队介绍</a></li>
              </ul>
            </li>
 
           <?php  if(empty($pic)){ ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="/Public/Home/Images/touxiang.jpg" style="border-radius:100px;">&nbsp;&nbsp;<?php  echo $_SESSION['username']; ?><span class="caret"></span></a>
              <?php  }else{ ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:18px;"><img src="<?php echo $pic;?>" style="border-radius:100px;width:35px;height:35px;">&nbsp;&nbsp;<?php  echo $_SESSION['username']; ?><span class="caret"></span></a>
                <?php  } ?>

              <ul class="dropdown-menu">
                <li><a href="<?php echo U('Home/Personal/index');?>" style="font-size:18px;">个人中心</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Admin/Index/index');?>" style="font-size:18px;">后台入口</a></li>
                <li role="separator" class="divider"></li> 
                <li><a href="<?php echo U('Home/Loginout/index');?>" style="font-size:18px;">退出</a></li>
              </ul>
            </li>
            <?php } ?>
         </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
   <!-- </ul> -->

<style>
.txtTip,.yyTit{width:848px; height:340px; letter-spacing:2px; text-align:center; background:url(/Public/Home/Images/yytip.jpg) no-repeat center 0; margin:0 auto; font: normal 32px/48px "微软雅黑"}
.yyTit{height:175px; font-weight:bold; background:url(/Public/Home/Images/yytit.jpg) no-repeat center 0; margin-top:20px;}
.txtTip span,.yyTit span{color:#520100; padding-top:222px; display:block}
.yyTit span{padding-top:132px;}
.txtTip em{color:#888; font-style:normal; display:none; padding-top:222px; color:#520100;}
.infoForm{width:1200px;  background:#f2f2f2 url(/Public/Home/Images/yylp.jpg) left bottom no-repeat; height:133px;}
.infoForm ul{clear:both; overflow:hidden; padding-top:25px; padding-left:145px;}
.infoForm ul li{float:left; width:132px; margin:0 14px;}
.infoForm ul li span{display:block; font-size:14px; height:24px; line-height:24px;}
.infoForm ul li input,.infoForm ul li select{width:100%; text-indent:6px; height:36px; line-height:36px; border:1px solid #a9a9a9}
.infoForm ul li .grayBtn{width:148px; height:36px; color:#fff; background:#999999; border:0 none; font-size:16px;}
.yyLine{width:100%; height:6px; background:#ff9393; margin:10px 0;}
.addressList li{background:#f2f2f2; padding:20px 20px 15px; margin-bottom:34px;}
.addressList table tr td{vertical-align:top; padding:0 16px;}
.addressList .addTxt{font-size:25px; color:#3b0908; width:254px;}
.addressList li p{line-height:40px;}
.mapbg{width:646px; height:378px; background:url(/Public/Home/Images/mapbg.jpg) no-repeat center 0;}
.mt15{margin-top:15px;}
.mt40{margin-top:30px;}
</style>

  <div id="page-wrapper">
    <div class="row"style="background:pink;">
      <div class="col-lg-12">

        <center><h2 class="page-header" style="center"><img src="/Public/Home/Images/kxyk.jpg" style="margin-left:30px;width:80px;height:80px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;开心一刻社区&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<c id="dtime" style="height:10px;">Welcome To Joke Party </c>
        </h2></center>
        
        <img src="/Public/Home/Images/xhz.png" style="width:1230px;height:300px;">
      </div><!-- /.col-lg-12 -->
    </div><!-- /.col-lg-12 -->
    <div class="row">
      <div class="col-lg-12"style="background:pink;height:300px;">
        <h4 class="col-lg-1"style="margin-left:2px;background:#e1e1e1;margin-top:30px;line-height:35px;" >活动区</h4>
       <div style="width:1000px;height:60px;margin-top:30px;">
          <center>
          <a id="btn" class="btn btn-primary btn-info" type="button"><i class="fa fa-wrench"></i> 猜谜游戏</a>
          <button type="button"class="btn btn-warning btn-info">答案</button>
          <!-- <pre style="width:210px;display:none;">
           1 .动物园园长
           2 .电影中的人
           3 .螺帽
           4 .遗书
           5 .右耳朵
           6 .泪水
           7 .手，脚
           8 .三长两短
           9 .鹅是企鹅
           10.CD
          </pre> -->
          <a id="chou" class="btn btn-danger btn-info" type="button"><i class="fa fa-wrench"></i> 幸运抽奖</a>&nbsp;&nbsp;&nbsp;&nbsp;</center>
          <center style="font-size:30px;margin-top:20px;"><span id="uname" style="font-size:14px;">&nbsp;&nbsp;&nbsp;</span></center>
<pre style="width:180px;display:none;margin-left:640px;">
 1 .动物园园长
 2 .电影中的人
 3 .螺帽
 4 .遗书
 5 .右耳朵
 6 .泪水
 7 .手，脚
 8 .三长两短
 9 .鹅是企鹅
 10.CD
</pre>
     </div>
    </div><!-- col-lg-12 -->
   </div><!-- /row -->
    <div class="row"style="background:pink;">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <!-- DataTables Advanced Tables -->
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="dataTable_wrapper"style="background:pink;">
              <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                  
                  <form action="<?php echo U('Home/Joke/index');?>" method="get">
                    
                  <div class="col-sm-4" style="margin-top:15px;margin-left:60px;float:left;">
                    <div class="dataTables_length" id="dataTables-example_length">
                      <label>显示 
                        <select name="num" aria-controls="dataTables-example" class="form-control input-sm">
                          <option <?php echo $_GET['num'] == 2 ? 'selected' : '' ?> value="2">2</option>
                          <option <?php echo $_GET['num'] == 5 ? 'selected' : '' ?> value="5">5</option>
                          <option <?php echo $_GET['num'] == 10 ? 'selected' : '' ?> value="10">10</option>
                          <option <?php echo $_GET['num'] == 20 ? 'selected' : '' ?> value="20">20</option>
                        </select>
                        条
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-4" style="margin-top:15px;margin-right:140px;float:right;">
                    <div id="dataTables-example_filter" class="dataTables_filter">
                      <label>乐闻标题:<input value="<?php echo ($_GET['keyword']); ?>" name="keyword" type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example">&nbsp;&nbsp;
                      <button type="submit" style="width:80px;height:30px;margin-bottom:10px;"class="btn btn-info">查询</button></label>
                    </div>
                  </div>

                  </form>

                </div>
                <div class="row"style="margin-left:40px;">
                  <div class="col-sm-11">
                  <!-- 开心一刻列表遍历 -->
                    <table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dataTables-example_info">
                      <thead>
                        <tr role="row"style="margin-left:20px;">
                          <!-- <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 124px;" aria-label="Platform(s): activate to sort column ascending">&nbsp;</th> -->
                          <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 129px;" aria-label="Browser: activate to sort column ascending">乐闻图片</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 129px;" aria-label="Browser: activate to sort column ascending">乐闻标题</th>
                          <!-- <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 124px;" aria-label="Platform(s): activate to sort column ascending">乐闻内容</th> -->
                          <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 98px;" aria-label="Engine version: activate to sort column ascending">发布时间</th>
                          <!-- <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 30px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">作者</th> -->
                          <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 30px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">点赞量</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 30px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">浏览量</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 40px;margin-right:5px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(is_array($users)): foreach($users as $k=>$vo): ?><tr class="gradeA odd" role="row">
                            <!-- <td class="edit">
                              <img src="/Public/Home/Images/jt.png" width="20px">
                            </td> -->
                            <td class="sorting_1">
                              <img src="<?php echo ($vo["joke_pic"]); ?>" width="60px"height="60px">
                            </td>
                            <td class="edit">[ <?php echo ($vo["title"]); ?> ]</td>
                            <!-- <td class="edit_msg"><?php echo ($vo["joke_msg"]); ?></td> -->
                            <!-- <td class="edit_msg"><?php echo htmlspecialchars_decode($vo['joke_msg']);?></td> -->
                            <td class="t"><?php echo ($vo["joke_time"]); ?></td>
                            <!-- <td class="sorting_1 sid"><?php echo ($vo["author"]); ?></td> -->
                            <td class="sorting_1 sid"><?php echo ($vo["zanzan"]); ?></td>
                            <td class="sorting_1 sid"><?php echo ($vo["look_num"]); ?>次</td>
                            <td class="center">
                              <!-- <a href="<?php echo U('Home/Joke/zanzan',array('id'=>$vo['id']));?>?zanzan=<?php echo ($vo["zanzan"]); ?>" class="btn btn-danger btn-info" type="button"><i class="fa fa-wrench"></i> 我要点赞</a> -->
                              <a href="<?php echo U('Home/Jokecont/index',array('id'=>$vo['id']));?>?look_num=<?php echo ($vo["look_num"]); ?>" class="btn btn-info btn-info" type="button" style="width:80px;height:30px;"><i class="fa fa-wrench"></i> 查看</a>
                      
                            </td>
                          </tr><?php endforeach; endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">

                  <div class="col-sm-6">
                    <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite"><img src="/Public/Home/Images/girl3.gif" style="width:1230px;height:300px;"></div>
                  </div>
                  <style type="text/css">
                      #pages a,#pages span{ background-color: #fff;
                              border: 1px solid #ddd;
                              color: #337ab7;
                              float: left;
                              line-height: 1.42857;
                              margin-left: -1px;
                              padding: 6px 12px;
                              position: relative;
                              text-decoration: none;}
                      #pages span {
                            background-color: #337ab7;
                            border-color: #337ab7;
                            color: #fff;
                            cursor: default;
                            z-index: 2;
                            }
                  </style>
                 
                  <div class="col-sm-6">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                       <div id="pages">
                          <?php echo ($pages); ?>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.table-responsive -->

          </div>
          <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
    </div>
  </div>
  <script type="text/javascript">
  var dtime = document.getElementById('dtime');
  // /修改样式
  dtime.style.width = '250px';
  dtime.style.height = '40px';
  dtime.style.background = 'pink';
  //text-align 如果遇到双拼词,把杠去掉,后面的首字母大写
  dtime.style.textAlign = "center";
  dtime.style.lineHeight = '40px';
  //启动定时器
  setInterval(function(){
    // 创建时间对象 当前本机时间
    var d = new Date();
    //创建指定时间
    // var d = new Date(2011,10,11,11,11,11);
    //获取四位数的年 getFullYear()
    var year = d.getFullYear();
    //获取月份 getMonth
    var month = d.getMonth()+1;//索引从0开始
    if(month <=9){
      month = "0"+month;
    }
    //获取天数 getDate
    var date = d.getDate();
    //获取小时 getHours()
    var hours = d.getHours();
    if(hours <= 9){
      hours = "0"+hours;
    }
    //获取分钟 getMinutes()
    var minutes = d.getMinutes();
    if(minutes <= 9){
      minutes = "0"+minutes;
    }
    //获取秒 getSeconds
    var seconds = d.getSeconds();
    if(seconds <= 9){
      seconds = "0"+seconds;
    }
    //获取星期 getDay
    var day = d.getDay();
    //拼接字符串
    var str = year+"-"+month+"-"+date+" "+hours+":"+minutes+":"+seconds;
    // 设置文本
    dtime.innerHTML = str;
    // console.log(day);
  },1000);
    $(document).ready(function(){
  $("button:eq(1)").click(function(){
  $("pre").toggle();
  });
});
    $(function () {
  $('[data-toggle="popover"]').popover()
})
    var  chou = document.getElementById('chou');
    //
    chou.onclick = function(){
      var num = rand(1,100);
      //判断
      if(num >= 90 && num <= 100){
        alert('您今天的幸运色是:红色,红色是热烈、冲动、强有力的色彩');
      }else if(num >= 80 && num <= 89){
        alert('您今天的幸运色是:橙色,橙色是欢快活泼的光辉色彩，是暖色系中最温暖的色,橙色象征着温暖与活力');
      }else if(num >= 70 && num <= 79){
        alert('您今天的幸运色是:黄色,黄色的灿烂、辉煌，有着太阳般的光辉，象征着照亮黑暗的智慧之光,黄色象征着华丽、高贵与温馨');
      }else if(num >= 50 && num <= 69){
        alert('您今天的幸运色是:绿色,鲜艳的绿色是一种非常美丽、优雅的颜色，它生机勃勃，象征着生命,绿色象征着青春与大自然');
      }else if(num >= 40 && num <= 49){
        alert('您今天的幸运色是:蓝色,蓝： 沉静、幽远，欧洲为对国家之忠诚象征,蓝色象征着纯洁、梦想');
      }else if(num >= 20 && num <= 39){
        alert('您今天的幸运色是:靛色,靛色:代表祥和、清凉、深远、舒畅,靛色象征着清新和舒畅');
      }else {
        alert('您今天的幸运色是:紫色,它美丽而又神秘，给人深刻的印象，它既富有威胁性,又富有鼓舞性,紫色象征着优雅、高贵、魅力和神秘');
      }
    }
    function rand(m,n){
      return (Math.ceil(Math.random()*100000)%(n-m+1))+m;
    }
  //定义数组
  var arr = new Array('1.谁是万兽之王?','2.什么样的人死后还会出现?','3.什么帽不能戴?','4.书店里买不到什么书?','5.大象的左耳朵像什么？','6.什么水永远用不完?','7.什么东西有五个头，但人不觉得它怪呢?','8.家人问医生病人的情况,医生只举起5个手指, 家人就哭了,是什么原因呢?','9.把一只鸡和一只鹅同时放在冰山上，为什么鸡死了鹅没死？','10.什么英文字母让人们喜欢听而且听的人最多?');
  // 获取元素对象
  var btn = document.getElementById('btn');
  var uname = document.getElementById('uname');
  //获取数组长度
  var len = arr.length;
  var itime = null;//定时器全局变量
  var m = 0;
  // 绑定事件
  btn.onclick = function(){
    func();
  }
  //封装随机猜谜方法
  function func(){
    //检测数组长度
    if(len < 1){uname.innerHTML = '全部结束';return;}
    //检测定时器是否开启
    if(itime == null){
      //开始随机
      itime = setInterval(function(){
        //随机数组的下标
        m = Math.ceil(Math.random()*10000)%len;
        //不停的修改文本
        uname.innerHTML = arr[m];
      },120)

      //按钮文本
      btn.innerHTML = '停止';
    }else{
      //已经开始了就要停止
      //清除定时器
      clearInterval(itime);
      //修改定时器全局变量
      itime = null;
      //按钮文本
      btn.innerHTML = '开始';
      //splice 删除
      arr.splice(m,1);
      //修改数组的长度
      len = arr.length;
      console.log(arr);
    }
    
   }
  // $('button:eq(0)').click(function(){
  //   alert('111111');
  //   $('#move').slideToggle(1000);
  // }) 

  </script>




<style>
	.page_list .am-padding-sm{text-align:center;}
	.page_list h4{font-size:15px; color:#222; line-height:28px; margin-bottom:18px;}
	.page_list a:hover h4 {color:#f72e26;}
	.page_list p{color:#666}
</style>
<div class="am-g am-cf am-margin-top-sm  bg_d4d2d3">
  <div class="am-container am-padding am-text-left bg_d4d2d3 page_list">
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=6">
            <h4>厦门实体店</h4>
            <p style="margin-bottom:12px;">地址：厦门市思明区厦禾路820号帝豪大厦2901室</p>
            <p>电话：0592-3300517</p>
            <p>QQ群：325104579</p>
        </a>
    </div>
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=4">
        <h4>杭州实体店</h4>
        <p style="margin-bottom:12px;">地址：杭州市下城区文晖路42号现代置业大厦西楼10楼1003室</p>
        <p>电话：0571-87173525</p>
        <p>QQ群：85497724</p>
        </a>
    </div>
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=3">
        <h4>上海实体店</h4>
        <p style="margin-bottom:12px;">地址：徐汇区石龙路569号1号楼304室</p>
        <p>电话：021-51506021</p>
        <p>QQ群：368612346</p>
        </a>
    </div>
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=2">
        <h4>深圳实体店</h4>
        <p style="margin-bottom:12px;">地址：福田区车公庙深南大道6025号英龙大厦11楼11-12室</p>
        <p>电话：0755-33983228</p>
        <p>QQ群：162289364</p>
        </a>
    </div>
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=5">
        <h4>福州实体店</h4>
        <p style="margin-bottom:12px;">地址：东二环泰禾广场7号楼1520-1523（靠近二化）</p>
        <p>电话：0591-87581700</p>
        <p>QQ群：338577915</p>
        </a>
    </div>
    
 
    
    <div class="am-u-sm-6 am-u-md-2   am-padding-sm  am-text-center">
      <p class="text-center"><img src="/Public/Home/Picture/code.jpg"></p>
      <p class="text-center">扫一扫</p>
      <p class="text-center">更多精彩活动</p>
    </div>
    <div class="am-cf am-margin-bottom am-show-sm-only bg_fff"></div>
  </div>
</div>
<div class="am-g am-cf am-margin-0  foot_bg">
  <div class="page_foot  am-text-center ">
          <ul>
          
            <li><a href="category.php?id=690"  target="_blank" >精品婚纱</a></li>
          <li>|</li>
            <li><a href="article.php?id=2"  target="_blank" >隐私保护</a></li>
          <li>|</li>
            <li><a href="article.php?id=3"  target="_blank" >咨询热点</a></li>
          <li>|</li>
            <li><a href="article_cat.php?id=3"  target="_blank" >实体店预约</a></li>
          <li>|</li>
            <li><a href="wholesale.php" >批发方案</a></li>
          <li>|</li>
            <li><a href="myship.php" >配送方式</a></li>
          <li>|</li>
            <li><a href="article_cat.php?id=5"  target="_blank" >新手上路 </a></li>
                  
          </ul>
  </div>
</div>
<div class="am-g am-cf am-margin-0">
  <div class="am-container am-padding-sm ">
    <div class="am-u-sm-12 am-u-md-2 am-text-center"><p style="line-height:40px; font-size:20px; font-weight:700; color:#B9B9B9; "><img src="/Public/Home/Picture/400.png" style="vertical-align:middle; margin-top:-6px; ">4008297758</p></div>
    <div class="am-u-sm-12 am-u-md-7 am-text-center"><p class="am-text-sm"> 版权所有 2010-2014 名门新娘 名门新娘官方旗舰店<br> 并保留所有权利 ICP备案证书号：浙ICP备12016981号 </p></div>
    <div class="am-u-sm-12 am-u-md-3 am-text-center"><p> <span style="display:inline-block; vertical-align:bottom;"><wb:follow-button height="24" width="67" type="red_1" uid="2991975565"></wb:follow-button></span><img style="margin-left:20px;" src="/Public/Home/Picture/sm_83x30.png"> </p></div>
</div>
</div>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?055c4ad45be338b80ddab1d09a7194d6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script src="/Public/Home/Scripts/amazeui.min.js"></script>
<script src="/Public/Home/Scripts/layer.js"></script> 
<script type="text/javascript">
$(document).ready(function(e) {
	$('.pic_modal').on('click',function(){
		var id = $(this).data('target');
		var url = 'quick_view.php?id='+id+'&_'+ Math.random();
		var s_height,if_height, s_width ,if_width;
		if_height = s_height = (document.documentElement.clientHeight-30)/18*17 ;
		s_width = document.documentElement.clientWidth ;
		if_width = s_height;
		if(s_width < if_width){
			if_width = s_width
			if_height = s_width;
		}
		if(if_width > 630){
			if_height = if_height - 120;
		}else if(if_width > 550){
			if_height = if_height - 20;
		}else if(if_width > 300){
			if_height = if_height + 130;
		}else{
			if_height = if_height + 180;
		}
		if_width = 960;
		if_height = 720;
		
		layer.open({
			title :'产品预览',
			type: 2,
			shade: [0.5, '#339999'],
			shadeClose :false,
			move: false,
			area: [if_width +'px', if_height+'px'],
			fix: true, //不固定
			maxmin: false,
			content: [url, 'no'],
			
		});
	});
	
	$('.dropdown-toggle').on('click',function(){
		$(this).siblings('.dropdown-menu').toggle('fast');
	});
	
});
</script>
<script language="javascript">
<!--
function validate(type)
{
	var frm  = document.forms['theForm'];
	var contactor = frm.elements['contactor'] ? Utils.trim(frm.elements['contactor'].value) : '';
	var mobile = frm.elements['mobile'] ? Utils.trim(frm.elements['mobile'].value) : '';
	
	var msg = "";	
	
	if (mobile.length==0)
	{
		msg += "- 手机号不能为空" + '\n';
	}
	else if (mobile.length>0)
	{
	  if (!Utils.isMobile(mobile))
	  {
		msg += "- 您输入的手机号格式不正确" + '\n';
	  }
	}
	if (contactor.length==0)
	{
		msg += "- 联系人不能为空" + '\n';
	}
	
  
	if (msg.length > 0)
	{
	  alert(msg);
	  return;
	}
	else
	{
	         
			var send_sms_btn =  'send_sms_btn';
			var tips_msg = '公司核名';
            var data = $('#theForm').serialize()
			$.ajax({
				url:"booking.php?act=save",
				dataType:'json',
				type:"POST",
				data:data+'&type='+type,
				beforeSend:function() {  
			       $("#"+send_sms_btn).html("正在提交...").attr('disabled',true);
				},  
				complete:function(result) {  
				$("#"+send_sms_btn).html(tips_msg).attr('disabled',false);
				},  
				success:function(result){
					
					if(result.err_no==0)
					{
					   alert(result.err_msg);	
				 	   $("#"+send_sms_btn).html(tips_msg).attr('disabled',false);
					   document.theForm.reset();
					   $('.close').trigger('click')
					   return;
					}
					else
					{
					   alert(result.err_msg);	
					   $("#"+send_sms_btn).html(tips_msg).attr('disabled',false);
					   return;
					}
				},
				error:function(){
					$("#"+send_sms_btn).html(tips_msg).attr('disabled',false);
					alert("出错了,请刷新页面重试:(");
				}
			});
	  
	}
}
-->
</script> 
</body>
</html>