<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>湛江市顺南贸易有限公司</title>
<link href="style/base.css" rel="stylesheet" type="text/css" />
<link href="style/gonsi.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/banerImg.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
</head>
<body>
<?php
require_once '../include.php';
if($as){
 header("location:../mobile/hudon.php");
}
?>
<?php include("top.php");?>
    <div class="gonsi_3">
     	<div class="gonsi3_right" style="border-bottom: 2px solid #b1abab;">
            <span><img src="images/hudon_1.gif" width="118" height="28" style="margin-left:10px;" /></span>
            <span class="gonsi3_right2">您当前的位置：<a href="index.php">首页</a>>><a href="hudon.php">在线留言</a></span>
        </div>
        <!-- 多说评论框 start -->
    <div class="ds-thread" data-thread-key="www" data-title="111" data-url="http://localhost/shunnan/pc/hudon.php"></div>
    <!-- 多说评论框 end -->
    <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
    <script type="text/javascript">
    var duoshuoQuery = {short_name:"shunnan1111"};
        (function() {
            var ds = document.createElement('script');
            ds.type = 'text/javascript';ds.async = true;
            ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
            ds.charset = 'UTF-8';
            (document.getElementsByTagName('head')[0] 
             || document.getElementsByTagName('body')[0]).appendChild(ds);
        })();
        </script>
    <!-- 多说公共JS代码 end -->
    </div>
<?php include("footer.php");?>
</body>
</html>