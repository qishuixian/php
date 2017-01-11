<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>湛江市顺南贸易有限公司</title>
<link href="style/base.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/banerImg.js"></script>
<script type="text/javascript" src="js/scrollleft.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$(".scrollleft").imgscroll({
		speed: 40,    //图片滚动速度
		amount: 0,    //图片滚动过渡时间
		width: 1,     //图片滚动步数
		dir: "left"   // "left" 或 "up" 向左或向上滚动
	});	
});
</script> 
</head>

<body>
<?php
  require_once '../include.php';
  if($as){
 header("location:../mobile/index.php"); 
}
?>
<!-- 首页链接 -->
<?php include("top.php");?>
<!--首页的第三部分-->
  <div class="center_3">
  	<div class="center3_left">
  		<?php
            //得到数据库中所有商品 
            $sql="select * from shangpin where status like '%是%' order by time desc limit 0,1";
            $rows=fetchAll($sql);
            $sql1="select * from shangpin where status like '%是%' and hot like '是' order by time desc limit 0,1";
            $rows1=fetchAll($sql1);
            $sql2="select * from shangpin where status like '%是%' and news like '是' order by time desc limit 0,1";
            $rows2=fetchAll($sql2);
          ?>
    	<ul>
        	<li class="c">
        	<?php foreach($rows2 as $row):?>
        		<?php 
	              $proImgs=getAllImgByShangpinId($row['id']);
	              foreach($proImgs as $img):
	              ?>
	               <img src="../image_216/<?php echo $img['albumPath'];?>" alt=""  width="215" height="160"/>
	             <?php endforeach;?>
	        <?php  endforeach;?>
        	</li>
            <li class="c"><font style="color:#00F;font-weight:bold;">最新上线商品</font></li>
            <li class="d"><a href="zuixingshangxian.php" target="_blank">点击进入</a></li>
        </ul>
        <ul>
        	<li class="c">
        		<?php foreach($rows1 as $row):?>
        		<?php 
	              $proImgs=getAllImgByShangpinId($row['id']);
	              foreach($proImgs as $img):
	              ?>
	               <img src="../image_216/<?php echo $img['albumPath'];?>" alt=""  width="215" height="160"/>
	             <?php endforeach;?>
	        <?php  endforeach;?>
        	</li>
            <li class="c"><font style="color:#00F;font-weight:bold;">热销商品</font></li>
            <li class="d"><a href="rexiao.php" target="_blank">点击进入</a></li>
        </ul>
        <ul>
        	<li class="c">
        		<?php foreach($rows as $row):?>
        		<?php 
	              $proImgs=getAllImgByShangpinId($row['id']);
	              foreach($proImgs as $img):
	              ?>
	               <img src="../image_216/<?php echo $img['albumPath'];?>" alt=""  width="215" height="160"/>
	             <?php endforeach;?>
	        <?php  endforeach;?>
        	</li>
            <li class="c"><font style="color:#00F;font-weight:bold;">商品展现</font></li>
            <li class="d"><a href="shangpinall.php" target="_blank">点击进入</a></li>
        </ul>
    </div>
    <div class="center3_right">
   		<div class="s">
        	<span class="center3_right_1">公司新闻</span>
            <span class="center3_right_2"><a href="gonsicuxiao.php">more>></a></span>
        </div>
        <div class="center3_right_3">
        	<ul>
              <?php 
                $sql=mysql_query("select * from huodon order by time desc limit 0,5");
                $huodon=mysql_fetch_array($sql);
                if($huodon){
                  do{
              ?>
              
                <li class="gonsi-list">
                    <a href="gonsicuxiaoDetails.php?id=<?php echo $huodon['id'];?>" class"clearfix" target="_blank" title="<?php echo  $huodon['title'];?>">
                      <span class="gonsi-list-a"><?php echo $huodon['title'];?></span>
                      <span class="gonsi-list-time"><?php echo $huodon['time'];?></span>
                    </a>
                </li>
              
              <?php
                }while($huodon=mysql_fetch_array($sql));
                }else{
                ?>
                  <h3>对不起，没有相关信息</h3>
                <?php
            }
            ?>
          </ul>
        </div>
    </div>
 </div>
  <!--首页的第四部分-->
<div class="center_4">
  	<div class="center4_left">
    	<p style="color:#00F; float:left; margin-left:25px; padding-top:6px;font-weight:bold;">合作单位</p>
        <div class="scrollleft">
			<ul>
			<?php
	            //得到数据库中所有商品
	            $sql4="select * from shangjia where status like '%是%' order by id desc";
	             // if($sql4){
	              $rows4=fetchAll($sql4);
	            //   if(!$rows){  
	            //      echo "对不起，没有相关的商品";
	            //      exit();
	            //   }
	            // }
	            // else{
	            //   echo "对不起，没有相关的商品";
	            // }
	          ?>
	          <?php foreach($rows4 as $row4):?>
				<li>
					<?php 
		              $proImgs=getAllImgByshangjiaId($row4['id']);
		              foreach($proImgs as $img):
		            ?>
					<a href="#" title="<?php echo $row4['title']; ?>"><img src="../shangjia/<?php echo $img['albumPath'];?>" alt=""  width="136" height="100"/>
                   <?php endforeach;?></a>
					<span></span>
				</li>
			 <?php  endforeach;?>
			</ul>
		</div>
    </div>
    <div class="center4_right">
    	<div class="s">
        	<span class="center4_right_1">行业新闻</span>
            <span class="center4_right_2"><a href="gonsishunnan.php">more>></a></span>
        </div>
        <div class="center4_right_3">
        	<ul>
              <?php 
                $sql=mysql_query("select * from gongao order by time desc limit 0,4");
                $gongao=mysql_fetch_array($sql);
                if($gongao){
                  do{
              ?>
              <li class="gonsi-list">
                  <a href="gonsishunnanDetails.php?id=<?php echo $gongao['id'];?>"  target="_blank" title="<?php echo $gongao['title'];?>">
                      <span class="gonsi-list-a"><?php echo $gongao['title'];?></span>
                  
                      <span class="gonsi-list-time"><?php echo $gongao['time'];?></span>
                  </a>
              </li>
              <?php
                  }while($gongao=mysql_fetch_array($sql));
                  }else{
                  ?>
                    <h3>对不起，没有相关信息</h3>
                  <?php
            }
            ?>
          </ul>
        </div>
    </div>
	</div>
<?php include("footer.php");?>
</body>
</html>
