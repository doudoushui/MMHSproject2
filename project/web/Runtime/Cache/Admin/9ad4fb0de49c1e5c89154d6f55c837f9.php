<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LAMP-SH43 Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="/Public/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/Public/Admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="/Public/Admin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/Public/Admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/Public/Admin/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/Public/Admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <?php  ?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">名门婚纱商城后台管理</a>
                <a class="navbar-brand" href="<?php echo U('Home/Index/index');?>">回首页</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
            
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><?php echo $_SESSION['adminname']?>  <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                             
                        <li><a href="<?php echo U('Admin/Loginout/index');?>"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> 模块管理</a>
                        </li>


                        <li>
                           <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 用户管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                  <li>
                                    <a href="<?php echo U('Admin/User/index');?>">用户列表</a>
                                 </li>
                           
                                    <li>
                                     <a href="<?php echo U('Admin/User/add');?>">用户添加</a>
                                    </li>
                            
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                 

                      
                        <!-- 管理员 -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>管理员管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Adminuser/index');?>">管理员列表</a>
                                </li>
                          
                                <li>
                                    <a href="<?php echo U('Admin/Adminuser/add');?>">管理员添加</a>
                                </li>
                           
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                   

                          
            

                        <!-- 权限规则 -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>权限规则管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Thinkauthrule/index');?>">权限规则列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Thinkauthrule/add');?>">权限规则添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                  <!-- 权限组 -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>权限组管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Thinkauthgroup/index');?>">权限组列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Thinkauthgroup/add');?>">权限组添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 商品管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Goods/index');?>">商品列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Goods/add');?>">商品添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 分类管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Cate/index');?>">分类列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Cate/add');?>">分类添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>订单管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Order/index');?>">订单列表</a>
                                </li>
                          
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 评论管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Goodscomment/index');?>">商品评论列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Goodscomment/add');?>">商品评论添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 开心一刻管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Joke/index');?>">开心一刻列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Joke/add');?>">开心一刻添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 信息反馈管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Sug/index');?>">信息反馈列表</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 潮流动态管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Fashion/index');?>">潮流动态列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Fashion/add');?>">潮流动态添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 婚庆推荐管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Recommend/index');?>">婚庆推荐列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Recommend/add');?>">婚庆推荐添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 公司招聘管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Job/index');?>">公司招聘列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Job/add');?>">公司招聘添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                       <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 简历管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Resume/index');?>">简历列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Resume/add');?>">简历添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                      <li>
                          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 婚庆评论管理<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="<?php echo U('Admin/Recommendmsg/index');?>">评论列表</a>
                              </li>
                              <li>
                                  <a href="<?php echo U('Admin/Recommendmsg/add');?>">评论添加</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">商品列表</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <!-- DataTables Advanced Tables -->
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
         <div class="dataTable_wrapper">
          <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
           <div class="row">

            <form action="<?php echo U('Admin/Goods/index');?>" method="get">
             <div class="col-sm-6">
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
             <div class="col-sm-6">
              <div id="dataTables-example_filter" class="dataTables_filter">
                <label>商品名:<input value="<?php echo ($_GET['keyword']); ?>" name="keyword" type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label>
                <button type="submit" class="btn btn-info">查询</button>
              </div>
             </div>
            </form>
           </div>
           <div class="row">
            <div class="col-sm-12">
             <!-- 商品列表遍历 -->
             <table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dataTables-example_info">
            <thead>
              <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 10px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 80px;" aria-label="Browser: activate to sort column ascending">图片</th>
                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Browser: activate to sort column ascending">商品名</th>
                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 80px;" aria-label="Engine version: activate to sort column ascending">价格</th>
                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 60px;" aria-label="Engine version: activate to sort column ascending">库存</th>
                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 60px;" aria-label="Engine version: activate to sort column ascending">销量</th>
                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 80px;" aria-label="Engine version: activate to sort column ascending">状态</th>
                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 80px;" aria-label="Engine version: activate to sort column ascending">热销否</th>
                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 80px;" aria-label="Engine version: activate to sort column ascending">新品否</th>
                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 50px;" aria-label="Engine version: activate to sort column ascending">点赞量</th>
                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 300px;" aria-label="Engine version: activate to sort column ascending">描述</th>
                 <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 80px;" aria-label="Engine version: activate to sort column ascending">添加时间</th>
                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 50px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
              </tr>
            </thead>
            <tbody>
              <?php if(is_array($goodss)): foreach($goodss as $k=>$vo): ?><tr class="gradeA odd" role="row">
                  <td class="sorting_1 sid"><?php echo ($vo["id"]); ?></td>
                  <td class="sorting_1">
                    <img src="<?php echo ($vo["gpic"]); ?>" width="80px"height="80px">
                  </td>
                  <td class="edit"><?php echo ($vo["gname"]); ?></td>
                  <td><?php echo ($vo["price"]); ?></td>
                  <td><?php echo ($vo["stock"]); ?></td>
                  <td><?php echo ($vo["sale"]); ?></td>
                  <td class="edit_state"><?php echo ($vo['state']?'上架':'下架'); ?></td>
                  <td class="edit_ishot"><?php echo ($vo['is_hot']?'热销':'非热销'); ?></td>
                  <td class="edit_isnew"><?php echo ($vo['is_new']?'新品':'非新品'); ?></td>
                  
                  <td><?php echo ($vo["zan"]); ?></td>
                  <td class="edit_msg"><?php echo ($vo["msg"]); ?></td>
                  <td class="t"><?php echo ($vo["gtime"]); ?></td> 
                  <td class="center">
                    <button class="btn btn-danger btn-del  btn-primary" type="button"><i class="fa fa-times"></i> 删除</button><br>
                    <a href="<?php echo U('Admin/Goods/save',array('id'=>$vo['id']));?>" class="btn btn-primary btn-primary" type="button"><i class="fa fa-wrench"></i> 修改</a><br>
                     <a href="<?php echo U('Admin/Goods/img',array('id'=>$vo['id']));?>" class="btn btn-primary btn-info" type="button"><i class="fa fa-camera"></i> 上图</a>
                     <!-- <a href="<?php echo U('Admin/Joke/add');?>">开心一刻添加</a> -->
                  </td>
                </tr><?php endforeach; endif; ?>
            </tbody>
           </table>
          </div>
         </div>
         <div class="row">
          <div class="col-sm-6">
            <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
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

  <script type="text/javascript" src="/Public/Admin/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
    //绑定单击事件
    $('.btn-del').click(function(){
      // alert('222');

      //获取id
      var id = $(this).parents('tr').find('.sid').html();
      var url = "<?php echo U('Admin/Goods/ajaxdel');?>";
      // alert(url);
      var btn = $(this);
      //ajax
      $.get(url,{id:id},function(data){
        // console.log(data);
        if(data == 1){
          // alert('成功');
         btn.parents('tr').remove();
        }else{
          alert('失败');
        }
      })

    })
    //绑定单击事件
    $('.edit_state').click(function(){
    // alert('222');die;
    //获取当前的文本
    var state = $(this).html();
    // alert(state == '上架');


    if (state == '上架') {
      vstate = '下架';
    }else{
      vstate = '上架';

    }
   // <?php echo ($info['state']?$info['0']:$info['1']); ?>
    // var state=$info['state'];

    // alert (state);
    //获取id
      var id = $(this).parents('tr').find('.sid').html();

      var url = "<?php echo U('Admin/Goods/ajaxedit2');?>";
      // alert(url);
      var btn = $(this);
      //ajax
      $.post(url,{id:id,state:state},function(data){
        // console.log(data);

        if(data == 1){
          // alert('成功');
          btn.html(vstate);
        }else{
           alert('失败');
        }
     })
    })
     $('.edit_ishot').click(function(){
    // alert('222');die;
    //获取当前的文本
    var is_hot = $(this).html();
    // alert(state == '上架');


    if (is_hot == '热销') {
      vstate = '非热销';
    }else{
      vstate = '热销';

    }
   // <?php echo ($info['state']?$info['0']:$info['1']); ?>
    // var state=$info['state'];

    // alert (state);
    //获取id
      var id = $(this).parents('tr').find('.sid').html();

      var url = "<?php echo U('Admin/Goods/ajaxedit_hot');?>";
      // alert(url);
      var btn = $(this);
      //ajax
      $.post(url,{id:id,is_hot:is_hot},function(data){
        // console.log(data);
        
        if(data == 1){
          // alert('成功');
          btn.html(vstate);
        }else{
           alert('失败');
        }
     })
    })
     // ============================
    $('.edit_isnew').click(function(){
    // alert('222');die;
    //获取当前的文本
    var is_new = $(this).html();
    // alert(state == '上架');


    if (is_new == '新品') {
      vstate = '非新品';
    }else{
      vstate = '新品';

    }
   // <?php echo ($info['state']?$info['0']:$info['1']); ?>
    // var state=$info['state'];

    // alert (state);
    //获取id
      var id = $(this).parents('tr').find('.sid').html();

      var url = "<?php echo U('Admin/Goods/ajaxedit_new');?>";
      // alert(url);
      var btn = $(this);
      //ajax
      $.post(url,{id:id,is_new:is_new},function(data){
        // console.log(data);
        
        if(data == 1){
          // alert('成功');
          btn.html(vstate);
        }else{
           alert('失败');
        }
     })
    })
     //给第二个td绑定双击事件
   $('.edit').dblclick(function(){
    //获取当前的文本
    var v = $(this).html();
    // 创建inp
    var inp = $('<input type="text" value="'+v+'" name="gname" />')
    //将input插入td中
    $(this).html(inp);
    //让input处于选中状态
    inp.select();
    var td = $(this);
    //绑定丧失焦点事件
    inp.blur(function(){
      //获取当前修改后的值
      var newV = $(this).val();
      //获取当前的id
      var id = $(this).parents('tr').find('.sid').html();
      var gtime = $(this).parents('tr').find('.t').html();

      var url = "<?php echo U('Admin/Goods/ajaxedit');?>";
      //发送ajax
      $.get(url,{id:id,gtime:gtime,gname:newV},function(data){
        if(data == 1){
          // alert('修改成功');
          td.html(newV);
        }else{
          alert('修改失败');
        }
      })
     })
   })
   $('.edit_msg').dblclick(function(){
    //获取当前的文本
    var v = $(this).html();
    // 创建inp
    var inp = $('<input type="text" value="'+v+'" name="msg" />')
    //将input插入td中
    $(this).html(inp);
    //让input处于选中状态
    inp.select();
    var td = $(this);
    //绑定丧失焦点事件
    inp.blur(function(){
      //获取当前修改后的值
      var newV = $(this).val();
      //获取当前的id
      var id = $(this).parents('tr').find('.sid').html();
      var gtime = $(this).parents('tr').find('.t').html();
      var url = "<?php echo U('Admin/Goods/ajaxedit');?>";
      //发送ajax
      $.get(url,{id:id,gtime:gtime,msg:newV},function(data){
        if(data == 1){
          // alert('修改成功');
          td.html(newV);
        }else{
          alert('修改失败');
        }
      })

    })
   })
  </script>

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/Public/Admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/Public/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/Public/Admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/Public/Admin/bower_components/raphael/raphael-min.js"></script>
    <!-- // <script src="/Public/Admin/bower_components/morrisjs/morris.min.js"></script> -->
    <!-- // <script src="/Public/Admin/js/morris-data.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="/Public/Admin/dist/js/sb-admin-2.js"></script>

</body>

</html>