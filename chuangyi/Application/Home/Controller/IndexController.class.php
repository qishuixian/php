<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
       $ar=D('article');
		$arnews=$ar->getnews();
		$arrems=$ar->getrems();
		$this->assign('arnews',$arnews);
		$this->assign('arrems',$arrems);
       $this->assign('index',true);
       $this->display();
    }
}