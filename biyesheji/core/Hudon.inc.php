<?php 
/**
 * 添加在线留言
 * @return string
 */
function addHudon(){
	$arr=$_POST;
	$arr['time']=date('Y-m-d');
	print_r($arr);
	if(insert("hudon",$arr)){
		$mes="在线留言添加成功!<br/><a href='addHudon.php'>继续添加</a>|<a href='lisHudon.php'>查看在线留言</a>";
	}else{
		$mes="在线留言添加失败！<br/><a href='addHudon.php'>重新添加</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定在线留言信息
 * @param int $id
 * @return array
 */
function getHudonById($id){
	$sql="select id,name,call,email,content,time from hudon where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改在线留言的操作
 * @param string $where
 * @return string
 */
function editHudon($where){
	$arr=$_POST;
	if(update("hudon", $arr,$where)){
		$mes="在线留言修改成功!<br/><a href='lisHudon.php'>查看分类</a>";
	}else{
		$mes="在线留言修改失败!<br/><a href='lisHudon.php'>重新修改</a>";
	}
	return $mes;
}

// *
//  *删除在线留言
//  * @param string $where
//  * @return string
 
function delHudon($id){
	if(delete("hudon","id={$id}")){
		$mes="在线留言删除成功!<br/><a href='lisHudon.php'>查看在线留言</a>|<a href='addHudon.php'>添加在线留言</a>";
	}else{
		$mes="删除失败！<br/><a href='lisHudon.php'>请重新操作</a>";
	}
	return $mes;
}

/**
 * 得到所有分类
 * @return array
 */
function getAllHudon(){
	$sql="select id,name,call,email,content,time from hudon";
	$rows=fetchAll($sql);
	return $rows;
}



