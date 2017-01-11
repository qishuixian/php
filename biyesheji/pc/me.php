<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>湛江市顺南贸易有限公司</title>
<link href="style/base.css" rel="stylesheet" type="text/css" />
<link href="style/me.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/banerImg.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
</head>
<body>
<?php
require_once '../include.php';
if($as){
 header("location:../mobile/me.php");
}
?>
<?php 
include("top.php");
?>
<div class="me_3">
    <span class="me3_1"><img src="images/me_01.gif" width="112" height="25" /></span>
    <span class="me3_2">您当前的位置：<a href="index.php">首页</a>>><a href="me.php">联系我们</a></span>
</div>
<div class="me_4" style="margin-top:70px; margin-bottom:20px;">
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
  <!--百度地图容器-->
  <div style="width:1010px;height:350px;border:#ccc solid 1px;" id="dituContent"></div>
    <script type="text/javascript">
        //创建和初始化地图函数：
        function initMap(){
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
            addMarker();//向地图中添加marker
        }
        
        //创建地图函数：
        function createMap(){
            var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
            var point = new BMap.Point(110.39291,21.309022);//定义一个中心点坐标
            map.centerAndZoom(point,15);//设定地图的中心点和坐标并将地图显示在地图容器中
            window.map = map;//将map变量存储在全局
        }
        
        //地图事件设置函数：
        function setMapEvent(){
            map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
            map.enableScrollWheelZoom();//启用地图滚轮放大缩小
            map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
            map.enableKeyboard();//启用键盘上下左右键移动地图
        }
        
        //地图控件添加函数：
        function addMapControl(){
            //向地图中添加缩放控件
      var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(ctrl_nav);
            //向地图中添加缩略图控件
      var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
      map.addControl(ctrl_ove);
            //向地图中添加比例尺控件
      var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      map.addControl(ctrl_sca);
        }
        
        //标注点数组
        var markerArr = [{title:"湛江市顺南贸易有限公司",content:"我的备注",point:"110.390287|21.30525",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
         ];
        //创建marker
        function addMarker(){
            for(var i=0;i<markerArr.length;i++){
                var json = markerArr[i];
                var p0 = json.point.split("|")[0];
                var p1 = json.point.split("|")[1];
                var point = new BMap.Point(p0,p1);
          var iconImg = createIcon(json.icon);
                var marker = new BMap.Marker(point,{icon:iconImg});
          var iw = createInfoWindow(i);
          var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
          marker.setLabel(label);
                map.addOverlay(marker);
                label.setStyle({
                            borderColor:"#808080",
                            color:"#333",
                            cursor:"pointer"
                });
          
          (function(){
            var index = i;
            var _iw = createInfoWindow(i);
            var _marker = marker;
            _marker.addEventListener("click",function(){
                this.openInfoWindow(_iw);
              });
              _iw.addEventListener("open",function(){
                _marker.getLabel().hide();
              })
              _iw.addEventListener("close",function(){
                _marker.getLabel().show();
              })
            label.addEventListener("click",function(){
                _marker.openInfoWindow(_iw);
              })
            if(!!json.isOpen){
              label.hide();
              _marker.openInfoWindow(_iw);
            }
          })()
            }
        }
        //创建InfoWindow
        function createInfoWindow(i){
            var json = markerArr[i];
            var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
            return iw;
        }
        //创建一个Icon
        function createIcon(json){
            var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
            return icon;
        }
        initMap();//创建和初始化地图
    </script>
  <div style="margin-top: 20px;"> 
    <?php 
      // require_once '../include.php';
      $sql=mysql_query("select * from me");
      $me=mysql_fetch_array($sql);
      if($me){
        do{
    ?>
    <dl>
      <dt>
        <?php echo $me['content'];?>
      </dt>
    </dl>
    <?php
        }while($me=mysql_fetch_array($sql));
        }else{
        ?>
          <h3>对不起，没有相关信息</h3>
        <?php
    }
    ?>
  </div>
</div>
 <?php include("footer.php");?>
</body>
</html>
</body>
</html>
