<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	//管理员添加修改，删除，登录页面
    public function __construct(){
        parent::__construct();//一定要调用父类的制造函数，以免有些数据会掉失
        $this->checklogin();
    }
    public function checklogin(){
        if(!$_SESSION["admin"]){
            $this->error("请先登录~",U("Login/login"),3);
        }else{
            $admin = session("admin");
            $this->assign("admin", $admin["user"]);
            $this->assign("adminId", $admin["id"]);
        }
    }
    
}