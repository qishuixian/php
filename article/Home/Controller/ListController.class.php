<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends Controller {
    public function index(){
    	// http://localhost/article/index.php/home/list
    	$type = D('type');
    	$typeid =  I('typeid');
    	$types = $type->select();
    	$this->assign('types',$types);

    	$article = D('article');
    	$condition['new'] = 1;
    	$res = $article->where($condition)->select();
    	$this->assign('res',$res);

    	$condition['typeid'] = $typeid;
	    $count=$article->where($condition)->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show= $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $articles = $article->where($condition)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('articles',$articles);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        // $page->setConfig('first','首页');
        // $page->setConfig('end','末页')
        $this->display('list');
    }
}