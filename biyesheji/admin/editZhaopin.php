<?php 
require_once '../include.php';
$id=$_REQUEST['id'];
$row=getZhaopinById($id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script type="text/javascript" charset="utf-8" src="../plugins/kindeditor/kindeditor.js"></script>
<script type="text/javascript" charset="utf-8" src="../plugins/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="./scripts/jquery-1.6.4.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
        $(document).ready(function(){
        	$("#selectFileBtn").click(function(){
        		$fileField = $('<input type="file" name="thumbs[]"/>');
        		$fileField.hide();
        		$("#attachList").append($fileField);
        		$fileField.trigger("click");
        		$fileField.change(function(){
        		$path = $(this).val();
        		$filename = $path.substring($path.lastIndexOf("\\")+1);
        		$attachItem = $('<div class="attachItem"><div class="left">a.gif</div><div class="right"><a href="#" title="删除附件">删除</a></div></div>');
        		$attachItem.find(".left").html($filename);
        		$("#attachList").append($attachItem);		
        		});
        	});
        	$("#attachList>.attachItem").find('a').live('click',function(obj,i){
        		$(this).parents('.attachItem').prev('input').remove();
        		$(this).parents('.attachItem').remove();
        	});
        });
</script>
</head>
<body>
<h3>修改顺南招聘</h3>
<form action="doAdminAction.php?act=editZhaopin&id=<?php echo $id;?>" method="post">
<table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td align="right">顺南招聘职位</td>
		<td><input type="text" name="title" placeholder="<?php echo $row['title'];?>"/></td>
	</tr>
	<tr>
		<td align="right">顺南招聘内容</td>
		<td><textarea name="content" id="editor_id" style="width:228px;height:150px;" placeholder="<?php echo $row['content'];?>"></textarea></td>
	</tr>
	<tr>
		<td align="right">顺南招聘时间</td>
		<td><input type="date" name="time" placeholder="<?php echo $row['time'];?>"/></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit"  value="修改顺南招聘"/></td>
	</tr>

</table>
</form>
</body>
</html>