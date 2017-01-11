<?php 
require_once '../include.php';
checkLogined();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>湛江是顺南贸易有限公司后台管理系统</title>
<link rel="stylesheet" href="styles/backstage.css">
</head>

<body>
    <div class="head">
            <h3 class="head_text fl">湛江是顺南贸易有限公司后台管理系统</h3>
    </div>
    <div class="operation_user clearfix">
       <!--   <div class="link fl"><a href="#">慕课</a><span>&gt;&gt;</span><a href="#">商品管理</a><span>&gt;&gt;</span>商品修改</div>-->
        <div class="link fr">
            <b>欢迎您
            <?php 
				if(isset($_SESSION['adminName'])){
					echo $_SESSION['adminName'];
				}elseif(isset($_COOKIE['adminName'])){
					echo $_COOKIE['adminName'];
				}
            ?>
            
            </b><a href="doAdminAction.php?act=logout" class="icon icon_e">退出</a>
        </div>
    </div>
    <div class="content clearfix">
        <div class="main">
            <!--右侧内容-->
            <div class="cont">
                <div class="title">后台管理</div>
      	 		<!-- 嵌套网页开始 -->         
                <iframe src="main.php"  frameborder="0" name="mainFrame" width="100%" style="min-height: 522px;"></iframe>
                <!-- 嵌套网页结束 -->   
            </div>
        </div>
        <!--左侧列表-->
        <div class="menu">
            <div class="cont">
                <div class="title">管理员</div>
                <ul class="mList">
                    <li>
                        <h3><span onclick="show('menu1','change1')" id="change1">+</span>管理员管理</h3>
                        <dl id="menu1" style="display:none;">
                        	<dd><a href="addAdmin.php" target="mainFrame">添加管理员</a></dd>
                            <dd><a href="listAdmin.php" target="mainFrame">管理员列表</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span onclick="show('menu2','change2')" id="change2">+</span>首页的焦点图</h3>
                        <dl id="menu2" style="display:none;">
                            <dd><a href="addJdtuku.php" target="mainFrame">添加首页的焦点图</a></dd>
                            <dd><a href="lisJdtuku.php" target="mainFrame">查看首页的焦点图</a></dd>
                        </dl>
                    </li>
                     <li>
                        <h3><span onclick="show('menu3','change3')" id="change3">+</span>合作商家</h3>
                        <dl id="menu3" style="display:none;">
                            <dd><a href="addshangjia.php" target="mainFrame">添加合作商家</a></dd>
                            <dd><a href="lisshangjia.php" target="mainFrame">查看合作商家</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span onclick="show('menu4','change4')" id="change4">+</span>人才战略</h3>
                        <dl id="menu4" style="display:none;">
                            <dd><a href="addrencai.php" target="mainFrame">添加人才战略</a></dd>
                            <dd><a href="lisrencai.php" target="mainFrame">查看人才战略</a></dd>
                            <dd><a href="addZhaopin.php" target="mainFrame">添加招聘信息</a></dd>
                             <dd><a href="lisZhaopin.php" target="mainFrame">查看招聘信息</a></dd>
                             <dd><a href="addrencaishenghuo.php" target="mainFrame">添加精彩生活</a></dd>
                            <dd><a href="lisrencaishenghuo.php" target="mainFrame">查看精彩生活</a></dd>
                            <dd><a href="addrencaifazhan.php" target="mainFrame">添加发展空间</a></dd>
                            <dd><a href="lisrencaifazhan.php" target="mainFrame">查看发展空间</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span onclick="show('menu5','change5')" id="change5">+</span>公司简介</h3>
                        <dl id="menu5" style="display:none;">
                            <dd><a href="addgonsi.php" target="mainFrame">添加公司概况</a></dd>
                            <dd><a href="lisgonsi.php" target="mainFrame">查看公司概况</a></dd>
                            <dd><a href="addgonsiwenhua.php" target="mainFrame">添加公司文化</a></dd>
                             <dd><a href="lisgonsiwenhua.php" target="mainFrame">查看公司文化</a></dd>
                             <dd><a href="addgonsironyi.php" target="mainFrame">添加公司荣誉</a></dd>
                            <dd><a href="lisgonsironyi.php" target="mainFrame">查看公司荣誉</a></dd>
                            <dd><a href="addShunnan.php" target="mainFrame">添加行业新闻</a></dd>
                            <dd><a href="lisShunnan.php" target="mainFrame">查询行业新闻</a></dd>
                            <dd><a href="addHuodon.php" target="mainFrame">添加公司新闻</a></dd>
                            <dd><a href="lisHuodon.php" target="mainFrame">查看公司新闻</a></dd>
                            <dd><a href="addgonsieven.php" target="mainFrame">添加促公司事记</a></dd>
                            <dd><a href="lisgonsieven.php" target="mainFrame">查看公司事记</a></dd>
                        </dl>
                    </li>
                   <!--  <li>
                        <h3><span onclick="show('menu6','change6')" id="change6">+</span>互动专区</h3>
                        <dl id="menu6" style="display:none;">
                            <dd><a href="addHudon.php" target="mainFrame">添加在线留言</a></dd>
                            <dd><a href="lisHudon.php" target="mainFrame">查看在线留言</a></dd>
                            <dd><a href="listJianyi.php" target="mainFrame">查看投诉建议</a></dd>
                        </dl>
                    </li> -->
                    <li>
                        <h3><span onclick="show('menu7','change7')" id="change7">+</span>商品分类管理</h3>
                        <dl id="menu7" style="display:none;">
                            <dd><a href="addShangpinCate.php" target="mainFrame">添加商品分类</a></dd>
                            <dd><a href="listShangpinCate.php" target="mainFrame">商品分类列表</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span onclick="show('menu8','change8')" id="change8">+</span>商品管理</h3>
                        <dl id="menu8" style="display:none;">
                            <dd><a href="addShangpin.php" target="mainFrame">添加商品</a></dd>
                            <dd><a href="lisShangpin.php" target="mainFrame">商品列表</a></dd>
                        </dl>
                    </li>
                    <!-- <li>
                        <h3><span onclick="show('menu9','change9')" id="change9">+</span>顺南商品图片管理</h3>
                        <dl id="menu9" style="display:none;">
                            <dd><a href="listShunnanImages.php" target="mainFrame">顺南商品图片列表</a></dd>
                        </dl>
                    </li> -->
                    <li>
                        <h3><span onclick="show('menu15','change15')" id="change15">+</span>联系我们</h3>
                        <dl id="menu15" style="display:none;">
                             <dd><a href="addMe.php" target="mainFrame">添加联系我们</a></dd>
                            <dd><a href="lisMe.php" target="mainFrame">查看联系我们</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <script type="text/javascript">
    	function show(num,change){
	    		var menu=document.getElementById(num);
	    		var change=document.getElementById(change);
	    		if(change.innerHTML=="+"){
	    				change.innerHTML="-";
	        	}else{
						change.innerHTML="+";
	            }
    		   if(menu.style.display=='none'){
    	             menu.style.display='';
    		    }else{
    		         menu.style.display='none';
    		    }
        }
    </script>
</body>
</html>