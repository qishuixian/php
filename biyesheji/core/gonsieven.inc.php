<?php 
/**
 * 添加公司事记相关信息
 * @return string
 */
function addgonsieven(){
	$arr=$_POST;
	if(insert("gonsieven",$arr)){
		$mes="公司事记相关信息添加成功!<br/><a href='addgonsieven.php'>继续添加</a>|<a href='lisgonsieven.php'>查看公司事记相关信息</a>";
	}else{
		$mes="公司事记相关信息添加失败！<br/><a href='addgonsieven.php'>重新添加</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定公司事记相关信息活动
 * @param int $id
 * @return array
 */
function getgonsievenById($id){
	$sql="select id,content from gonsieven where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改公司事记相关信息的操作
 * @param string $where
 * @return string
 */
function editgonsieven($where){
	$arr=$_POST;
	if(update("gonsieven", $arr,$where)){
		$mes="公司事记相关信息修改成功!<br/><a href='lisgonsieven.php'>查看公司事记</a>";
	}else{
		$mes="公司事记相关信息修改失败!<br/><a href='lisgonsieven.php'>重新修改</a>";
	}
	return $mes;
}

// *
//  *删除公司事记相关信息
//  * @param string $where
//  * @return string
 
function delgonsieven($id){
	if(delete("gonsieven","id={$id}")){
		$mes="公司事记相关信息删除成功!<br/><a href='lisgonsieven.php'>查看公司事记相关信息</a>|<a href='addgonsieven.php'>添加公司事记相关信息</a>";
	}else{
		$mes="删除失败！<br/><a href='lisgonsieven.php'>请重新操作</a>";
	}
	return $mes;
}
/**
 * 得到所有活动
 * @return array
 */
function getAllgonsieven(){
	$sql="select id,content from gonsieven";
	$rows=fetchAll($sql);
	return $rows;
}



