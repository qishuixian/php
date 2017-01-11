<?php
namespace Home\Model;
use Think\Model\RelationModel;
class ArticleModel extends RelationModel {
    protected $_link = array(        
    	'Dept' => array(    
    	'mapping_type'  => self::BELONGS_TO,    
    	'class_name'    => 'Type',    
    	'foreign_key'   => 'typeid',    
    	'as_fields'  => 'typename' // 定义更多的关联属性
    	),   
    );
}