<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>湛江市顺南贸易有限公司</title>
<link href="style/base.css" rel="stylesheet" type="text/css" />
<link href="style/gonsi.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/banerImg.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
</head>
<body>
<?php
require_once '../include.php';
if($as){
 header("location:../mobile/rencaizhanlue.php");
}
?>
<?php include("top.php");?>
<div class="gonsi_3">
	<div class="gonsi_3_left">
		<p><img src="images/rencai_3.gif" width="118" height="28" style="margin-left:10px;" /></p>
        <ul>
       	    <li  id="gs_1" class='gs_li gs_li1 ' ><a href="rencai.php"><img src="images/gonsi_2.gif" />人才战略</a></li>
             <li  id="gs_2" class='gs_li '  ><a href="rencaizhaopin.php"><img src="images/gonsi_2.gif" />人才招聘</a></li>
             <li  id="gs_3" class='gs_li' ><a href="rencaishenghuo.php"><img src="images/gonsi_2.gif" />精彩生活</a></li>
             <li  id="gs_4" class='gs_li'><a href="rencaifazhan.php"><img src="images/gonsi_2.gif" />发展空间</a></li>
        </ul>
    </div>
    <div class="gonsi_3_right">
     	<div class="gonsi3_right">
        	<span class="gonsi3_right1">人才战略</span>
            <span class="gonsi3_right2">您当前的位置：<a href="index.php">首页</a>>><a href="rencai.php">人才战略</a></span>
        </div>
        <div class="gonsi3_right3">
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
    </div>
</div>
<?php include("footer.php");?>
</body>
</html>
</body>
</html>