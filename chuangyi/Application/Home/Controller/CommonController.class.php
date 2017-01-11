<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function __construct(){
	   //继承父类的构造方法
	   parent::__construct();
	   //栏目导航
	   $category = D("category");
          $categoryId['parentid'] = 0;
          $cate =$category->where($categoryId)->order('cate_id asc')->select();
          $this->assign('cate',$cate);
          //首页高亮显示
          $this->assign('idnex',false);
          //列表页，单页，内容页的当前位置信息
          if (I('cate_id')) {
                $cateid = I('cate_id');
          }
          if (I('ar_id')) {
                $arid = I('ar_id');
                $Article = M('Article');
                 $Articles = $Article->where("ar_id=$arid")->find();
                 // 内容页
                 $cateid=$Articles['ar_cateid'];
                 $this->assign('Articles',$Articles);
          }
          if ($cateid) {
              // 当前位置
              $result= $category->GetParent($cateid);
              $this->assign('res',$result);
              //当前位置栏目
              $cateself = $category->where("cate_id=$cateid")->find();
              // 顶级栏目
              $this->assign('cateself',$cateself);
              if ($cateself['parentid'] !=0) {
                  $parentid = $cateself['parentid'];
                  $catetop = $category->where("cate_id=$parentid")->find();
                  $this->assign('catetop',$catetop);
                  $where['parentid']=$parentid;
                  $cateson=$category->where($where)->select();
                  $this->assign('cateson',$cateson);
              }else{
                   $catetop = $cateself;
                   $this->assign('catetop',$catetop); 
                   $where['parentid']=$cateid;
                  $cateson=$category->where($where)->select();
                  $this->assign('cateson',$cateson);
              }
           }
	}

}