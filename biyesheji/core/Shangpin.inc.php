<?php 
/**
 * 添加商品
 * @return string
 */
function addShangpin(){
	$arr=$_POST;
	$arr['time']=date('Y-m-d');
	$path="./uploads";
	$uploadFiles=uploadFile($path);
	if(is_array($uploadFiles)&&$uploadFiles){
		foreach($uploadFiles as $key=>$uploadFile){
			thumb($path."/".$uploadFile['name'],"../image_184/".$uploadFile['name'],184,160);
			thumb($path."/".$uploadFile['name'],"../image_216/".$uploadFile['name'],216,160);
		}
	}
	$res=insert("shangpin",$arr);
	$pid=getInsertId();
	if($res&&$pid){
		foreach($uploadFiles as $uploadFile){
			$arr1['pid']=$pid;
			$arr1['albumPath']=$uploadFile['name'];
			addAlbum($arr1);
		}
		$mes="<p>添加成功!</p><a href='addShangpin.php' target='mainFrame'>继续添加</a>|<a href='lisShangpin.php' target='mainFrame'>查看商品列表</a>";
	}else{
		foreach($uploadFiles as $uploadFile){
			if(file_exists("../image_184/".$uploadFile['name'])){
				unlink("../image_216/".$uploadFile['name']);
			}
		}
		$mes="<p>添加失败!</p><a href='addShangpin.php' target='mainFrame'>重新添加</a>";
		
	}
	return $mes;
}
/**
 *编辑商品
 * @param int $id
 * @return string
 */
function editShangpin($id){
	$arr=$_POST;
	$path="./uploads";
	$uploadFiles=uploadFile($path);
	if(is_array($uploadFiles)&&$uploadFiles){
		foreach($uploadFiles as $key=>$uploadFile){
			thumb($path."/".$uploadFile['name'],"../image_184/".$uploadFile['name'],184,160);
			thumb($path."/".$uploadFile['name'],"../image_216/".$uploadFile['name'],216,160);
		}
	}
	$where="id={$id}";
	$res=update("shangpin",$arr,$where);
	$pid=$id;
	if($res&&$pid){
		if($uploadFiles &&is_array($uploadFiles)){
			foreach($uploadFiles as $uploadFile){
				$arr1['pid']=$pid;
				$arr1['albumPath']=$uploadFile['name'];
				addAlbum($arr1);
			}
		}
		$mes="<p>编辑成功!</p><a href='lisShangpin.php' target='mainFrame'>查看商品列表</a>";
	}else{
	if(is_array($uploadFiles)&&$uploadFiles){
		foreach($uploadFiles as $uploadFile){
			if(file_exists("../image_184/".$uploadFile['name'])){
				unlink("../image_184/".$uploadFile['name']);
			}
			if(file_exists("../image_216/".$uploadFile['name'])){
				unlink("../image_216/".$uploadFile['name']);
			}
		}
	}
		$mes="<p>编辑失败!</p><a href='lisShangpin.php' target='mainFrame'>重新编辑</a>";
		
	}
	return $mes;
}

function delShangpin($id){
	$where="id=$id";
	$res=delete("shangpin",$where);
	$proImgs=getAllImgByShangpinId($id);
	if($proImgs&&is_array($proImgs)){
		foreach($proImgs as $proImg){
			if(file_exists("uploads/".$proImg['albumPath'])){
				unlink("uploads/".$proImg['albumPath']);
			}
			if(file_exists("../image_184/".$proImg['albumPath'])){
				unlink("../image_184/".$proImg['albumPath']);
			}
			if(file_exists("../image_216/".$proImg['albumPath'])){
				unlink("../image_216/".$proImg['albumPath']);
			}
		}
	}
	$where1="pid={$id}";
	$res1=delete("album",$where1);
	if($res&&$res1){
		$mes="删除成功!<br/><a href='lisShangpin.php' target='mainFrame'>查看商品列表</a>";
	}else{
		$mes="删除失败!<br/><a href='lisShangpin.php' target='mainFrame'>重新删除</a>";
	}
	return $mes;
}


/**
 * 得到商品的所有信息
 * @return array
 */
function getAllShangpinByAdmin(){
	$sql="select p.id,p.pName,p.pNum,p.status,p.news,p.hot,p.time,p.pDesc,c.cName from shangpin as p join cate c on p.cId=c.id";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *根据商品id得到商品图片
 * @param int $id
 * @return array
 */
function getAllImgByShangpinId($id){
	$sql="select a.albumPath from album a where pid={$id} order by time desc limit 1";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 * 根据id得到商品的详细信息
 * @param int $id
 * @return array
 */
function getShangpinById($id){
		$sql="select p.id,p.pName,p.pNum,p.status,p.time,p.news,p.hot,p.pDesc,c.cName,p.cId from shangpin as p join cate c on p.cId=c.id where p.id={$id}";
		$row=fetchOne($sql);
		return $row;
}
/**
 * 根据ID得到指定商品的详细信息
 * @param int $id
 * @return array
 */
function getShangpin1Id($id){
	$sql="select id,pName,status,pNum,time,news,hot,pDesc,cId from shangpin where id={$id}";
	return fetchOne($sql);
}
/**
 * 检查分类下是否有产品
 * @param int $cid
 * @return array
 */
function checkShangpinExist($cid){
	$sql="select * from shangpin where cId={$cid}";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 * 得到所有商品
 * @return array
 */
function getAllShangpin(){
	$sql="select p.id,p.pName,p.pNum,p.status,p.time,p.news,p.hot,p.pDesc,c.cName,p.cId from Shangpin as p join cate c on p.cId=c.id ";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *根据cid得到4条产品
 * @param int $cid
 * @return Array
 */
function getShangpinByCid($cid){
	$sql="select p.id,p.pName,p.pNum,p.status,p.time,p.news,p.hot,p.pDesc,c.cName,p.cId from Shangpin as p join cate c on p.cId=c.id where p.cId={$cid} limit 4";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 * 得到下4条产品
 * @param int $cid
 * @return array
 */
function getSmallShangpinByCid($cid){
	$sql="select p.id,p.pName,p.pNum,p.status,p.time,p.news,p.hot,p.pDesc,c.cName,p.cId from Shangpin as p join cate c on p.cId=c.id where p.cId={$cid} limit 4,4";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *得到商品ID和商品名称
 * @return array
 */
function getShangpinInfo(){
	$sql="select id,pName from shangpin order by id asc";
	$rows=fetchAll($sql);
	return $rows;
}
