<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"C:\wamp\www\shimizu\public/../application/index\view\store\index.html";i:1517503064;s:71:"C:\wamp\www\shimizu\public/../application/index\view\public\header.html";i:1520595667;s:68:"C:\wamp\www\shimizu\public/../application/index\view\public\nav.html";i:1521001832;s:71:"C:\wamp\www\shimizu\public/../application/index\view\public\footer.html";i:1520598373;}*/ ?>
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

<link rel="stylesheet" href="__STATIC__/index/css/store.css" type="text/css" media="all" />
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


    <!-- 店铺环境轮播图 -->
    <div>
        <div id="ad-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#ad-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#ad-carousel" data-slide-to="1"></li>
                <li data-target="#ad-carousel" data-slide-to="2"></li>
                <li data-target="#ad-carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="__STATIC__/index/img/banner/sky.jpg" alt="1 slide">


                </div>
                <div class="item">
                    <img class="img-responsive" src="__STATIC__/index/img/banner/flower.jpg" alt="2 slide">

                </div>
                <div class="item">
                    <img class="img-responsive" src="__STATIC__/index/img/banner/coffee.jpg" alt="3 slide">


                </div>
                <div class="item">
                    <img class="img-responsive" src="__STATIC__/index/img/banner/building.jpg" alt="4 slide">


                </div>
            </div>
            <a class="left carousel-control" href="#ad-carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#ad-carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>

    <!-- 列表横条 -->
    <div class="storeList col-md-12">
        <div class="col-md-2">
            <p>门店列表
                <a>Stores</a>
            </p>
        </div>
        <div class="col-md-10">
            <hr>
        </div>
    </div>

    <!-- 门店列表 -->
    <div class="body">
        <div class="stores">
            <div class="store col-md-12">
                <div class="col-md-10">
                    <p class="storeName">1,珠海暨珠店</p>
                    <p class="storeAddress">地址：广东省珠海市香洲区前山街道翠微东路445号商铺（暨大北门公交站旁）</p>
                    <p class="storeTel">联系电话：13149305305</p>
                </div>
                <div class="col-md-2">
                    <img src="__STATIC__/index/img/store.png" class="img-responsive" alt="门店照片">
                </div>
            </div>
            <div class="store col-md-12">
                <div class="col-md-10">
                    <p class="storeName">1,珠海暨珠店</p>
                    <p class="storeAddress">地址：广东省珠海市香洲区前山街道翠微东路445号商铺（暨大北门公交站旁）</p>
                    <p class="storeTel">联系电话：13149305305</p>
                </div>
                <div class="col-md-2">
                    <img src="__STATIC__/index/img/store.png" class="img-responsive" alt="门店照片">
                </div>
            </div>
            <div class="store col-md-12">
                <div class="col-md-10">
                    <p class="storeName">1,珠海暨珠店</p>
                    <p class="storeAddress">地址：广东省珠海市香洲区前山街道翠微东路445号商铺（暨大北门公交站旁）</p>
                    <p class="storeTel">联系电话：13149305305</p>
                </div>
                <div class="col-md-2">
                    <img src="__STATIC__/index/img/store.png" class="img-responsive" alt="门店照片">
                </div>
            </div>
            <div class="store col-md-12">
                <div class="col-md-10">
                    <p class="storeName">1,珠海暨珠店</p>
                    <p class="storeAddress">地址：广东省珠海市香洲区前山街道翠微东路445号商铺（暨大北门公交站旁）</p>
                    <p class="storeTel">联系电话：13149305305</p>
                </div>
                <div class="col-md-2">
                    <img src="__STATIC__/index/img/store.png" class="img-responsive" alt="门店照片">
                </div>
            </div>
            <div class="store col-md-12">
                <div class="col-md-10">
                    <p class="storeName">1,珠海暨珠店</p>
                    <p class="storeAddress">地址：广东省珠海市香洲区前山街道翠微东路445号商铺（暨大北门公交站旁）</p>
                    <p class="storeTel">联系电话：13149305305</p>
                </div>
                <div class="col-md-2">
                    <img src="__STATIC__/index/img/store.png" class="img-responsive" alt="门店照片">
                </div>
            </div>
        </div>
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
