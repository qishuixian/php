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
 header("location:../pc/index.php"); 
}
?>
<?php include("top.php");?>
    <div class="swiper-container nav-swiper-container">
      <ul class="swiper-wrapper clear">
        <li class="active swiper-slide">
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
        <li class="swiper-slide">
          <a href="hudon.php" target="_blank" class="nav-item">互动专区</a>
        </li>
        <li class="swiper-slide">
          <a href="me.php" target="_blank" class="nav-item">联系我们</a>
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
          <a href="shangpinzhanxian.php" class="col-xs-2 more">更多<span class="orange">+</span></a>
        </div>
        <div class="row thumbnail-part">
          <?php
            //得到数据库中所有商品
            $sql="select * from shangpin where status like '%是%' order by id desc limit 0,8";
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
            <a href="shangpinallDetails.php?id=<?php echo $row['id'];?>" class="thumbnail-item">
            <?php 
              $proImgs=getAllImgByShangpinId($row['id']);
              foreach($proImgs as $img):
              ?>
               <img src="../image_184/<?php echo $img['albumPath'];?>" alt=""/>
               <?php endforeach;?>
              <p class="thumbnail-txt text_hide"><?php echo $row['pName'];?></p>
            </a>
          </div>
          <?php  endforeach;?>
        </div>
    </section>
       <!-- 商品展示  end-->
       <!-- 公司简介  -->
      <section class="mod-box">
        <div class="row mod-hd bdr">
          <h3 class="col-xs-10 mod-title">公司简介</h3>
          <a href="gonsijianjie.php" class="col-xs-2 more">更多<span class="orange">+</span></a>
        </div>
        <div class="row thumbnail-part index-gonsi">
          <?php 
                $sql=mysql_query("select * from gonsi");
                $gonsi=mysql_fetch_array($sql);
                if($gonsi){
                  do{
              ?>
              <p>
                  <?php echo $gonsi['content'];?>
              </p>
              <?php
                  }while($gonsi=mysql_fetch_array($sql));
                  }else{
                  ?>
                    <h3>对不起，没有相关信息</h3>
                  <?php
            }
            ?>
        </div>
      </section>
      <!-- 公司简介  end-->
       <!-- 人才招聘  -->
      <section class="mod-box">
        <div class="row mod-hd bdr">
          <h3 class="col-xs-10 mod-title">人才战略</h3>
          <a href="rencaizhanlue.php" class="col-xs-2 more">更多<span class="orange">+</span></a>
        </div>
        <div class="row thumbnail-part index-gonsi">
          <?php 
                require_once '../include.php';
                $sql=mysql_query("select * from rencai");
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
       <!-- 合作商家 -->
      <section class="mod-box">
        <div class="row mod-hd bdr">
          <h3 class="col-xs-10 mod-title">合作商家</h3>
           <a href="shangjia.php" class="col-xs-2 more">更多<span class="orange">+</span></a>
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
       <!-- 合作商家  end-->
    </div>
<?php include("footer.php");?>
  </body>
</html>