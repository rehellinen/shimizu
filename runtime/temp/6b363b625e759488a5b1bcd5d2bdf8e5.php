<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"C:\wamp64\www\shimizu\public/../application/admin\view\banner\index.html";i:1516672792;s:73:"C:\wamp64\www\shimizu\public/../application/admin\view\public\header.html";i:1516672792;s:70:"C:\wamp64\www\shimizu\public/../application/admin\view\public\nav.html";i:1517406240;s:73:"C:\wamp64\www\shimizu\public/../application/admin\view\public\footer.html";i:1516672792;}*/ ?>
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
                <li>
                    <a href="__PATH__?s=admin/login/loginOut"><i class="fa fa-table fa-fw"></i>退出</a>
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
                <h1 class="page-header">轮播图管理</h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <button style="margin-bottom: 10px" type="button" class="btn btn-primary" id="addButton">添加</button>

            </div>
            <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="col-lg-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        轮播图
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="row">
                                排序：
                                <input class="listorder" attr-id="<?php echo $vo['id']; ?>" type="text" size="1" value="<?php echo $vo['listorder']; ?>"/>
                            </div>
                            <hr />
                            <div class="row table-striped">
                                <span class="statusButton" attr-id="<?php echo $vo['id']; ?>" attr-status="<?php echo $vo['status']==1?2 : 1; ?>"
                                      message="是否确定更改状态">状态：<?php echo getStatus($vo['status']); ?></span>
                            </div>
                            <hr />
                            <div class="row table-striped">
                                操作：
                                <span class="fa fa-edit editButton" attr-id="<?php echo $vo['id']; ?>"></span>
                                <span class="fa fa-times statusButton" attr-id="<?php echo $vo['id']; ?>" attr-status="-1" message="是否确定删除"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img src="<?php echo $vo['media_id']; ?>" class="img-responsive">
                        </div>

                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
        <div class="row">
            <?php echo $page; ?>
        </div>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script>
    var URL = {
        'add_url' : '__PATH__?s=admin/banner/add',
        'edit_url' : '__PATH__?s=admin/banner/edit',
        'status_url' : '__PATH__?s=admin/banner/status',
        'success_url' : '__PATH__?s=admin/banner/index',
        'listorder_url' : '__PATH__?s=admin/banner/listorder'
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
