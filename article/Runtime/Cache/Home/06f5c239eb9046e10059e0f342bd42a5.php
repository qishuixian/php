<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html><head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta content="pc,mobile" name="applicable-device">
<meta content="no-transform" http-equiv="Cache-Control">
<meta content="no-siteapp" http-equiv="Cache-Control">
<meta content="width=device-width" name="viewport">
<link href="/article/Public/css/style.css" media="screen" type="text/css" rel="stylesheet">
<script src="/article/Public/js/jquery.min.js"></script> 
<title>怀着一颗感恩之心出发，珍惜眼前一切，勇往直前！！！1</title><meta content="怀着一颗感恩之心出发，珍惜眼前一切，勇往直前" name="keywords">
<meta content="怀着一颗感恩之心出发，珍惜眼前一切，勇往直前。" name="description">
</head>
<body class="archive category category-philosophy-life category-18">
<div class="topbar">
	<div class="inner">
		<a title="怀着一颗感恩之心出发，珍惜眼前一切，勇往直前" href="" class="logo">璐在手中</a>
		<ul class="nav">
			<?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="menu-item menu-item-type-taxonomy menu-item-object-category" id="menu-item-180">
					<a href="/article/index.php/Home/List/index/typeid/<?php echo ($vo["id"]); ?>" title=" "><?php echo ($vo["typename"]); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
<div class="wrapper">
	<div class="content">

	<div class="meta">
		<h1 class="meta-tit"><?php echo ($articles["title"]); ?></h1>
		<p class="meta-info">发表：<a href="/"><?php echo ($articles["typename"]); ?></a> &nbsp;&nbsp; 发表日期：<?php echo (date("Y-m-h",$articles["time"])); ?> &nbsp;&nbsp; <span>评论关闭</span>&nbsp;&nbsp; </p>
	</div>




	<div class="entry">
		<p><img width="630" alt="<?php echo ($articles["title"]); ?>" src="/article<?php echo ($articles["pic"]); ?>" class="aligncenter size-full wp-image-38074"></p>
		<p><?php echo ($articles["desc"]); ?></p>
	</div>

	<!-- <div>文章版权属于文章作者所有，转载请注明：<a href=" /38073.html " title=" <?php echo ($articles["title"]); ?> " rel="bookmark">/38073.html</a></div> 
 -->


	<!-- 广告代码 -->
	<!-- 百度推荐 -->



	</div>
<div class="sidebar">
	
	<div class="widget widget_categories">
		<h3 class="widget-tit">文章分类</h3>		
		<ul>
			<?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cat-item cat-item-18 current-cat">
					<a title="<?php echo ($vo["typename"]); ?> " href="/article/index.php/Home/List/index/typeid/<?php echo ($vo["id"]); ?>"><?php echo ($vo["typename"]); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>		
	<div class="widget widget_recent_entries">		
		<h3 class="widget-tit">最新发表</h3>		
		<ul>
			<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><li>
					<a href="/article/index.php/Home/Article/index/id/<?php echo ($vo2["id"]); ?>"><?php echo ($vo2["title"]); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>

</div>
<div class="footer">
	<div class="inner">
		
		<div class="copyright">
			<a href="javascrip:;">系方式qq：1960338340@qq.com </a>
			<a href="javascrip:;">系方式call：13726928640 </a>  
		</div>
	</div>
</div>
</body>
</html>