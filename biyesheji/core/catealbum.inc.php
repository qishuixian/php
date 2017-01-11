<?php 

function addAlbum($arr){
	$arr['time']=date('Y-m-d');
	insert("album", $arr);
}

/**
 * 根据商品id得到商品图片
 * @param int $id
 * @return array
 */
function getShangpinImgById($id){
	$sql="select albumPath from album where pid={$id}";
	$row=fetchOne($sql);
	return $row;
}

/**
 * 根据商品id得到所有图片
 * @param int $id
 * @return array
 */
function getShangpinImgsById($id){
	$sql="select albumPath from album where pid={$id}";
	$rows=fetchAll($sql);
	return $rows;
}



