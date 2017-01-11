<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
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
	<!-- 分享代码 --><!-- 分享代码 -->	
	<ul class="excerpt thumb">
	    <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				<a class="pic" href="/article/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>">
					<img alt="<?php echo ($vo["title"]); ?>" src="/article<?php echo ($vo["pic"]); ?>">
				</a>			
				<h2 class="excerpt-tit">
					<a href="/article/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
				</h2>
				<p class="excerpt-desc">
					<?php echo (substr($vo["desc"],0,300)); ?>.....			
				</p>
		        <div class="excerpt-time">
					<?php echo (date("Y-m-h",$vo["time"])); ?>			
				</div>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>		
	</ul>
	<div class="paging">
		<!-- <span class="current">1</span> 
		<a title="第 2 页" href="/category/philosophy-life/page/2">2</a> 
		<a title="第 3 页" href="/category/philosophy-life/page/3">3</a> 
		<a title="第 4 页" href="/category/philosophy-life/page/4">4</a> 
		<a title="第 5 页" href="/category/philosophy-life/page/5">5</a> 
		<span class="dots"> ... </span>
		<a title="»" href="/category/philosophy-life/page/57">57</a> 
		<a href="/category/philosophy-life/page/2">&gt;</a> -->
		 <?php echo ($page); ?>
	</div>

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