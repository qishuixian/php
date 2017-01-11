<?php 
/**
 * 添加精彩生活相关信息
 * @return string
 */
function addrencaishenghuo(){
	$arr=$_POST;
	if(insert("rencaishenghuo",$arr)){
		$mes="精彩生活相关信息添加成功!<br/><a href='addrencaishenghuo.php'>继续添加</a>|<a href='lisrencaishenghuo.php'>查看精彩生活相关信息</a>";
	}else{
		$mes="精彩生活相关信息添加失败！<br/><a href='addrencaishenghuo.php'>重新添加</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定精彩生活相关信息活动
 * @param int $id
 * @return array
 */
function getrencaishenghuoById($id){
	$sql="select id,content from rencaishenghuo where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改精彩生活相关信息的操作
 * @param string $where
 * @return string
 */
function editrencaishenghuo($where){
	$arr=$_POST;
	if(update("rencaishenghuo", $arr,$where)){
		$mes="精彩生活相关信息修改成功!<br/><a href='lisrencaishenghuo.php'>查看精彩生活</a>";
	}else{
		$mes="精彩生活相关信息修改失败!<br/><a href='lisrencaishenghuo.php'>重新修改</a>";
	}
	return $mes;
}

// *
//  *删除精彩生活相关信息
//  * @param string $where
//  * @return string
 
function delrencaishenghuo($id){
	if(delete("rencaishenghuo","id={$id}")){
		$mes="精彩生活相关信息删除成功!<br/><a href='lisrencaishenghuo.php'>查看精彩生活相关信息</a>|<a href='addrencaishenghuo.php'>添加精彩生活相关信息</a>";
	}else{
		$mes="删除失败！<br/><a href='lisrencaishenghuo.php'>请重新操作</a>";
	}
	return $mes;
}
/**
 * 得到所有活动
 * @return array
 */
function getAllrencaishenghuo(){
	$sql="select id,content from rencaishenghuo";
	$rows=fetchAll($sql);
	return $rows;
}



