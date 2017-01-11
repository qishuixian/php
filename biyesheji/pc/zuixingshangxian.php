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
           header("location:../mobile/shangpinnews.php"); 
          }
    ?>
    <?php include("top.php");?>
<!-- 商品展示的第三部分 -->
<div class="shangpin_3">
  <div class="shangpin_3_left">
        <p  class="zxa"><img src="images/shangpin_1.gif" width="118" height="26" /></p>
        <div class="shangpin3" >
        <p class="asdf"><a href="shangpinall.php" onclick="up()"><img src="images/gonsi_2.gif" />商品全部 <!-- <font style="float:right">></font> --></a></p>
                <!-- <ul style="display:none;" id="er">
                    <li  ><a href="shangpin.php"><img src="images/gonsi_2.gif" />鱼类</a></li>
                       <li  ><a href="shangpinxia.php"><img src="images/gonsi_2.gif" />虾类</a></li>
                        <li ><a href="#"><img src="images/gonsi_2.gif" />贝类</a></li>
                         <li  ><a href="shangpinrou.php"><img src="images/gonsi_2.gif" />肉类</a></li>
                          <li  ><a href="shangpinzuo.php"><img src="images/gonsi_2.gif" />佐料</a></li>
                          <li><a href="shangpinqita.php"><img src="images/gonsi_2.gif" />其他</a></li>
                 </ul> -->
            <p class="asdf f "><a href="zuixingshangxian.php"><img src="images/gonsi_2.gif" />最新上线商品</a></p>
            <p class="asdf "><a href="rexiao.php"><img src="images/gonsi_2.gif" />热销商品</a></p>
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
    <div class="shangpin_right" >
   <?php
          $order=$_REQUEST['order']?$_REQUEST['order']:null;
          $orderBy=$order?"order by p.".$order:null;
          $keywords=$_REQUEST['keywords']?$_REQUEST['keywords']:null;
          $selectCate=$_REQUEST['shangpincate']?$_REQUEST['shangpincate']:null;
          $where=$keywords?"and p.pName like '%{$keywords}%' order by p.time desc":null;
          $sc=$selectCate?"and c.cName like '%{$selectCate}%' order by p.time desc":null;
          $com="where p.status like '%是%' and p.news like '%是%'";
          //得到数据库中所有商品
          $sql="select p.id,p.pName,p.status,p.news,p.pNum,p.hot,p.time,p.pDesc,c.cName from shangpin as p join cate c on p.cId=c.id {$com} {$where} {$sc} {$orderBy}";
          $totalRows=getResultNum($sql);
          $pageSize=12;
          $totalPage=ceil($totalRows/$pageSize);
          $page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
          if($page<1||$page==null||!is_numeric($page))$page=1;
          if($page>$totalPage)$page=$totalPage;
          $offset=($page-1)*$pageSize;
          $sql="select p.id,p.pName,p.status,p.pNum,p.news,p.hot,p.time,p.pDesc,c.cName from shangpin as p join cate c on p.cId=c.id {$com} {$where} {$sc} {$orderBy} limit {$offset},{$pageSize}";
          $rows=fetchAll($sql);
          // 获取所有的分类
          $ct="select * from cate ";
          $rw=fetchAll($ct);
        ?>
     	<div class="shangpin3_right">
        	<span class="shangpin3_right1">最新上线商品</span>
            <span class="shangpin3_right2">您当前的位置：<a href="index.php" >首页</a>>><a href="zuixingshangxian.php">最新上线商品</a></span>
        </div>
        <div class="shangpin3_right3 " id="shangpin">
          <?php
          // 如果选择的商品分类没有相应的商品信息时
          $cname="select c.cName from shangpin as p join cate c on p.cId=c.id {$sc}";
          $cnamerows=fetchAll($cname);
          if(!$cnamerows){  
                echo "<script>alert('对不起，没有该商品分类的内容！！！');
                      window.location='zuixingshangxian.php';</script>";
               exit();
          }
          if (!$cnamerows) {
              echo "<script>alert('对不起，没有该商品分类的内容！！！');window.location='zuixingshangxian.php';</script>";
          }
          if(!$rows){  
                echo "<script>alert('对不起，没有该商品内容！！！');
                      window.location='zuixingshangxian.php';</script>";
               exit();
          }
          if (!$rows) {
              echo "<script>alert('对不起，没有该商品内容！！！');window.location='zuixingshangxian.php';</script>";
          }
          // 如果搜搜没有相应的商品信息时
          $sosoname="select p.pName from shangpin as p join cate c on p.cId=c.id {$where}";
          $sosorows=fetchAll($sosoname);
          if(!$sosorows){  
                echo "<script>alert('对不起，没有该商品的内容！！！');
                      window.location='zuixingshangxian.php';</script>";
               exit();
          }
          if (!$sosorows) {
              echo "<script>alert('对不起，没有该商品的内容！！！');
                          window.location='zuixingshangxian.php';</script>";
          }
        ?>
        <div class="clearfix">
            <div class="text">
                <span>商品分类：</span>
                <div class="bui_select">
                    <select id="" class="select" onchange="change1(this.value)">
                      <option>-请选择-</option>
                        <?php foreach($rw as $rw):?>
                            <option value="<?php echo $rw['cName'];?> "><?php echo $rw['cName'];?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="text">
                <span>销售排行：</span>
                <div class="bui_select">
                 <select id="" class="select" onchange="change(this.value)">
                  <option>-请选择-</option>
                        <option value="pNum desc" >从多到小</option>
                        <option value="pNum asc">从小到多</option>
                    </select>
                </div>
            </div>
            <div class="text">
                <span>搜索</span>
                <input name="商品关键字" type="text" style="width:162px; height:23px;" value=""  class="search1"  id="search1">
              <input name="搜索" type="submit" value="搜索" style="width:65px; height:25px;" onclick="search1()" />
            </div>
        </div>
          <ul>
          <?php foreach($rows as $row):?>
              <li class="">
                <a href="shangpinallDetails.php?id=<?php echo $row['id'];?>" target="_blank" title="<?php echo $row['pName'];?>">
                  <?php 
                      $proImgs=getAllImgByShangpinId($row['id']);
                      foreach($proImgs as $img):
                      ?>
                      <img src="../image_184/<?php echo $img['albumPath'];?>" alt=""/> &nbsp;&nbsp;
                      <?php endforeach;?>
                      <span class="clearfix">
                        <span class="shangpin-a fl"><?php echo $row['pName'];?></span>
                        <span class="shangpin-b fr">销售量（<?php echo $row['pNum'];?>）</span>
                      </span>
                </a>
              </li>
          <?php  endforeach;?>
            </ul>
            <div class="shangpin_right4">
          <?php if($totalRows>$pageSize):?>
            <span class="pages"><?php echo showPage($page, $totalPage,"keywords={$keywords}&order={$order}&shangpincate={$selectCate}");?></span>
           <?php endif;?>
          </div>
        </div>
    </div>
</div>
 <?php include("footer.php");?>
</body>
<script type="text/javascript">
  function search1(){
      var val=document.getElementById("search1").value;
            if (val.length>0) {
      window.location="zuixingshangxian.php?keywords="+val;
            }else{
                alert("对不起，不能为空！！！请重新输入");
                window.location="zuixingshangxian.php";
            }
  }
  function change(val){
    window.location="zuixingshangxian.php?order="+val;
  }
    function change1(val){
        window.location="zuixingshangxian.php?shangpincate="+val;
    }
</script>
</html>
</body>
</html>