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

 
     <div style="margin-top:10px;">

       <!-- Nav tabs -->
       <ul class="nav nav-tabs" role="tablist" style="color:#F39A32">
         <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" style="font-size:20px;">品牌故事</a></li>
         <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" style="font-size:20px;">品牌优势</a></li>
         <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" style="font-size:20px;">发展历程</a></li>
         <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab" style="font-size:20px;">实体店地址</a></li>
       </ul>

       <!-- Tab panes -->
       <div class="tab-content">
         <div role="tabpanel" class="tab-pane active" id="home" style="background:#A0EAF0"><br><p style="color:#000;font-size:16px;">&nbsp;&nbsp;名门婚纱是中国婚纱摄影知名品牌。名门婚纱摄影旗舰店于2009年8月29号正式在城固西环一路隆重开幕，城固名门婚纱摄影旗舰店一至五层总面积1500多平、VIP专属贵宾舱给您足够的空间展示您的完美，豪华•温馨•精致的室内装潢，全方位的豪华3D实景阳光影棚拍摄设施设备。</p><br>
　　     <p style="color:#000;font-size:16px;">&nbsp;&nbsp;名门婚纱凝聚了中国文化的精髓与西方文化的渊源，聚集了摄影化妆精英，引进最新的婚纱摄影技术，配合欧美最流行的格调，为新人提供最完美，最上乘的艺术佳品。</p>
         <br>

　　      <p style="color:#000;font-size:16px;">&nbsp;&nbsp;名门婚纱以过硬的服务品质、专业的技术水平、良好的信誉，以追求完美至上的雄心，心存高远的志向、脚踏实地的作风、稳扎稳打的性格，开创着自己的事业，立志打造中国摄影百年品牌。</p><br>
      <p style="color:#5A0081;font-size:16px;">&nbsp;&nbsp;全力打造“星”级化拍摄环境，研发差异化特色产品，奉献专业化超值服务。</p>
　　<br>

　　<p style="color:#000;font-size:16px;">&nbsp;&nbsp;精致来自对品质的要求，品质源由于专业的素养。我们的骄傲，更是您珍藏完美、见证爱情的唯一首选。我们要让每一位来名门拍照的新娘，都成为世上最幸福美丽的女人！</p><br>
</div>
         <div role="tabpanel" class="tab-pane" id="profile" style="background:#A0EAF0"><br>
          <p style="margin-left:30px;">
            <b style="color:#000;font-size:18px;">完美品质:</b><span style="color:#C6174D;font-size:16px;">&nbsp;&nbsp;&nbsp;优质的产品、完善的服务、健全的体制、最新的理念服务</span>
          </p><br>
           <p style="margin-left:30px;">
            <b style="color:#000;font-size:18px;">品牌优势:</b><span style="color:#D66424;font-size:16px;">&nbsp;&nbsp;&nbsp;一个悠久、享誉全球的品牌，国际知名品牌。</span>
          </p><br>
          <p style="margin-left:30px;">
            <b style="color:#000;font-size:18px;">顶级设备:</b><span style="color:#9D24D6;font-size:16px;">&nbsp;&nbsp;&nbsp;国际进口摄影器材，数百旅游实景影棚，数千套服装造型</span>
          </p><br>
           <p style="margin-left:30px;">
            <b style="color:#000;font-size:18px;">技术团队:</b><span style="color:#D624C1;font-size:16px;">&nbsp;&nbsp;&nbsp;荣获多项国际大奖的摄影师，化妆师全程一对一服务，根据不同的人和场景为客户设计最适合的造型、风格。</span>
          </p><br>
           <p style="margin-left:30px;">
            <b style="color:#000;font-size:18px;">发展空间:</b><span style="color:#BCD624;font-size:16px;">&nbsp;&nbsp;&nbsp;合作共赢的战略性上市增值</span>
          </p><br>

         </div>
         <div role="tabpanel" class="tab-pane" id="messages" ><br>
           <p style="color:#000;font-size:18px;">服装鞋帽在淘宝中一直处于<span style="color:#f00">主流</span>地位</p><br>
            <center><a href="http://map.baidu.com/?newmap=1"><img src="/Public/Home/Images/history.jpg" alt=""></a></center><br>
         </div>
         <div role="tabpanel" class="tab-pane" id="settings">
           <div class="row" style="background-image:url('/Public/Home/Images/xdl.jpg')">
             <div class="col-sm-6 col-md-6" >
               <div class="thumbnail">
                 <img src="/Public/Home/Images/address1.png" alt="..." style="height:300px;">
                 <div class="caption">
                   <h3><center>公司名称: 上海易第优有限公司</center></h3>
                 <center>
                   <p><a href="http://map.baidu.com/?newmap=1" style="background:#296395;color:#fff"class="btn" role="button">搜索地图</a></p><br>
                  </center>
                 </div>
               </div>
             </div>
             <div class="col-sm-6 col-md-6" style="background-image:url('/Public/Home/Images/address2.jpg')">
