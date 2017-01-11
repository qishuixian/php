<?php 
/**
 * 添加公司概况相关信息
 * @return string
 */
function addgonsi(){
	$arr=$_POST;
	if(insert("gonsi",$arr)){
		$mes="公司概况相关信息添加成功!<br/><a href='addgonsi.php'>继续添加</a>|<a href='lisgonsi.php'>查看公司概况相关信息</a>";
	}else{
		$mes="公司概况相关信息添加失败！<br/><a href='addgonsi.php'>重新添加</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定公司概况相关信息活动
 * @param int $id
 * @return array
 */
function getgonsiById($id){
	$sql="select id,content from gonsi where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改公司概况相关信息的操作
 * @param string $where
 * @return string
 */
function editgonsi($where){
	$arr=$_POST;
	if(update("gonsi", $arr,$where)){
		$mes="公司概况相关信息修改成功!<br/><a href='lisgonsi.php'>查看公司概况</a>";
	}else{
		$mes="公司概况相关信息修改失败!<br/><a href='lisgonsi.php'>重新修改</a>";
	}
	return $mes;
}

// *
//  *删除公司概况相关信息
//  * @param string $where
//  * @return string
 
function delgonsi($id){
	if(delete("gonsi","id={$id}")){
		$mes="公司概况相关信息删除成功!<br/><a href='lisgonsi.php'>查看公司概况相关信息</a>|<a href='addgonsi.php'>添加公司概况相关信息</a>";
	}else{
		$mes="删除失败！<br/><a href='lisgonsi.php'>请重新操作</a>";
	}
	return $mes;
}
/**
 * 得到所有活动
 * @return array
 */
function getAllgonsi(){
	$sql="select id,content from gonsi";
	$rows=fetchAll($sql);
	return $rows;
}



