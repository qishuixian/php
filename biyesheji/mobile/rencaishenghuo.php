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
 header("location:../pc/rencaishenghuo.php"); 
}
?>
<?php include("top.php");?>
    <div class="swiper-container nav-swiper-container">
      <ul class="swiper-wrapper clear">
        <li class=" swiper-slide">
          <a href="index.php" target="_blank" class="nav-item">首页</a>
        </li>
        <li class="swiper-slide active">
          <a href="rencaizhaopin.php" target="_blank" class="nav-item">人才招聘</a>
        </li>
        <li class="swiper-slide">
          <a href="rencaizhanlue.php" target="_blank" class="nav-item">人才战略</a>
        </li>
        <li class="swiper-slide">
          <a href="rencaishenghuo.php" target="_blank" class="nav-item">精彩生活</a>
        </li>
        <li class="swiper-slide">
          <a href="rencaifazhan.php" target="_blank" class="nav-item">发展空间</a>
        </li>
      </ul>
    </div>
    <div class="contain">
        <?php include("center.php");?>
      <hr class="mb-hr">
       <!-- 人才招聘  -->
      <section class="mod-box">
        <div class="row mod-hd bdr">
          <h3 class="col-xs-10 mod-title">精彩生活</h3>
        </div>
        <div class="row thumbnail-part">
          <?php 
                require_once '../include.php';
                $sql=mysql_query("select * from rencaishenghuo");
                $rencai=mysql_fetch_array($sql);
                if($rencai){
                  do{
              ?>
              <p>
                  <?php echo $rencai['content'];?>
              </p>
              <?php
                  }while($rencai=mysql_fetch_array($sql));
                  }else{
                  ?>
                    <h3>对不起，没有相关信息</h3>
                  <?php
            }
            ?>
        </div>
      </section>
      <!-- 人才招聘  end-->
    </div>
<?php include("footer.php");?>
  </body>
</html>