<?php 
/**
 * 添加联系我们相关信息
 * @return string
 */
function addMe(){
	$arr=$_POST;
	if(insert("me",$arr)){
		$mes="联系我们相关信息添加成功!<br/><a href='addMe.php'>继续添加</a>|<a href='lisMe.php'>查看联系我们相关信息</a>";
	}else{
		$mes="联系我们相关信息添加失败！<br/><a href='addMe.php'>重新添加</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定联系我们相关信息活动
 * @param int $id
 * @return array
 */
function getMeById($id){
	$sql="select id,content from me where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改联系我们相关信息的操作
 * @param string $where
 * @return string
 */
function editMe($where){
	$arr=$_POST;
	if(update("me", $arr,$where)){
		$mes="联系我们相关信息修改成功!<br/><a href='lisMe.php'>查看联系我们</a>";
	}else{
		$mes="联系我们相关信息修改失败!<br/><a href='lisMe.php'>重新修改</a>";
	}
	return $mes;
}

// *
//  *删除联系我们相关信息
//  * @param string $where
//  * @return string
 
function delMe($id){
	if(delete("me","id={$id}")){
		$mes="联系我们相关信息删除成功!<br/><a href='lisMe.php'>查看联系我们相关信息</a>|<a href='addMe.php'>添加联系我们相关信息</a>";
	}else{
		$mes="删除失败！<br/><a href='lisMe.php'>请重新操作</a>";
	}
	return $mes;
}
/**
 * 得到所有活动
 * @return array
 */
function getAllMe(){
	$sql="select id,content from me";
	$rows=fetchAll($sql);
	return $rows;
}



