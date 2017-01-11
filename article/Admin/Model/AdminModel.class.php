<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model {
	  public function checkUser($user,$passord){
	  	$condition['user'] = $user;
	  	$condition['passord'] = md5($passord);
	  	if($admin = $this->where($condition)->find()){
	  		//成功，保存session标识，并跳转到首页
	  		session("admin",$admin);
	  		return true;
	  	}else{
	  		return false;
	  	}
	}
	protected $_validate = array(
     	array("user","require","请填写管理员名称"),
     	array("password","require","请填写管理员密码"),
    );
}