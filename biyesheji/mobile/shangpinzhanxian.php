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
      <section class="mod-box mod-box-shangping">
        <div class="row mod-hd bdr">
        <?php
          $id=$_REQUEST['shangpincate']?$_REQUEST['shangpincate']:null;
          $ct="select * from cate where id like {$id}";
          $rw=fetchAll($ct);
        ?>
          <h3 class="col-xs-10 mod-title">
            商品展示
            <?php
            if ($id) {
              echo ">>";
            ?>
          <?php foreach($rw as $rw):?>
            <?php echo $rw['cName'];?>
          <?php endforeach;?>
          <?php 
          }
           ?>
          </h3>
        </div>
        <div class="row thumbnail-part">
         <?php
         $sc=$id?"and p.cId like '%{$id}%' order by p.time desc":null;
          $com="where p.status like '%是%'";
        //得到数据库中所有商品
        $sql="select p.id,p.pName,p.status,p.news,p.pNum,p.hot,p.time,p.pDesc,c.cName from shangpin as p join cate c on p.cId=c.id {$com} {$sc}";
        $totalRows=getResultNum($sql);
        $pageSize=12;
        $totalPage=ceil($totalRows/$pageSize);
        $page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
        if($page<1||$page==null||!is_numeric($page))$page=1;
        if($page>$totalPage)$page=$totalPage;
        $offset=($page-1)*$pageSize;
        $sql="select p.id,p.pName,p.status,p.pNum,p.news,p.hot,p.time,p.pDesc,c.cName from shangpin as p join cate c on p.cId=c.id {$com} {$sc} limit {$offset},{$pageSize}";
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
              <!-- <p class="thumbnail-txt text_hide">销售量（<?php echo $row['pNum'];?></p> -->
            </a>
          </div>
          <?php  endforeach;?>
            <div class="mt20 m-page col-xs-12 mb20">
              <?php if($totalRows>$pageSize):?>
                  <?php echo showPage($page, $totalPage,"shangpincate={$id}");?>
                  <?php endif;?>
            </div>
        <?php
      }else{
        echo "对不起，没有相关的商品";
      }
        }
        else{
          echo "对不起，没有相关的商品";
        }
    ?>
        </div>
    </section>
       <!-- 商品展示  end-->
    </div>
<?php include("footer.php");?>
  </body>
</html>