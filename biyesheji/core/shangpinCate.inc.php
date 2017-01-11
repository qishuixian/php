<?php 
/**
 * 添加商品分类的操作
 * @return string
 */
function addShangpinCate(){
	$arr=$_POST;
	if(insert("cate",$arr)){
		$mes="商品分类添加成功!<br/><a href='addShangpinCate.php'>继续添加</a>|<a href='listShangpinCate.php'>查看商品分类</a>";
	}else{
		$mes="商品分类添加失败！<br/><a href='addShangpinCate.php'>重新添加</a>|<a href='listShangpinCate.php'>查看商品分类</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定商品分类信息
 * @param int $id
 * @return array
 */
function getShangpinCateById($id){
	$sql="select id,cName from cate where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改商品分类的操作
 * @param string $where
 * @return string
 */
function editShangpinCate($where){
	$arr=$_POST;
	if(update("cate", $arr,$where)){
		$mes="商品分类修改成功!<br/><a href='listShangpinCate.php'>查看商品分类</a>";
	}else{
		$mes="商品分类修改失败!<br/><a href='listShangpinCate.php'>重新修改</a>";
	}
	return $mes;
}

/**
 *删除商品分类
 * @param string $where
 * @return string
 */
function delShangpinCate($id){
	$res=checkShangpinExist($id);
	if(!$res){
		$where="id=".$id;
		if(delete("cate",$where)){
			$mes="商品分类删除成功!<br/><a href='listShangpinCate.php'>查看商品分类</a>|<a href='addShangpinCate.php'>添加商品分类</a>";
		}else{
			$mes="删除失败！<br/><a href='listShangpinCate.php'>请重新操作</a>";
		}
		return $mes;
	}else{
		alertMes("不能删除商品分类，请先删除该商品分类下的商品", "listPro.php");
	}
}

/**
 * 得到所有商品分类
 * @return array
 */
function getAllShangpinCate(){
	$sql="select id,cName from cate";
	$rows=fetchAll($sql);
	return $rows;
}



