<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
        if(IS_POST){
            $user = I("user");
            $password = I("passord");
            $captcha = I("captcha");
            //验证，注意顺序
            //先检查验证码
            $verify = new \Think\Verify();    
            if(!$verify->check($captcha)){
                $this->error("验证码失败");
                return;
            }
            //再来验证用户名和密码
            if(D("admin")->checkUser($user,$passord)){
                $this->success("登录成功",U("Index/index"),2);
            }else{
                $this->error("用户密码错误");
            }
            return;
        }
       $this->display();
    }
    public function code(){
        //生成验证码
        $Verify = new \Think\Verify();
        $Verify->fontSize = 50;//验证码的字体大小
        $Verify->length   = 2;//验证码的字数
        $Verify->useNoise = false;//关闭杂点
        $Verify->entry();
    }
    //退出登录
    public function loginOut(){
        session('[destroy]'); // 销毁session
        $this->success("成功退出系统",U("login"),2);
    }
    
}