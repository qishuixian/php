<?php if (!defined('THINK_PATH')) exit();?><!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <meta http-equiv=pragma content=no-cache />
        <meta http-equiv=cache-control content=no-cache />
        <meta http-equiv=expires content=-1000 />
        
        <title>管理中心 v1.0</title>
    </head>
    <!--  /article/index.php/Admin/Index :CONTROLLER会替换当前控制器的地址<br/>
     /article ：ROOT会替换当前网站的URL地址<br/>
     /article/index.php :APP会替换当前应用的URL地址<br/>
     /article/index.php/Admin:MODULE会替换成当前模块的url地址<br/>
     /article/index.php/Admin/Index/index  :ACTTON会替换成操作的URL地址<br/>
     /article/index.php/Admin/Index/index.html：SELF 会替换成当前的页面URL<br/>
     /article/Public：PUBLIC会被替换成当前网站的公共目录 通常是 /Public/<br/> -->
    <frameset border=0 framespacing=0 rows="60, *" frameborder=0>
        <frame name=head src="/article/index.php/Admin/Index/head/" frameborder=0 noresize scrolling=no>
            <frameset cols="170, *">
                <frame name=left src="/article/index.php/Admin/Index/left/" frameborder=0 noresize />
                <frame name=main src="/article/index.php/Admin/Index/right/" frameborder=0 noresize scrolling=yes />
            </frameset>
    </frameset>
    <noframes>
    </noframes>
</html>