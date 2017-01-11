<?php 
/**
 * 添加行业新闻
 * @return string
 */
function addShunnan(){
	$arr=$_POST;
	$arr['time']=date('Y-m-d');
	if(insert("gongao",$arr)){
		$mes="行业新闻添加成功!<br/><a href='addShunnan.php'>继续添加</a>|<a href='lisShunnan.php'>查看行业新闻</a>";
	}else{
		$mes="行业新闻添加失败！<br/><a href='addShunnan.php'>重新添加</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定行业新闻信息
 * @param int $id
 * @return array
 */
function getShunnanById($id){
	$sql="select id,title,content,status,time from gongao where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改行业新闻的操作
 * @param string $where
 * @return string
 */
function editShunnan($where){
	$arr=$_POST;
	if(update("gongao", $arr,$where)){
		$mes="行业新闻修改成功!<br/><a href='lisShunnan.php'>查看行业新闻</a>";
	}else{
		$mes="行业新闻修改失败!<br/><a href='lisShunnan.php'>重新修改</a>";
	}
	return $mes;
}

// *
//  *删除行业新闻
//  * @param string $where
//  * @return string
 
function delShunnan($id){
	if(delete("gongao","id={$id}")){
		$mes="行业新闻删除成功!<br/><a href='lisShunnan.php'>查看行业新闻</a>|<a href='addShunnan.php'>添加行业新闻</a>";
	}else{
		$mes="删除失败！<br/><a href='lisShunnan.php'>请重新操作</a>";
	}
	return $mes;
}

/**
 * 得到所有分类
 * @return array
 */
function getAllShunnan(){
	$sql="select id,title,content,status,time from gongao";
	$rows=fetchAll($sql);
	return $rows;
}



