<?php 
   //头部导航
	function getSub($pid){
		$cate = D('category');
		$where['parentid']=$pid;
		$cates=$cate->where($where)->select();
		return $cates;
	}
 ?>