<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>juooo</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>

    <meta name="msapplication-TileColor" content="#0e90d2">

    <link href="//cdn.bootcss.com/amazeui/2.5.2/css/amazeui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    
    <style type="text/css">
        .copyright-wrap {
            color: #b2b2b2;
        	position:fixed;
            bottom:0;
            left:0;
        	width:100%;
        }
        .copyright-wrap .copyright-content {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        .copyright-wrap .copyright-content .service-mobile {
            font-size: 12px;
        }
        .copyright-wrap .copyright-content .copyright {
            font-size: 12px;
            line-height: 12px;
        }
        .copyright-wrap {
            color: #b2b2b2;
        }
    </style>
</head>

<body>

<div class="header">
    <div class="am-g">
    <h1></h1>
        <a href="http://www.juooo.com" target="_blank"><img src="http://zhuanti.juooo.com/zhuanti/2017/juooo-head-module/images/logo.png"></a>   
        <p>聚橙网短地址服务<br>基于发号加hash id的短网址服务</p>
    </div>
    <hr>
</div>

<div class="am-g">
    <div id="content" class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <form class="am-form">
            <input type="url" name="" id="url" value="" placeholder="请在此填写你要转换的长网址或短址">
            <br>
            <div class="am-cf">
                <input type="button" id="shorten" value="转换短址" class="am-btn am-btn-primary am-btn-sm am-fl">
                <input type="button" id="expand" value="还原短址" class="am-btn am-btn-default am-btn-sm am-fr">
            </div>
        </form>
        <div id="qrcode" class="am-hide am-center am-img-thumbnail am-img-responsive" style="width: 206px;height: 206px"></div>
        <hr>
        <div class="copyright-wrap">
                        <div class="copyright-content">
                            <p class="service-mobile"><a class="link" href="tel:400-185-8666">客服电话：400-185-8666</a></p>
                            <p class="copyright">Copyright 2007-2017 © ALL Rights Reserved </br></br></br>粤ICP备09218027号 </p>
                        </div>

                    </div>
    </div>
</div>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="http://cdn.amazeui.org/amazeui/2.4.2/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="//cdn.bootcss.com/amazeui/2.5.2/js/amazeui.min.js"></script>
<script src="//cdn.bootcss.com/validator/4.0.5/validator.min.js"></script>
<script src="//cdn.bootcss.com/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script src="js/index.js"></script>
<?php if (!empty(Flight::get('flight.settings')['external_js'])): ?>
    <script src="<?= Flight::get('flight.settings')['external_js'] ?>"></script>
<?php endif ?>
</body>
</html>