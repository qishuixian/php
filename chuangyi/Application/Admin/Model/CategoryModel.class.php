<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class CategoryModel extends RelationModel {
   protected $_validate = array(
     array("cate_name","require","请填写栏目",1,regex,3),
    );
   public function category(){
    $data = $this->select();
    return $this->resort($data);
   }
   //递归
   public function resort($data,$parentid = 0,$level = 0){
    static $ret = array();
    foreach ($data as $k => $v) {
        if($v['parentid'] == $parentid){
            $v['level'] = $level;
            $ret [] = $v;
            $this->resort($data,$v['cate_id'],$level+1);
        }
    }
     return $ret;
   }
   public function childrenid($cateid){
      $data=$this->select();
      return $this->getchildrenid($data,$cateid);
   }
  public function getchildrenid($data,$parentid){
      static $ret=array();
      foreach($data as $k=>$v){
        if($v['parentid']==$parentid){
          $ret[]=$v['cate_id'];
          $this->getchildrenid($data,$v['cate_id']);
        }
      }
      return $ret;
  }
  public function _before_delete($options){
    if (is_array($options["where"]["cate_id"])) {
      //批量删除
      //explode() 函数把字符串打散为数组。
      $arr=explode(',',$options['where']['cate_id'][1]);  
      $hildrenids=array();
      foreach($arr as $k=>$v){
        $hildrenids2=$this->childrenid($v);
        //array_merge() 函数把一个或多个数组合并为一个数组。
        $hildrenids=array_merge($hildrenids,$hildrenids2); 
      }
      //array_unique() 函数移除数组中的重复的值，并返回结果数组。
      $hildrenids=array_unique($hildrenids);
      $hildrenids=implode(',',$hildrenids);
      if($hildrenids){
        //在模型中，不能用delete方法，只能用mysql语句
        $this->execute("delete from ar_category where cate_id in ($hildrenids)");
      }
    }else{
      //单独删除
      $childrenids = $this->childrenid($options["where"]["cate_id"]);
      $childrenids = implode(',',$childrenids);
      // var_dump($childrenids);
      // die;
      if ($childrenids) {
        $this->execute("delete from ar_category where cate_id in ($childrenids)");
      }
   }
  }
}