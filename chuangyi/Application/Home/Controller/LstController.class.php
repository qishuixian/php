<?php
namespace Home\Controller;
use Think\Controller;
class LstController extends CommonController {
    public function index(){
       $cateid = I('cate_id');
       $Article = M('Article'); // 实例化Article对象
       $where['ar_cateid']=$cateid;
       $count =  $Article->where($where)->count();// 查询满足要求的总记录数
       $Page  = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(2)
       $Page->setConfig('prev','上一页');
       $Page->setConfig('next','下一页');
       $Page->setConfig('last','尾页');
       $Page->setConfig('first','首页');
       $show  = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
       $list = $Article->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
       $this->assign('list',$list);// 赋值数据集
       $this->assign('page',$show);// 赋值分页输出

       $this->display();
    }
}