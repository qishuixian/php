<?php
namespace Home\Model;
use Think\Model;
class ArticleModel extends Model {
   //获取新闻动态，两遍
	public function getnews(){
	    //where可以为空的，写1是为真
		return $this->where("1")->order('ar_id desc')->limit(2)->select();
	}
	
	public function getrems(){
	
		return $this->where("ar_rem=1")->select();
	}
	
	
	
	
	
	





}