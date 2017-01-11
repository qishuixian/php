<?php
namespace Home\Model;
use Think\Model;
class CategoryModel extends Model {
  public function GetParent($cateid){
    $res = array();
    while ($cateid) {
      $cates = $this->where("cate_id = $cateid")->find();
      $res[]= array(
        'cate_id' => $cates['cate_id'],
        'cate_name' => $cates['cate_name'],
        'cate_type' => $cates['cate_type'],
      );
      $cateid=$cates['parentid']; 
    }
    // array_reverse() 函数将原数组中的元素顺序翻转
    return array_reverse($res);
  }
}
