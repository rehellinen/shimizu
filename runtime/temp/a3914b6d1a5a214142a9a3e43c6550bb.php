<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"C:\wamp\www\shimizu\public/../application/admin\view\menu\add.html";i:1508082561;s:71:"C:\wamp\www\shimizu\public/../application/admin\view\public\header.html";i:1508053983;s:68:"C:\wamp\www\shimizu\public/../application/admin\view\public\nav.html";i:1508082507;s:71:"C:\wamp\www\shimizu\public/../application/admin\view\public\footer.html";i:1508127408;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>清水宇治</title>

    <!-- Bootstrap Core CSS -->
    <link href="__STATIC__/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="__STATIC__/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="__STATIC__/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="__STATIC__/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="__STATIC__/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
        <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
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
                <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
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
                <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
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
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                <li>
                    <a href="__PATH__?s=admin/index/index"><i class="fa fa-dashboard fa-fw"></i>首页</a>
                </li>
                <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menuNav): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="__PATH__?s=<?php echo $menuNav['m']; ?>/<?php echo $menuNav['c']; ?>/<?php echo $menuNav['f']; ?>"><i class="fa fa-table fa-fw"></i><?php echo $menuNav['name']; ?></a>
                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">添加菜单</h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <form class="form-horizontal" id="submitForm" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">名称：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="请填写菜单名称">
                    </div>
                </div>

                <div class="form-group">
                    <label for="m" class="col-sm-2 control-label">模块：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="m" id="m" placeholder="请填写模块">
                    </div>
                </div>

                <div class="form-group">
                    <label for="c" class="col-sm-2 control-label">控制器：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="c" id="c" placeholder="请填写控制器">
                    </div>
                </div>

                <div class="form-group">
                    <label for="f" class="col-sm-2 control-label">方法：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f" id="f" placeholder="请填写方法">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">类型：</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" name="type" value="2" checked>前端导航
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="type" value="1">后台菜单
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-primary" id="submitButton">提交</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script>
    var URL = {
        'submit_url' : '__PATH__?s=admin/menu/add',
        'success_url' : '__PATH__?s=admin/menu/index'

    }
</script>

<!-- jQuery -->
<script src="__STATIC__/vendor/jquery/jquery.min.js"></script>
<script src="__STATIC__/vendor/uploadify/jquery.uploadify.min.js"></script>
<script src="__STATIC__/vendor/admin/image.js"></script>


<!-- Bootstrap Core JavaScript -->
<script src="__STATIC__/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="__STATIC__/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="__STATIC__/vendor/raphael/raphael.min.js"></script>
<script src="__STATIC__/vendor/morrisjs/morris.min.js"></script>
<script src="__STATIC__/data/morris-data.js"></script>
<script src="__STATIC__/vendor/admin/common.js"></script>

<!-- Custom Theme JavaScript -->
<script src="__STATIC__/dist/js/sb-admin-2.js"></script>
<script src="__STATIC__/vendor/layer/dialog.js"></script>
<script src="__STATIC__/vendor/layer/dialog/layer.js"></script>


</body>

</html>
