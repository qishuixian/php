<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>湛江市顺南贸易有限公司</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mobile-base.css" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/TouchSlide.1.1.js"></script>
  </head>
  <body>
    <?php
  require_once '../include.php';
  if(!$as){
 header("location:../pc/hudon.php"); 
}
?>
<?php include("top.php");?>
    <div class="swiper-container nav-swiper-container">
      <ul class="swiper-wrapper clear">
        <li class=" swiper-slide">
          <a href="index.php" target="_blank" class="nav-item">首页</a>
        </li>
        <li class="swiper-slide">
          <a href="gonsijianjie.php" target="_blank" class="nav-item">公司简介</a>
        </li>
        <li class="swiper-slide">
          <a href="shangpinzhanxian.php" target="_blank" class="nav-item">商品展示</a>
        </li>
        <li class="swiper-slide">
          <a href="rencaizhaopin.php" target="_blank" class="nav-item">人才招聘</a>
        </li>
        <li class="swiper-slide active">
          <a href="hudon.php" target="_blank" class="nav-item">互动专区</a>
        </li>
        <li class="swiper-slide ">
          <a href="me.php" target="_blank" class="nav-item">联系我们</a>
        </li>
      </ul>
    </div>
    <div class="contain">
       <?php include("center.php");?>
      <!-- tag end/-->
      <hr class="mb-hr">
       <!-- 联系我们简介  -->
      <section class="mod-box">
        <div class="row mod-hd bdr">
          <h3 class="col-xs-10 mod-title">互动专区</h3>
        </div>
        <div class="row thumbnail-part">
        <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
          <!-- 多说评论框 start -->
    <div class="ds-thread" data-thread-key="www" data-title="111" data-url="http://localhost/shunnan/mobile/hudon.php"></div>
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
      </section>
      <!-- 联系我们简介  end-->
    </div>
<?php include("footer.php");?>
  </body>
</html>