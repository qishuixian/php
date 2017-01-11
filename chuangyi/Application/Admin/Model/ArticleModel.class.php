<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class ArticleModel extends RelationModel {

	protected $_validate = array(
		array('ar_title','require','文章标题不能为空！',1,regex,3), //默认情况下用正则进行验证
		array('ar_cateid','require','所属栏目不能为空！',1,regex,3), 
	);
}