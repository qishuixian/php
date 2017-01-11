<?php 
/**
 * 添加焦点图
 * @return string
 */
function addJdtuku(){
	$arr=$_POST;
	$arr['time']=date('Y-m-d');
	$path="./uploads";
	$uploadFiles=uploadFile($path);
	if(is_array($uploadFiles)&&$uploadFiles){
		foreach($uploadFiles as $key=>$uploadFile){
			thumb($path."/".$uploadFile['name'],"../Jdtuku/".$uploadFile['name'],1010,286);
		}
	}
	$res=insert("jdtuku",$arr);
	$jid=getInsertId();
	if($res&&$jid){
		foreach($uploadFiles as $uploadFile){
			$arr1['jid']=$jid;
			$arr1['albumPath']=$uploadFile['name'];
			addAlbum($arr1);
		}
		$mes="<p>添加成功!</p><a href='addJdtuku.php' target='mainFrame'>继续添加</a>|<a href='lisJdtuku.php' target='mainFrame'>查看焦点图列表</a>";
	}else{
		foreach($uploadFiles as $uploadFile){
			if(file_exists("../Jdtuku/".$uploadFile['name'])){
				unlink("../Jdtuku/".$uploadFile['name']);
			}
		}
		$mes="<p>添加失败!</p><a href='addJdtuku.php' target='mainFrame'>重新添加</a>";
		
	}
	return $mes;
}
/**
 *编辑焦点图
 * @param int $id
 * @return string
 */
function editJdtuku($id){
	$arr=$_POST;
	$path="./uploads";
	$uploadFiles=uploadFile($path);
	if(is_array($uploadFiles)&&$uploadFiles){
		foreach($uploadFiles as $key=>$uploadFile){
			thumb($path."/".$uploadFile['name'],"../Jdtuku/".$uploadFile['name'],1010,286);
		}
	}
	$where="id={$id}";
	$res=update("jdtuku",$arr,$where);
	$jid=$id;
	if($res&&$jid){
		if($uploadFiles &&is_array($uploadFiles)){
			foreach($uploadFiles as $uploadFile){
				$arr1['jid']=$jid;
				$arr1['albumPath']=$uploadFile['name'];
				addAlbum($arr1);
			}
		}
		$mes="<p>编辑成功!</p><a href='lisJdtuku.php' target='mainFrame'>查看焦点图列表</a>";
	}else{
	if(is_array($uploadFiles)&&$uploadFiles){
		foreach($uploadFiles as $uploadFile){
			if(file_exists("../Jdtuku/".$uploadFile['name'])){
				unlink("../Jdtuku/".$uploadFile['name']);
			}
		}
	}
		$mes="<p>编辑失败!</p><a href='lisJdtuku.php' target='mainFrame'>重新编辑</a>";
		
	}
	return $mes;
}

function delJdtuku($id){
	$where="id=$id";
	$res=delete("jdtuku",$where);
	$proImgs=getAllImgByJdtukuId($id);
	if($proImgs&&is_array($proImgs)){
		foreach($proImgs as $proImg){
			if(file_exists("uploads/".$proImg['albumPath'])){
				unlink("uploads/".$proImg['albumPath']);
			}
			if(file_exists("../Jdtuku/".$proImg['albumPath'])){
				unlink("../Jdtuku/".$proImg['albumPath']);
			}
		}
	}
	$where1="jid={$id}";
	$res1=delete("album",$where1);
	if($res&&$res1){
		$mes="删除成功!<br/><a href='lisJdtuku.php' target='mainFrame'>查看焦点图列表</a>";
	}else{
		$mes="删除失败!<br/><a href='lisJdtuku.php' target='mainFrame'>重新删除</a>";
	}
	return $mes;
}


/**
 * 得到焦点图的所有信息
 * @return array
 */
function getAllJdtukuByAdmin(){
	$sql="select * from jdtuku";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *根据焦点图id得到焦点图图片
 * @param int $id
 * @return array
 */
function getAllImgByJdtukuId($id){
	$sql="select a.albumPath from album a where jid={$id} order by time desc limit 1";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 * 根据id得到焦点图的详细信息
 * @param int $id
 * @return array
 */
function getJdtukuById($id){
		$sql="select * from jdtuku  where id={$id}";
		$row=fetchOne($sql);
		return $row;
}
/**
 * 根据ID得到指定焦点图的详细信息
 * @param int $id
 * @return array
 */
function getJdtuku1Id($id){
	$sql="select id,title,tuku,time,href,status from jdtuku where id={$id}";
	return fetchOne($sql);
}
/**
 * 检查分类下是否有产品
 * @param int $cid
 * @return array
 */
function checkJdtukuExist($cid){
	$sql="select * from jJdtuku where cId={$cid}";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 * 得到所有焦点图
 * @return array
 */
function getAllJdtuku(){
	$sql="select id,title,tuku,time,href,status from jdtuku where id={$id}";
	$rows=fetchAll($sql);
	return $rows;
}
/**
 *得到所有焦点图
 * @return array
 */
function getJdtukuInfo(){
	$sql="select id,title,tuku,time,href,status from jdtuku by id asc";
	$rows=fetchAll($sql);
	return $rows;
}