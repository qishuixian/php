<?php 
/**
 * 添加合作商家
 * @return string
 */
function addshangjia(){
	$arr=$_POST;
	$arr['time']=date('Y-m-d');
	$path="./uploads";
	$uploadFiles=uploadFile($path);
	if(is_array($uploadFiles)&&$uploadFiles){
		foreach($uploadFiles as $key=>$uploadFile){
			thumb($path."/".$uploadFile['name'],"../shangjia/".$uploadFile['name'],136,100);
		}
	}
	$res=insert("shangjia",$arr);
	$sid=getInsertId();
	if($res&&$sid){
		foreach($uploadFiles as $uploadFile){
			$arr1['sid']=$sid;
			$arr1['albumPath']=$uploadFile['name'];
			addAlbum($arr1);
		}
		$mes="<p>添加成功!</p><a href='addshangjia.php' target='mainFrame'>继续添加</a>|<a href='lisshangjia.php' target='mainFrame'>查看合作商家列表</a>";
	}else{
		foreach($uploadFiles as $uploadFile){
			if(file_exists("../shangjia/".$uploadFile['name'])){
				unlink("../shangjia/".$uploadFile['name']);
			}
		}
		$mes="<p>添加失败!</p><a href='addshangjia.php' target='mainFrame'>重新添加</a>";
		
	}
	return $mes;
}
/**
 *编辑合作商家
 * @param int $id
 * @return string
 */
function editshangjia($id){
	$arr=$_POST;
	$path="./shangjia";
	$path="./uploads";
	$uploadFiles=uploadFile($path);
	if(is_array($uploadFiles)&&$uploadFiles){
		foreach($uploadFiles as $key=>$uploadFile){
			thumb($path."/".$uploadFile['name'],"../shangjia/".$uploadFile['name'],136,100);
		}
	}
	$where="id={$id}";
	$res=update("shangjia",$arr,$where);
	$sid=$id;
	if($res&&$sid){
		if($uploadFiles &&is_array($uploadFiles)){
			foreach($uploadFiles as $uploadFile){
				$arr1['sid']=$sid;
				$arr1['albumPath']=$uploadFile['name'];
				addAlbum($arr1);
			}
		}
		$mes="<p>编辑成功!</p><a href='lisshangjia.php' target='mainFrame'>查看合作商家列表</a>";
	}else{
	if(is_array($uploadFiles)&&$uploadFiles){
		foreach($uploadFiles as $uploadFile){
			if(file_exists("../shangjia/".$uploadFile['name'])){
				unlink("../shangjia/".$uploadFile['name']);
			}
		}
	}
		$mes="<p>编辑失败!</p><a href='lisshangjia.php' target='mainFrame'>重新编辑</a>";
		
	}
	return $mes;
}

function delshangjia($id){
	$where="id=$id";
	$res=delete("shangjia",$where);
	$proImgs=getAllImgByshangjiaId($id);
	if($proImgs&&is_array($proImgs)){
		foreach($proImgs as $proImg){
			if(file_exists("uploads/".$proImg['albumPath'])){
				unlink("uploads/".$proImg['albumPath']);
			}
			if(file_exists("../shangjia/".$proImg['albumPath'])){
				unlink("../shangjia/".$proImg['albumPath']);
			}
		}
	}
	$where1="sid={$id}";
	$res1=delete("album",$where1);
	if($res&&$res1){
		$mes="删除成功!<br/><a href='lisshangjia.php' target='mainFrame'>查看合作商家列表</a>";
	}else{
		$mes="删除失败!<br/><a href='lisshangjia.php' target='mainFrame'>重新删除</a>";
	}
	return $mes;
}


/**
 * 得到合作商家的所有信息
 * @return array
 */
function getAllshangjiaByAdmin(){
	$sql="select * from shangjia";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *根据合作商家id得到合作商家图片
 * @param int $id
 * @return array
 */
function getAllImgByshangjiaId($id){
	$sql="select a.albumPath from album a where sid={$id} order by time desc limit 0,1";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 * 根据id得到合作商家的详细信息
 * @param int $id
 * @return array
 */
function getshangjiaById($id){
		$sql="select * from shangjia  where id={$id}";
		$row=fetchOne($sql);
		return $row;
}
/**
 * 根据ID得到指定合作商家的详细信息
 * @param int $id
 * @return array
 */
function getshangjia1Id($id){
	$sql="select id,title,tuku,time from shangjia where id={$id}";
	return fetchOne($sql);
}
/**
 * 检查分类下是否有产品
 * @param int $cid
 * @return array
 */
function checkshangjiaExist($cid){
	$sql="select * from jshangjia where cId={$cid}";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 * 得到所有合作商家
 * @return array
 */
function getAllshangjia(){
	$sql="select id,title,tuku,time from shangjia where id={$id} ";
	$rows=fetchAll($sql);
	return $rows;
}