<!-- ===================kaishi=========== -->
             <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="width:600px;">
           <span class="glyphicon glyphicon-hand-right" aria-hidden="true" style="margin-right:80px;color:#f00">&nbsp;&nbsp;点我展开</span>实体店相关信息概述(免费打广告)
             </button>
             <div class="collapse" id="collapseExample">
               <div class="well">
                <p style="color:#528"><b style="color:#000">详细地址: </b><span>上海市闸北区万荣路1188号 F栋三层 兄弟连上海（华东）校区</span></p>
                <p>上海易第优软件科技有限公司（兄弟连）专注于软件科技、网络科技，是国内领先的PHP/LAMP技术专业培训公司，一直秉承“让学习成为一种习惯”的严管理念认认真真做教育。隶属于北京易第优教育咨询有限公司（兄弟连），总部位于北京回龙观，公司成立于2007年</p>
                <p>最权威的师资阵容，严苛的讲师考核上岗及教学考评体系；最实用领先的课程体系，与企业实际需求结合，避免大学式闭门造车的人才培养。 李超:70后，做过铁路工人、JAVA程序员、技术支持、IT讲师、还干过几天管理，06年底策划并创立兄弟连，对教育的本质有较为深刻的理解，坚持兄弟的核心价值，认为最浪漫的事情就是离开这个世界的时候兄弟连还在且越来越强大。 </p>
                <p>兄弟连五大优势</p>
                      <p> 1、中国PHP培训领导品牌，七年专注PHP培训，堪称PHP程序员黄埔军校。</p>

                       <p>2、坚持“无兄弟 不编程，不抛弃 不放弃”的理念，亦师亦友，学员都是兄弟姐妹。</p>

                       <p>3、（真实最）业内唯一一家推出“一个月免费预科，不满意不缴费”政策，让学员更真<p>实的了解兄弟连、了解自己是否适合做软件开发再做决定。</p>

                      <p>  4、（教材专）业内唯一一家出版PHP学习圣经《细说PHP》，PHP类图书全国销售第一名。</p>

                      <p>5、（环境赞）业内唯一一家提供24小时开放机房，为你的学习提供最好的保障。</p> 
              
               </div>
             </div>
             </div>
           </div>
        </div>
  <!-- </div> -->

     <!-- </div>  -->

<!-- -==================================================== -->
  <br><br>
  <div class="media-body">
    <h4 class="media-headi ng" style="font-size:20px;color:#000;background:#296395;height:40px;line-height:40px;">
    <span style="margin-left:500px;">组内分工介绍</span>  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="margin-left:300px;">
              Listening  Please
            </button>
    <!-- ======================================================= -->


    <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><h4 class="modal-title" id="myModalLabel" style="color:#f00">我想大声告诉你</h4></center>
                  </div>
                  <div class="modal-body">
                  <center>
                  <p stle="color:#C100FF">
                    曾经，有一份真诚的爱情放在我面前,我没有珍惜，<br>
                    等到我失去的时候才后悔莫及，<br>
                    人世间最痛苦的事莫过于此……  <br>
                    如果上天能够给我一个再来一次的机会，<br>
                    我会对那个项目经理说三个字：<br>
                    “放我过!” <br>
                    如果非要在这份爱上加上次数，<br>
                    我希望是……就一次！
                   </p>
                    <p style="color:#0D90D1">
                    一次就好~~~<br>
                    我陪你去看天荒地老~~~~<br>
                    一次就好我带你去看天荒地老,<br>  
                    在阳光灿烂的日子里开怀大笑,<br>
                    在自由自在的空气里吵吵闹闹,<br>
                    你可知道我唯一的想要,<br>
                    世界还小我陪你去到天涯海角,<br>
                    在没有烦恼的角落里停止寻找,<br>
                    在无忧无虑的时光里慢慢变老,<br>
                    你可知道我全部的心跳.....<br>
                    随你跳~~~~~~~~~~~~~~~~~~~

                    </p>
                    </center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
    <!-- ======================RND  SIREN INFO================================= -->

    </h4>
  <br>
 
<!-- =========================sankuai======= -->
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          成员一号======>黄丹
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        
<!-- ==========end=========== -->
       <center>
         <p>前台: 1)首页的搭建; 2)社区中潮流动态; 3)"关于我们"中的团队介绍; 4)用户的登录注册页;</p><br> 
         <p>后台: 1)用户管理; 2)管理员管理; 3)管理员权限管理; 4)潮流动态管理;</p>
       </center>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          成员二号======>李文慧
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
     <div class="panel-body">
     <center>
       <p>  前台: 1)商品页; 2)商品分类; 3)商品详情 4)购物车的生成; 5)社区中的开心一刻;</p><br> 
       <p>  后台: 1)商品管理; 2)分类管理; 3)开心一刻管理;</p>
     </center>
     
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            成员三号======>俞顺程
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">    

          <center>
             <p> 前台: 1)个人中心用户资料修改; 2)订单生成; 3)相关订单查询; 4)社区中反馈意见;</p><br> 
             <p>  后台: 1)订单管理; 2)反馈意见管理;</p>
           </center>            
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            成员四号======>张卓彦
          </a>
        </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
        <div class="panel-body">

        <center>
          <p> 前台: 1)"关于我们"中招聘页; 2)优秀婚庆推荐; 3)QQ在线咨询 4)优秀婚庆评价; 5)简历填写</p><br> 
          <p> 后台: 1)招聘管理; 2)简历管理; 3)优秀婚庆管理; 4)婚庆评价管理</p>
        </center>      
        </div>
      </div>
    </div>
  </div>
<!-- ===============================end sankuai -->






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