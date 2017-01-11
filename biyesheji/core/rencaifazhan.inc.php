<?php 
/**
 * 添加发展空间相关信息
 * @return string
 */
function addrencaifazhan(){
	$arr=$_POST;
	if(insert("rencaifazhan",$arr)){
		$mes="发展空间相关信息添加成功!<br/><a href='addrencaifazhan.php'>继续添加</a>|<a href='lisrencaifazhan.php'>查看发展空间相关信息</a>";
	}else{
		$mes="发展空间相关信息添加失败！<br/><a href='addrencaifazhan.php'>重新添加</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定发展空间相关信息活动
 * @param int $id
 * @return array
 */
function getrencaifazhanById($id){
	$sql="select id,content from rencaifazhan where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改发展空间相关信息的操作
 * @param string $where
 * @return string
 */
function editrencaifazhan($where){
	$arr=$_POST;
	if(update("rencaifazhan", $arr,$where)){
		$mes="发展空间相关信息修改成功!<br/><a href='lisrencaifazhan.php'>查看发展空间</a>";
	}else{
		$mes="发展空间相关信息修改失败!<br/><a href='lisrencaifazhan.php'>重新修改</a>";
	}
	return $mes;
}

// *
//  *删除发展空间相关信息
//  * @param string $where
//  * @return string
 
function delrencaifazhan($id){
	if(delete("rencaifazhan","id={$id}")){
		$mes="发展空间相关信息删除成功!<br/><a href='lisrencaifazhan.php'>查看发展空间相关信息</a>|<a href='addrencaifazhan.php'>添加发展空间相关信息</a>";
	}else{
		$mes="删除失败！<br/><a href='lisrencaifazhan.php'>请重新操作</a>";
	}
	return $mes;
}
/**
 * 得到所有活动
 * @return array
 */
function getAllrencaifazhan(){
	$sql="select id,content from rencaifazhan";
	$rows=fetchAll($sql);
	return $rows;
}



