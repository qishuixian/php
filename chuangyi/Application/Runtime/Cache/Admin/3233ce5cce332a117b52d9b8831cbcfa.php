<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	margin-left: 3px;
	margin-top: 0px;
	margin-right: 3px;
	margin-bottom: 0px;
}
.STYLE1 {
	color: #e1e2e3;
	font-size: 12px;
}
.STYLE6 {color: #000000; font-size: 12; }
.STYLE10 {color: #000000; font-size: 12px; }
.STYLE19 {
	color: #344b50;
	font-size: 12px;
}
.STYLE21 {
	font-size: 12px;
	color: #3b6375;
}
.STYLE22 {
	font-size: 12px;
	color: #295568;
}
a{color: #3b6375; text-decoration:none;}
a span{ color:#fff;}

-->
</style>
<script>
var  highlightcolor='#d5f4fe';
//此处clickcolor只能用win系统颜色代码才能成功,如果用#xxxxxx的代码就不行,还没搞清楚为什么:(
var  clickcolor='#51b2f6';
function  changeto(){
source=event.srcElement;
if  (source.tagName=="TR"||source.tagName=="TABLE")
return;
while(source.tagName!="TD")
source=source.parentElement;
source=source.parentElement;
cs  =  source.children;
//alert(cs.length);
if  (cs[1].style.backgroundColor!=highlightcolor&&source.id!="nc"&&cs[1].style.backgroundColor!=clickcolor)
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor=highlightcolor;
}
}

function  changeback(){
if  (event.fromElement.contains(event.toElement)||source.contains(event.toElement)||source.id=="nc")
return
if  (event.toElement!=source&&cs[1].style.backgroundColor!=clickcolor)
//source.style.backgroundColor=originalcolor
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor="";
}
}

function  clickto(){
source=event.srcElement;
if  (source.tagName=="TR"||source.tagName=="TABLE")
return;
while(source.tagName!="TD")
source=source.parentElement;
source=source.parentElement;
cs  =  source.children;
//alert(cs.length);
if  (cs[1].style.backgroundColor!=clickcolor&&source.id!="nc")
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor=clickcolor;
}
else
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor="";
}
}
</script>
<script type="text/javascript" src="<?php echo ADMIN_PUC; ?>js/jquery.js"></script>
</head>

<body>
<form method="post" action="/chuangyi/index.php/Admin/Article/bdel">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="<?php echo ADMIN_PUC;?>images/tb.gif" width="14" height="14" /></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1"> 文章列表</span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1">
              <input type="checkbox" name="checkbox11" id="checkbox11" />
              全选      &nbsp;&nbsp;<img src="<?php echo ADMIN_PUC;?>images/add.gif" width="10" height="10" /> <a href="/chuangyi/index.php/Admin/Article/add"><span>添加</span></a>   &nbsp; <img src="<?php echo ADMIN_PUC;?>images/del.gif" width="10" height="10" /> 删除    &nbsp;&nbsp;<img src="<?php echo ADMIN_PUC;?>images/edit.gif" width="10" height="10" /> 编辑   &nbsp;</span><span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" onmouseover="changeto()"  onmouseout="changeback()">
      <tr>
        <td width="4%" height="20" bgcolor="d3eaef" class="STYLE10"><div align="center">
          <input type="checkbox" name="checkbox" id="selall"  class="selall" />
        </div></td>
        <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">文章id</span></div></td>
        <td width="20%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">文章标题</span></div></td>
        <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">作者</span></div></td>
        <td width="14%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">缩略图</span></div></td>
        <td width="14%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">是否推荐</span></div></td>
        <td width="16%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">所属栏目</span></div></td>
        <td width="14%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">基本操作</span></div></td>
      </tr>
   	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" class="selall" name="bdel[]" value="<?php echo ($vo["ar_id"]); ?>" />
        </div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="center"><span class="STYLE19"><?php echo ($vo["ar_id"]); ?></span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19" align="left" style="padding-left:5px;"><?php echo str_repeat('-',$vo[level]*8); echo ($vo["ar_title"]); ?></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="center"><span class="STYLE19"><?php echo ($vo["ar_author"]); ?></span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">
        <?php if($vo[ar_pic] != ''): ?><img src="/chuangyi<?php echo ($vo["ar_pic"]); ?>" height="50" />
        <?php else: ?> 
        暂无缩略图<?php endif; ?>
        </div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="center">
        <span class="STYLE19"><?php if($vo[ar_rem] == 1): ?>已推荐<?php else: ?>未推荐<?php endif; ?></span>
        </div></td>
          <td height="20" bgcolor="#FFFFFF" class="STYLE19">
            <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><div align="center"><?php if($vo[ar_cateid] == $vo1[cate_id]): echo ($vo1["cate_name"]); endif; ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
          </td>
        <td height="20" bgcolor="#FFFFFF"><div align="center" class="STYLE21"><a href="/chuangyi/index.php/Admin/Article/edit/ar_id/<?php echo ($vo["ar_id"]); ?>">修改</a> | <a href="/chuangyi/index.php/Admin/Article/shanchu/ar_id/<?php echo ($vo["ar_id"]); ?>" onclick="return confirm('您确定要删除该文章吗？');">删除</a></div></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      
    </table></td>
  </tr>
  <tr><td align="left"><input onclick="return confirm('您确定要删除这些文章吗？');" type="submit" value="删除选中" /></td></tr>
  <tr><td align="left"><?php echo ($page); ?></td></tr>
</table>
</form>
</body>
</html>
<script>
$("#selall").click(function(){
    if($(this).attr("checked")){
		$(".selall").attr("checked","checked");
	}else{
		$(".selall").removeAttr("checked");
	}

})
</script>