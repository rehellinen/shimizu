<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"C:\wamp64\www\shimizu\public/../application/admin\view\login\index.html";i:1517403206;s:73:"C:\wamp64\www\shimizu\public/../application/admin\view\public\header.html";i:1516672792;s:73:"C:\wamp64\www\shimizu\public/../application/admin\view\public\footer.html";i:1516672792;}*/ ?>
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

<div class="container">
    <form id="submitForm" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group">
            <div class="col-md-4">
                <h2>清水宇治后台登陆</h2>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-md-2 control-label">账号：</label>
            <div class="col-md-5">
                <input type="text" id="name" name="name" class="form-control" placeholder="请填写账号"/>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-md-2 control-label">密码：</label>
            <div class="col-md-5">
                <input id="password" name="password" class="form-control" placeholder="请填写密码" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-5">
                <button id="submitButton" class="btn btn-primary" type="button">登陆</button>
            </div>
        </div>
    </form>
</div>

<script>
    var URL = {
        'submit_url' : '__PATH__?s=admin/login/check'
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