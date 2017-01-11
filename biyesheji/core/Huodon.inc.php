<?php 
/**
 * 添加公司新闻
 * @return string
 */
function addHuodon(){
	$arr=$_POST;
	$arr['time']=date('Y-m-d');
	if(insert("huodon",$arr)){
		$mes="公司新闻添加成功!<br/><a href='addHuodon.php'>继续添加</a>|<a href='lisHuodon.php'>查看公司新闻</a>";
	}else{
		$mes="公司新闻添加失败！<br/><a href='addHuodon.php'>重新添加</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定公司新闻活动
 * @param int $id
 * @return array
 */
function getHuodonById($id){
	$sql="select id,title,content,status,time from huodon where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改公司新闻的操作
 * @param string $where
 * @return string
 */
function editHuodon($where){
	$arr=$_POST;
	if(update("huodon", $arr,$where)){
		$mes="公司新闻修改成功!<br/><a href='lisHuodon.php'>查看公司新闻</a>";
	}else{
		$mes="公司新闻修改失败!<br/><a href='lisHuodon.php'>重新修改</a>";
	}
	return $mes;
}

// *
//  *删除公司新闻
//  * @param string $where
//  * @return string
 
function delHuodon($id){
	if(delete("huodon","id={$id}")){
		$mes="公司新闻删除成功!<br/><a href='lisHuodon.php'>查看公司新闻</a>|<a href='addHuodon.php'>添加公司新闻</a>";
	}else{
		$mes="删除失败！<br/><a href='lisHuodon.php'>请重新操作</a>";
	}
	return $mes;
}
/**
 * 得到所有活动
 * @return array
 */
function getAllHuodon(){
	$sql="select id,title,content,status,time from huodon";
	$rows=fetchAll($sql);
	return $rows;
}



