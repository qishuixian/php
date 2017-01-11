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
//   if(!$as){
//  header("location:../pc/shangpinall.php"); 
// }
?>
<?php include("top.php");?>
   <div class="swiper-container nav-swiper-container">
      <ul class="swiper-wrapper clear">
        <li class="swiper-slide">
          <a href="index.php" target="_blank" class="nav-item">首页</a>
        </li>
        <li class="swiper-slide active">
          <a href="shangpinzhanxian.php" target="_blank" class="nav-item">商品展示</a>
        </li>
        <li class="swiper-slide">
          <a href="shangpinnews.php" target="_blank" class="nav-item">最新上线商品</a>
        </li>
        <li class="swiper-slide">
          <a href="sahngpinghot.php" target="_blank" class="nav-item">热销商品</a>
        </li>
      </ul>
    </div>
    <div class="contain">
       <?php include("center.php");?>
      <!-- tag end/-->
      <hr class="mb-hr">
      <!-- 商品展示 -->
      <section class="mod-box">
        <div class="row mod-hd bdr">
          <h3 class="col-xs-10 mod-title">商品展示</h3>
        </div>
        <div class="row thumbnail-part ">
         <?php 
                $id=$_REQUEST['id'];
                  $proInfo=getShangpin1Id($id);
            ?>
            <h3 class="details-title"><?php echo $proInfo['pName'];?></h3>
            <p><?php echo $proInfo['pDesc'];?></p>
        </div>
    </section>
       <!-- 商品展示  end-->
    </div>
<?php include("footer.php");?>
  </body>
</html>