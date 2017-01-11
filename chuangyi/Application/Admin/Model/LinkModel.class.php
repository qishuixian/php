<?php
namespace Admin\Model;
use Think\Model;
class LinkModel extends Model {

	protected $_validate = array(
		array('li_title','require','友情链接标题不能为空！'), //默认情况下用正则进行验证
		array('li_url','require','友情链接标题地址不能为空！'), 
	);
}