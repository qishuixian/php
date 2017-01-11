<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
        if(IS_POST){
        	$admin = D('admin');
        	//传递过来的数据,4表示登录时候进行数据验证，3表示不管什么时候都进行验证
        	if($admin->create($_POST,4)){
        		if($admin->login()){
        			$this->success('恭喜登录成功',U('Index/index'));
        		}else{
        			$this->error('用户名或者密码有误！');
        		}
        	}else{
        		$this->error($admin->getError());
        	}
        	return ;
        }
        $this->display();
    }
    public  function code(){
    	$Verify = new \Think\Verify();
    	$Verify->fontSize = 30;
    	$Verify->length= 3;
    	$Verify->useNoise = false;
    	$Verify->entry();
    }
    public function logout(){
        $admin = D('admin');
        $admin->logout();
        $this->success('退出成功！',U('Login/index'));
        return ;
    }
}