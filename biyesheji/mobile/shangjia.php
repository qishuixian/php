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
?>
<?php include("top.php");?>
    <div class="swiper-container nav-swiper-container">
        <ul class="swiper-wrapper clear">
	        <li class="swiper-slide">
	          <a href="index.php" target="_blank" class="nav-item">首页</a>
	        </li>
	        <li class="swiper-slide">
	          <a href="gonsijianjie.php" target="_blank" class="nav-item">公司简介</a>
	        </li>
	        <li class="swiper-slide">
	          <a href="gonsiwenhua.php" target="_blank" class="nav-item">公司文化</a>
	        </li>
	        <li class="swiper-slide">
	          <a href="gonsironyu.php" target="_blank" class="nav-item">公司荣誉</a>
	        </li>
	        <li class="swiper-slide">
	          <a href="gonsigogao.php" target="_blank" class="nav-item">行业新闻</a>
	        </li>
	         <li class="swiper-slide">
	          <a href="gonsicuxiao.php" target="_blank" class="nav-item">公司新闻</a>
	        </li>
	        <li class="swiper-slide">
	          <a href="gonsieven.php" target="_blank" class="nav-item">公司事记</a>
	        </li>
	         <li class="swiper-slide active">
	          <a href="shangjia.php" target="_blank" class="nav-item">合作商家</a>
	        </li>
        </ul>
    </div>
    <div class="contain">
        <?php include("center.php");?>
	    <hr class="mb-hr">
	     <!-- 商品展示 -->
       <!-- 公司简介  -->
        <section class="mod-box">
	        <div class="row mod-hd bdr">
	          <h3 class="col-xs-10 mod-title">合作商家</h3>
	        </div>
	        <div class="row thumbnail-part">
	         <?php
            //得到数据库中所有商品
            $sql="select * from shangjia where status like '%是%' order by id desc limit 0,8";
             if($sql){
              $rows=fetchAll($sql);
              if(!$rows){  
                 echo "对不起，没有相关的商品";
                 exit();
              }
            }
            else{
              echo "对不起，没有相关的商品";
            }
          ?>
          <?php foreach($rows as $row):?>
          <div class="col-xs-3">
            <span class="thumbnail-item">
            <?php 
              $proImgs=getAllImgByshangjiaId($row['id']);
              foreach($proImgs as $img):
              ?>
               <img src="../admin/uploads/<?php echo $img['albumPath'];?>" alt=""/>
               <?php endforeach;?>
              <p class="thumbnail-txt text_hide"><?php echo $row['title']; ?></p>
            </span>
          </div>
          <?php  endforeach;?>
	        </div>
        </section>
        <!-- 公司简介  end-->
    </div>
    <?php include("footer.php");?>
  </body>
</html>