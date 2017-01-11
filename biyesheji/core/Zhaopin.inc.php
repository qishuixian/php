<?php 
/**
 * 添加顺南招聘信息
 * @return string
 */
function addZhaopin(){
	$arr=$_POST;
	$arr['time']=date('Y-m-d');
	if(insert("zhaopin",$arr)){
		$mes="顺南招聘信息添加成功!<br/><a href='addZhaopin.php'>继续添加</a>|<a href='lisZhaopin.php'>查看顺南招聘信息</a>";
	}else{
		$mes="顺南招聘信息添加失败！<br/><a href='addZhaopin.php'>重新添加</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定顺南招聘信息招聘信息
 * @param int $id
 * @return array
 */
function getZhaopinById($id){
	$sql="select id,title,content,time from zhaopin where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改顺南招聘信息的操作
 * @param string $where
 * @return string
 */
function editZhaopin($where){
	$arr=$_POST;
	if(update("Zhaopin", $arr,$where)){
		$mes="顺南招聘信息修改成功!<br/><a href='lisZhaopin.php'>招聘信息</a>";
	}else{
		$mes="顺南招聘信息修改失败!<br/><a href='lisZhaopin.php'>重新修改</a>";
	}
	return $mes;
}

// *
//  *删除顺南招聘信息
//  * @param string $where
//  * @return string
 
function delZhaopin($id){
	if(delete("zhaopin","id={$id}")){
		$mes="顺南招聘信息删除成功!<br/><a href='lisZhaopin.php'>查看顺南招聘信息</a>|<a href='addZhaopin.php'>添加顺南招聘信息</a>";
	}else{
		$mes="删除失败！<br/><a href='lisZhaopin.php'>请重新操作</a>";
	}
	return $mes;
}
/**
 * 得到所有招聘信息
 * @return array
 */
function getAllZhaopin(){
	$sql="select id,title,content,time from zhaopin";
	$rows=fetchAll($sql);
	return $rows;
}



