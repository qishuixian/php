<?php
namespace Admin\Model;
use Think\Model;
class TypeModel extends Model {
	  protected $_validate = array(
         array("typename","require","栏目名称不能为空"),
        );
}