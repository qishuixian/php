<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<base target="_self" />
<meta charset="UTF-8">
<title>创宜生物</title>
<link type="text/css" rel="stylesheet" href="<?php echo ADMIN_PC;?>style/style.css" />
<script type="text/javascript" src="<?php echo ADMIN_PC;?>style/jquery-1.8.0.min.js"></script>
</head>
<body>
<div id="header">
    <div class="layout">
	    <div id="nav">
	        <div class="nav">
	        	<ul>
	        	<li class="mnav"><a href="/chuangyi/index.php" class="mnava <?php if($index): ?>foucs<?php endif; ?>" ><p>网站首页</p><p class="en">Home</p></a>
					</li>
	        		<?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li class="mnav"><a href="/chuangyi/index.php/Home/<?php if($data[cate_type] == 1): ?>Lst<?php else: ?>Page<?php endif; ?>/index/cate_id/<?php echo ($data["cate_id"]); ?>" class='mnava'><p><?php echo ($data["cate_name"]); ?></p><p class='en'><?php echo ($data["cate_ename"]); ?></p></a>
		         			<ul class="smenu">
		          				<?php $_result=getSub($data[cate_id]);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
						             <a href="/chuangyi/index.php/Home/Lst/index/cate_id/<?php echo ($data["cate_id"]); ?>"><?php echo ($data["cate_name"]); ?></a>
						            </li><?php endforeach; endif; else: echo "" ;endif; ?>
					        </ul>
					    </li><?php endforeach; endif; else: echo "" ;endif; ?>
	            </ul>
	        </div>
	    </div>
	    <div class="logo">
	      <a href="#"></a>
	    </div>
	</div>
</div>
<script>
	// $(document).ready(function(){
	// 	$('.nav .mnav').each(function() {
	// 		var curcurl = window.location.href;
	// 		var hrefs=$(this).find('.mnava').attr('href');
	// 		if (curcurl.indexOf(hrefs)) {
	// 			$(this).find('.mnava').addClass('foucs').siblings().removeClass('foucs');
	// 		}else{
	// 			$(this).find('.mnava').removeClass('foucs');
	// 		}
	// 	});

	// })
</script>
<div id="full-screen-slider-sec">
	<div class="layout">
      <div class="page-title">
       <?php echo ($catetop["cate_name"]); ?> 
      </div>
    </div> 
</div>
<div class="main">
   <div class="layout cnt2">
     <div class="left">
        <ul>
         <?php if(is_array($cateson)): $i = 0; $__LIST__ = $cateson;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a <?php if($vo['cate_id'] == I('cate_id')): ?>class="foucs"<?php endif; ?> href="/chuangyi/index.php/Home/Lst/index/cate_id/<?php echo ($vo["cate_id"]); ?>"><?php echo ($vo["cate_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
         
        </ul>
     </div>
     <div class="right">
        <h1>
           <div class="page">
             <a href='/chuangyi/index.php'>网站首页</a>
             <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>><a href="<?php if($vo['cate_type'] == 0): ?>/chuangyi/index.php/Home/Page/index/cate_id/<?php echo ($vo["cate_id"]); ?>/<?php else: ?>javascript:;<?php endif; ?>"><?php echo ($vo["cate_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
           </div>
           <?php echo ($cateself["cate_name"]); ?>
        </h1>
        <div class="cnt-in">
         <div class="news-list-wimg">
            <ul>
              <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                  <h3> <a href="/chuangyi/index.php/Home/Article/index/ar_id/<?php echo ($vo["ar_id"]); ?>/"><?php echo ($vo["ar_title"]); ?></a></h3>
                  <p>
                  <img src="<?php if($vo['ar_pic'] != ''): ?>/chuangyi/<?php echo ($vo["ar_pic"]); else: ?>/chuangyi/Public/images/no.png<?php endif; ?> " width="120" height="90" style="float:left; margin-right:15px;"><?php echo (substr($vo["ar_content"],0,30)); ?>
                    <span class="list-date"><?php echo (date("y-m-d",$vo["ar_time"])); ?></span>
                  </p>  
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
              <?php echo ($page); ?>
            </ul>
         </div>
          
            <div class="pages">
              
            </div>
        </div>
     </div>
     <div class="clr"></div>
   </div>
</div>
<div id="footer">
  <div class="layout footer">
    <div class="footer-info">
      <p>Copyright &copy; 2015  Chengdu  origissay  Diagnostics,LTD     技术支持：博海天韵 <a href=http://www.dedecms.com target='_blank'></a>  蜀ICP12007941 </p>
    </div>
    <div class="footer-nav">
        <ul>
          <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
              <a href="/chuangyi/index.php/Home/<?php if($data[cate_type] == 1): ?>Lst<?php else: ?>Page<?php endif; ?>/index/cate_id/<?php echo ($data["cate_id"]); ?>" class=''><?php echo ($data["cate_name"]); ?></a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>   
    <div class="clr"></div>
  </div>
</div>
</body>
</html>