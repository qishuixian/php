﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>湛江市顺南贸易有限公司</title>
<link href="style/base.css" rel="stylesheet" type="text/css" />
<link href="style/gonsi.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="style/swiper.min.css"/>
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/banerImg.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/switchable.js"></script>
    <script type="text/javascript" src="js/swiper.min.js"></script>
</head>
<body>
<?php
require_once '../include.php';
if($as){
 header("location:../mobile/gonsiwenhua.php");
}
?>
	<!--头部-->
    <?php include("top.php");?>
<!-- 公司简介的页面的第三部分 -->
<div class="gonsi_3">
	<div class="gonsi_3_left">
		<p><img src="images/gonsi_1.gif" width="120" height="28" style="margin-left:10px;" /></p>
        <ul>
        	 <li  id="gs_1" class='gs_li ' ><a href="gonsi.php"><img src="images/gonsi_2.gif" />公司概况</a></li>
             <li  id="gs_2" class='gs_li  gs_li1 '  ><a href="gonsiwenhua.php"><img src="images/gonsi_2.gif" />公司文化</a></li>
             <li  id="gs_3" class='gs_li' ><a href="gonsironyi.php"><img src="images/gonsi_2.gif" />公司荣誉</a></li>
             <li  id="gs_4" class='gs_li'><a href="gonsishunnan.php"><img src="images/gonsi_2.gif" />行业新闻</a></li>
             <li  id="gs_5" class='gs_li'><a href="gonsicuxiao.php"><img src="images/gonsi_2.gif"  />公司新闻</a></li>
             <li  id="gs_6" class='gs_li'><a href="gonsieven.php"><img src="images/gonsi_2.gif"   />公司事记</a></li>
        </ul>
    </div>
    <div class="gonsi_3_right">
     	<div class="gonsi3_right">
        	<span class="gonsi3_right1">公司文化</span>
            <span class="gonsi3_right2">您当前的位置：<a href="index.php">首页</a>>><a href="gonsiwenhua.php">公司文化</a></span>
        </div>
        <div class="gonsi3_right3">
        	<?php 
                $sql=mysql_query("select * from gonsiwenhua");
                $gonsiwenhua=mysql_fetch_array($sql);
                if($gonsiwenhua){
                  do{
              ?>
              <p>
                  <?php echo $gonsiwenhua['content'];?>
              </p>
              <?php
                  }while($gonsiwenhua=mysql_fetch_array($sql));
                  }else{
                  ?>
                    <h3>对不起，没有相关信息</h3>
                  <?php
            }
            ?>
        </div>
    </div>
   </div>
<?php include("footer.php");?>
</body>
</html>
</body>
</html>