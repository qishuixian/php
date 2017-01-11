<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends BaseController {
	//管理员加载列表页面
    public function xiugai(){
        if(IS_POST){
            $data["user"] = I("user");
            $data["password"] =md5(I("password"));
            $data["id"] = I("id");
            $admin = D("admin");
            if($admin->create($data)){
                if($admin->save()){
                    $this->success("管理员修改成功",U("xiugai"));
                }else{
                    $this->error("管理员修改失败！");
                }
            }else{
               $this->error($admin->getError()); 
            }
            return;
        }
        $this->display();
    }

    
}