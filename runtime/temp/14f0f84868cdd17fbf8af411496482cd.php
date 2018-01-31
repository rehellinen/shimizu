<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"C:\wamp64\www\shimizu\public/../application/admin\view\desert\add.html";i:1517408780;s:73:"C:\wamp64\www\shimizu\public/../application/admin\view\public\header.html";i:1516672792;s:70:"C:\wamp64\www\shimizu\public/../application/admin\view\public\nav.html";i:1517406240;s:73:"C:\wamp64\www\shimizu\public/../application/admin\view\public\footer.html";i:1516672792;}*/ ?>
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
<link href="__STATIC__/vendor/uploadify/uploadify.css" rel="stylesheet">
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
                <h1 class="page-header">添加甜品</h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <form class="form-horizontal" id="submitForm" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-2 control-label">图片:</label>
                    <div class="col-sm-10">
                        <input id="file_upload"  type="file" multiple="true" >
                        <img style="display:none" id="upload_org_code_img" src="" width="150" height="150">
                        <input id="file_upload_image" name="url" type="hidden" multiple="true" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">名称：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="请填写名称">
                    </div>
                </div>

                <div class="form-group">
                    <label for="price" class="col-sm-2 control-label">价格：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="price" id="price" placeholder="请填写价格">
                    </div>
                </div>

                <div class="form-group">
                    <label for="introduction" class="col-sm-2 control-label">介绍：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="introduction" id="introduction" placeholder="请填写介绍">
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
        'submit_url' : '__PATH__?s=admin/desert/add',
        'success_url' : '__PATH__?s=admin/desert/index',
        'swf_url' : '__STATIC__/vendor/uploadify/uploadify.swf',
        'image_url' : '__PATH__?s=admin/image/upload'
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