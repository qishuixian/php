<?php 
/**
 * 添加公司文化相关信息
 * @return string
 */
function addgonsiwenhua(){
	$arr=$_POST;
	if(insert("gonsiwenhua",$arr)){
		$mes="公司文化相关信息添加成功!<br/><a href='addgonsiwenhua.php'>继续添加</a>|<a href='lisgonsiwenhua.php'>查看公司文化相关信息</a>";
	}else{
		$mes="公司文化相关信息添加失败！<br/><a href='addgonsiwenhua.php'>重新添加</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定公司文化相关信息活动
 * @param int $id
 * @return array
 */
function getgonsiwenhuaById($id){
	$sql="select id,content from gonsiwenhua where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改公司文化相关信息的操作
 * @param string $where
 * @return string
 */
function editgonsiwenhua($where){
	$arr=$_POST;
	if(update("gonsiwenhua", $arr,$where)){
		$mes="公司文化相关信息修改成功!<br/><a href='lisgonsiwenhua.php'>查看公司文化</a>";
	}else{
		$mes="公司文化相关信息修改失败!<br/><a href='lisgonsiwenhua.php'>重新修改</a>";
	}
	return $mes;
}

// *
//  *删除公司文化相关信息
//  * @param string $where
//  * @return string
 
function delgonsiwenhua($id){
	if(delete("gonsiwenhua","id={$id}")){
		$mes="公司文化相关信息删除成功!<br/><a href='lisgonsiwenhua.php'>查看公司文化相关信息</a>|<a href='addgonsiwenhua.php'>添加公司文化相关信息</a>";
	}else{
		$mes="删除失败！<br/><a href='lisgonsiwenhua.php'>请重新操作</a>";
	}
	return $mes;
}
/**
 * 得到所有活动
 * @return array
 */
function getAllgonsiwenhua(){
	$sql="select id,content from gonsiwenhua";
	$rows=fetchAll($sql);
	return $rows;
}



