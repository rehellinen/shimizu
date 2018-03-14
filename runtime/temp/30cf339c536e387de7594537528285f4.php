<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"C:\wamp\www\shimizu\public/../application/index\view\event\index.html";i:1517575690;s:71:"C:\wamp\www\shimizu\public/../application/index\view\public\header.html";i:1520595667;s:68:"C:\wamp\www\shimizu\public/../application/index\view\public\nav.html";i:1521001832;s:71:"C:\wamp\www\shimizu\public/../application/index\view\public\footer.html";i:1520598373;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>清水宇治ShimiZu</title>
    <link rel="stylesheet" href="__STATIC__/index/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="__STATIC__/index/css/index.css" type="text/css" media="all" />

</head>

<body>

<link rel="stylesheet" href="__STATIC__/index/css/event.css" type="text/css" media="all" />
<!-- headLogo -->
<div class="head col-md-12">
    <img class="img-responsive center-block" src="__STATIC__/index/img/logo.jpg" />
</div>
<!-- headLogo -->


<!-- nav -->
<div class="col-md-12 ">
    <div class="col-md-2">
        <img class="img-responsive center-block" src="__STATIC__/index/img/banner/shimizuuji.png" />

    </div>
    <div class="col-md-10">
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">

                <!-- .navbar-toggle样式用于toggle收缩的内容，即nav-collapse collapse样式所在元素 -->
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- 确保无论是宽屏还是窄屏，navbar-brand都显示 -->
                <a href="##" class="navbar-brand hidden-lg">清水宇治</a>
            </div>
            <!-- 屏幕宽度小于768px时，div.navbar-responsive-collapse容器里的内容都会隐藏，显示icon-bar图标，当点击icon-bar图标时，再展开。屏幕大于768px时，默认显示。 -->
            <div class="collapse navbar-collapse navbar-responsive-collapse" data-toggle="collapse" data-target=".example">
                <ul class="nav navbar-nav">
                    <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="__PATH__/<?php echo $vo['m']; ?>/<?php echo $vo['c']; ?>/<?php echo $vo['f']; ?>"><?php echo $vo['name']; ?></a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- nav -->


<hr>


    <div class="body">
        <!-- 最新活动 -->
        <div class="recent col-md-12">
            <div class="col-md-4 col-sm-12">
                <img src="<?php echo $eventBig['media_id']; ?>" class="img-responsive" alt="最新活动海报">
            </div>
            <div class="col-md-8 col-sm-12">
                <h1><?php echo $eventBig['title']; ?></h1>
                <h3><?php echo $eventBig['subtitle']; ?></h3>
                <h4>内容简介</h4>
                <div class="contentContainer">
                    <p class="content">
                        <?php echo $eventBig['content']; ?>
                    </p>
                </div>
                <p class="time"><?php echo $eventBig['create_time']; ?></p>
            </div>
        </div>

        <!-- 近期活动 -->
        <?php if(is_array($events) || $events instanceof \think\Collection || $events instanceof \think\Paginator): $key = 0; $__LIST__ = $events;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <div class="moreEvent col-md-12">
            <div class="col-md-3">
                <img src="<?php echo $vo['media_id']; ?>" class="img-responsive" alt="新闻图片">
            </div>
            <div class="col-md-9">
                <h3>资讯<?php echo $key; ?>：<?php echo $vo['title']; ?></h3>
                <h3><?php echo $vo['subtitle']; ?></h3>
                <p class="time"><?php echo $vo['create_time']; ?></p>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>

        <?php echo $events->render(); ?>
    </div>
<!-- 联系我们信息 -->
<div class="contact col-md-12 hidden-xs hidden-sm">

    <div class="col-md-6">
        <div class="col-md-6">
            <img class=" footerWord" src="__STATIC__/index/img/footerWord.png" alt="">
        </div>
        <div class="col-md-6">
            <div class="col-md-12 contact-detail">
                <img class="icon" src="__STATIC__/index/img/icon/weibo.png">
                <p>@清水宇治 Shimizu Uji</p>
            </div>
            <div class="col-md-12 contact-detail">
                <img class="icon" src="__STATIC__/index/img/icon/wechat.png">
                <p>清水宇治Shimiu</p>
            </div>
            <div class="col-md-12 contact-detail">
                <img class="icon" src="__STATIC__/index/img/icon/tel.png">
                <p>联系热线：13168809949</p>
            </div>
            <div class="col-md-12 contact-detail">
                <img class="icon" src="__STATIC__/index/img/icon/mail.png">
                <p>13168809949@163.com</p>
            </div>
        </div>
    </div>
    <!-- <div class="col-md-3">

    </div> -->
    <div class="col-md-6">
        <img class="QR" src="__STATIC__/index/img/QRcode.jpg">
    </div>



</div>

<!-- footer -->
<div class="col-md-12 col-sm-12 footer">
    <div class="container">
        <p>网站版权信息 备案号 粤ICP备18006900号</p>
    </div>
</div>

<script type="text/javascript" src="__STATIC__/index/js/jquery-1.11.1.min.js"></script>
<script src="__STATIC__/index/js/bootstrap.min.js"></script>
</body>

</html>
