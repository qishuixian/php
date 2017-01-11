<?php 
/**
 * 添加公司荣誉相关信息
 * @return string
 */
function addgonsironyi(){
	$arr=$_POST;
	if(insert("gonsironyi",$arr)){
		$mes="公司荣誉相关信息添加成功!<br/><a href='addgonsironyi.php'>继续添加</a>|<a href='lisgonsironyi.php'>查看公司荣誉相关信息</a>";
	}else{
		$mes="公司荣誉相关信息添加失败！<br/><a href='addgonsironyi.php'>重新添加</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定公司荣誉相关信息活动
 * @param int $id
 * @return array
 */
function getgonsironyiById($id){
	$sql="select id,content from gonsironyi where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改公司荣誉相关信息的操作
 * @param string $where
 * @return string
 */
function editgonsironyi($where){
	$arr=$_POST;
	if(update("gonsironyi", $arr,$where)){
		$mes="公司荣誉相关信息修改成功!<br/><a href='lisgonsironyi.php'>查看公司荣誉</a>";
	}else{
		$mes="公司荣誉相关信息修改失败!<br/><a href='lisgonsironyi.php'>重新修改</a>";
	}
	return $mes;
}

// *
//  *删除公司荣誉相关信息
//  * @param string $where
//  * @return string
 
function delgonsironyi($id){
	if(delete("gonsironyi","id={$id}")){
		$mes="公司荣誉相关信息删除成功!<br/><a href='lisgonsironyi.php'>查看公司荣誉相关信息</a>|<a href='addgonsironyi.php'>添加公司荣誉相关信息</a>";
	}else{
		$mes="删除失败！<br/><a href='lisgonsironyi.php'>请重新操作</a>";
	}
	return $mes;
}
/**
 * 得到所有活动
 * @return array
 */
function getAllgonsironyi(){
	$sql="select id,content from gonsironyi";
	$rows=fetchAll($sql);
	return $rows;
}



