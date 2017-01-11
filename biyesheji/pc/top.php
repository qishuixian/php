<!--头部-->
<?php 
  session_start();
  require_once '../include.php';
?>
  <a href="#" name="namea"></a>
	<div class="header">
  	<div class="logo">
      	<span class="logo_1"><img src="images/logo.gif" width="72" height="74" /></span>
        <span class="logo_2"><img src="images/ziti_03.gif" width="224" height="18" /></span>
    </div>
    <div class="header_right">
    	<p>
        <span class="header_ziti">商品关键字</span>
      	<input name="商品关键字" type="text" style="width:162px; height:23px;" value=""  class="search"  id="search">
        <input name="搜索" type="submit" value="搜索" style="background-color:#5a5aff;width:65px; height:25px;" onclick="search()" />
      </p>
      <div id="menu">
  				<ul>
             <li id="m_1" class='m_li_a qw'><a href="index.php" target="_blank">首页</a></li>
            <li id="m_2" class='m_li' onmouseover='mover(2);' onmouseout='mout(2);'><a href="gonsi.php" target="_blank">公司简介</a></li>
            <li id="m_3" class='m_li' onmouseover='mover(3);' onmouseout='mout(3);'><a href="shangpinall.php" target="_blank">商品展示</a></li>
            <li id="m_4" class='m_li' onmouseover='mover(4);' onmouseout='mout(4);'><a href="rencai.php" target="_blank">人才招聘</a></li>
            <li id="m_5" class='m_li' onmouseover='mover(5);' onmouseout='mout(5);'><a href="hudon.php" target="_blank">互动专区</a></li>
            <li id="m_6" class='m_li_a'><a href="me.php" target="_blank">联系我们</a></li>
          </ul>
		  </div>
      <div  id="as" class="as">
        <ul class="smenu">
             <li  id="s_2" class='s_li' onmouseover='mover(2);' onmouseout='mout(2);'><a href="gonsi.php" target="_blank">公司概况</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="gonsiwenhua.php" target="_blank">公司文化</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="gonsironyi.php" target="_blank">公司荣誉</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="gonsishunnan.php" target="_blank">行业新闻</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="gonsicuxiao.php" target="_blank">公司新闻</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="gonsieven.php" target="_blank">公司事记</a></li>
         <li style="padding-left:56px;" id="s_3" class='s_li' onmouseover='mover(3);' onmouseout='mout(3);'><a href="shangpinall.php" target="_blank">商品全部 </a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="zuixingshangxian.php" target="_blank">最新上线商品</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="rexiao.php" target="_blank">热销商品</a>
         <li style="padding-left:200px;" id="s_4" class='s_li' onmouseover='mover(4);' onmouseout='mout(4);'><a href="rencai.php" target="_blank">人才战略</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="rencaizhaopin.php" target="_blank">人才招聘</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="rencaishenghuo.php" target="_blank">精彩生活</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="rencaifazhan.php" target="_blank">发展空间</a></li>
  			</ul>
	    </div>
    </div>
  </div>
    <!--首页的焦点图-->
  <div class="banner-img">
   <!-- 轮播图 -->
    <div class="sliderBox fl" id="sliderIndex">
        <ul class="picBox">
          <?php
            //得到数据库中所有商品
            $sql="select * from jdtuku where status like '%是%' order by time desc limit 0,5";
             if($sql){
              $rows=fetchAll($sql);
              if(!$rows){  
                 echo "对不起，没有相关的图片";
                 exit();
              }
            }
            else{
              echo "对不起，没有相关的图片";
            }
          ?>
            <?php foreach($rows as $row):?>
            <li>
                <a href="<?php echo $row['href']; ?>" target="_blank">
                <?php 
                  $proImgs=getAllImgByJdtukuId($row['id']);
                  foreach($proImgs as $img):
                ?>
                  <img src="../Jdtuku/<?php echo $img['albumPath'];?>" alt="<?php echo $row['title']; ?>"/>
                   <?php endforeach;?>
                  <span class="img-hover"></span>
                </a>
                <i class="it-text-cover"></i>
                <div class="txtBox">
                    <a href="<?php echo $row['href']; ?>" class="text-hide"><?php echo $row['title']; ?></a>
                </div>
            </li>
            <?php  endforeach;?>
        </ul>
        <ul class="hd"></ul>
    </div>
  </div>
  <script type="text/javascript">
    function search(){
          var val=document.getElementById("search").value;
          if (val.length>0) {
          window.location="searchShangpin.php?keywords="+val;
          }else{
              alert("对不起，不能为空！！！请重新输入");
          }
      }
  </script>