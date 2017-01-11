<?php
namespace Home\Controller;
use Think\Controller;
class PageController extends CommonController {
    public function index(){
       $cateid = I('cate_id');
       $cates =D("category");
       $catesinfo=$cates->where("cate_id=$cateid")->find();
       $catescontent=$catesinfo['cate_content'];
       //处理内容里面出现html标签
       $catescontents=htmlspecialchars_decode($catescontent);
       $this->assign('catesinfo',$catescontents);
       $this->display();
    }
}