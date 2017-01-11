<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class ArticleModel extends RelationModel {
	protected $_validate = array(
     array("title","require","请填写文章标题"),
     // array("title","unique","对不起，该文章已经存在"),
    );
    protected $_link = array(        
    	'Dept' => array(    
    	'mapping_type'  => self::BELONGS_TO,    
    	'class_name'    => 'Type',    
    	'foreign_key'   => 'typeid',    
    	'as_fields'  => 'typename' // 定义更多的关联属性
    	),   
    );
}