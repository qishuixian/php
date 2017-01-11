<?php 
/**
 * 添加人才战略相关信息
 * @return string
 */
function addrencai(){
	$arr=$_POST;
	if(insert("rencai",$arr)){
		$mes="人才战略相关信息添加成功!<br/><a href='addrencai.php'>继续添加</a>|<a href='lisrencai.php'>查看人才战略相关信息</a>";
	}else{
		$mes="人才战略相关信息添加失败！<br/><a href='addrencai.php'>重新添加</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定人才战略相关信息活动
 * @param int $id
 * @return array
 */
function getrencaiById($id){
	$sql="select id,content from rencai where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改人才战略相关信息的操作
 * @param string $where
 * @return string
 */
function editrencai($where){
	$arr=$_POST;
	if(update("rencai", $arr,$where)){
		$mes="人才战略相关信息修改成功!<br/><a href='lisrencai.php'>查看人才战略</a>";
	}else{
		$mes="人才战略相关信息修改失败!<br/><a href='lisrencai.php'>重新修改</a>";
	}
	return $mes;
}

// *
//  *删除人才战略相关信息
//  * @param string $where
//  * @return string
 
function delrencai($id){
	if(delete("rencai","id={$id}")){
		$mes="人才战略相关信息删除成功!<br/><a href='lisrencai.php'>查看人才战略相关信息</a>|<a href='addrencai.php'>添加人才战略相关信息</a>";
	}else{
		$mes="删除失败！<br/><a href='lisrencai.php'>请重新操作</a>";
	}
	return $mes;
}
/**
 * 得到所有活动
 * @return array
 */
function getAllrencai(){
	$sql="select id,content from rencai";
	$rows=fetchAll($sql);
	return $rows;
}



