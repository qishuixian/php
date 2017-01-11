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
 header("location:../pc/shangpinall.php"); 
}
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
      <section class="mod-box  mod-box-shangping">
        <div class="row mod-hd bdr">
          <h3 class="col-xs-10 mod-title">商品展示</h3>
        </div>
        <div class="row thumbnail-part">
         <?php
         $keywords=$_POST['search'];
         if ($keywords) {
           $where=$keywords?" pName like '%{$keywords}%'":null;
          //得到数据库中所有商品
          $sc="where status like '%是%' and {$where} order by time desc";
          $sql="select * from shangpin {$sc}";
          $totalRows=getResultNum($sql);
          $pageSize=32;
          $totalPage=ceil($totalRows/$pageSize);
          $page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
          if($page<1||$page==null||!is_numeric($page))$page=1;
          if($page>$totalPage)$page=$totalPage;
          $offset=($page-1)*$pageSize;
          $sql="select * from shangpin {$sc} limit {$offset},{$pageSize}";
           if($sql){
            $rows=fetchAll($sql);
            if($rows){  
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
           <div class="col-xs-12">
            <?php if($totalRows>$pageSize):?>
              <span><?php echo showPage($page, $totalPage,"keywords={$sc}{$keywords}&order={$order}");?></span>
             <?php endif;?>
            </div>
        </div>
        <?php
          }else{
             echo "对不起，没有相关的商品";
            }
          }
          else{
            echo "对不起，没有相关的商品";
          }
          }
        ?>
    </section>
       <!-- 商品展示  end-->
    </div>
<?php include("footer.php");?>
  </body>
</html>