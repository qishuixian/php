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
 header("location:../pc/gonsicuxiao.php"); 
}
?>
<?php include("top.php");?>
    <div class="swiper-container nav-swiper-container">
        <ul class="swiper-wrapper clear">
	        <li class="swiper-slide">
	          <a href="index.php" target="_blank" class="nav-item">首页</a>
	        </li>
	        <li class="swiper-slide active">
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
	         <li class="swiper-slide">
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
	          <h3 class="col-xs-10 mod-title">公司新闻</h3>
	        </div>
	        <div class="row thumbnail-part mb20">
           <ul>
              <?php
                $page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
                $sql="select * from  huodon";
                $totalRows=getResultNum($sql);
                $pageSize=10;
                $totalPage=ceil($totalRows/$pageSize);
                if($page<1||$page==null||!is_numeric($page))$page=1;
                if($page>=$totalPage)$page=$totalPage;
                $offset=($page-1)*$pageSize;
                $sql="select id,title,content,status,time from  huodon order by time desc limit {$offset},{$pageSize}";
                $rows=fetchAll($sql);
                if(!$rows){
                  echo "对不起，没有相关信息";
                  exit;
                }
              ?>
                <?php  foreach($rows as $huodon):?>
                  <li class="gonsi-list clearfix">
                      <a href="gonsicuxiaoDetails.php?id=<?php echo $huodon['id'];?>" class="clearfix" title="<?php echo $huodon['title'];?>" target="_blank">
                          <span class="gonsi-list-a fl"><?php echo $huodon['title'];?></span>
                      
                          <span class="gonsi-list-time fr"><?php echo $huodon['time'];?></span>
                        </a>
                  </li>
              <?php endforeach;?>
            </ul>
            <div class="mt20 m-page">
              <?php if($totalRows>$pageSize):?>
                  <?php echo showPage($page, $totalPage);?>
                  <?php endif;?>
            </div>
	        </div>
        </section>
        <!-- 公司简介  end-->
    </div>
    <?php include("footer.php");?>
  </body>
</html>