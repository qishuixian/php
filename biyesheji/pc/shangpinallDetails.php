<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>湛江市顺南贸易有限公司</title>
<link href="style/base.css" rel="stylesheet" type="text/css" />
<link href="style/gonsi.css" rel="stylesheet" type="text/css" />
<link href="style/shangpin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/banerImg.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/shangpin.js"></script>
<script type="text/javascript">
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>
</head>
<body>
	<!--头部-->
    <?php 
    session_start();
    require_once '../include.php';
      if($as){
       header("location:../mobile/shangpinzhanxian.php"); 
      }
    ?>
    <?php include("top.php");?>
<!-- 商品展示的第三部分 -->
<div class="shangpin_3">
	<div class="shangpin_3_left">
        <p  class="zxa"><img src="images/shangpin_1.gif" width="118" height="26" /></p>
        <div class="shangpin3" >
        <p class="asdf f"><a href="#" onclick="up()"><img src="images/gonsi_2.gif" />商品全部 <!-- <font style="float:right">></font> --></a></p>
                <!-- <ul style="display:none;" id="er">
                    <li  ><a href="shangpin.php"><img src="images/gonsi_2.gif" />鱼类</a></li>
                       <li  ><a href="shangpinxia.php"><img src="images/gonsi_2.gif" />虾类</a></li>
                        <li ><a href="shangpinbei.php"><img src="images/gonsi_2.gif" />贝类</a></li>
                         <li  ><a href="shangpinrou.php"><img src="images/gonsi_2.gif" />肉类</a></li>
                          <li  ><a href="shangpinzuo.php"><img src="images/gonsi_2.gif" />佐料</a></li>
                          <li><a href="shangpinqita.php"><img src="images/gonsi_2.gif" />其他</a></li>
                 </ul> -->
            <p class="asdf"><a href="zuixingshangxian.php"><img src="images/gonsi_2.gif" />最新上线商品</a></p>
            <p class="asdf"><a href="rexiao.php"><img src="images/gonsi_2.gif" />热销商品</a></p>
		</div>
</div>
    <script type="text/javascript">
	function up(){
		var uls=document.getElementById("er");
			if(uls.style.display=="block"){
				uls.style.display="none";
			}else{
				uls.style.display="block";
			}
		}
</script>
    <div class="shangpin_right mb20" >
     	<div class="shangpin3_right">
            <span class="shangpin3_right2">您当前的位置：<a href="index.php" >首页</a>>><a href="shangpinall.php">商品全部</a></span>
        </div>
        <div class="shangpin3_right3" id="shangpin">
         <?php 
                $id=$_REQUEST['id'];
                  $proInfo=getShangpin1Id($id);
            ?>
            <h3 class="shangpin-name"><?php echo $proInfo['pName'];?></h3>
            <p><?php echo $proInfo['pDesc'];?></p>
            </div>
        </div>
    </div>
 <?php include("footer.php");?>
</body>
</html>
</body>
</html>