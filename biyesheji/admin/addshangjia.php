<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<?php 
require_once '../include.php';
checkLogined();
?>
<body>
<h3>添加用户</h3>
<form action="doAdminAction.php?act=addshangjia" method="post" enctype="multipart/form-data">
<table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td align="right">商家图标题</td>
		<td><input type="text" name="title" placeholder="请输入商家图标题"/></td>
	</tr>
	<tr>
		<td align="right">图像</td>
		<td><input type="file" name="tuku" /></td>
	</tr>
	<tr>
		<td align="right">是否上线</td>
		<td><input type="radio" name="status"  value="是" />是<input type="radio" name="status"  value="否" />否</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit"  value="商家图"/></td>
	</tr>

</table>
</form>
</body>
</html>