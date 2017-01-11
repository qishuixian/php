<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
    	$type = D('type');
    	$types = $type->select();
    	$this->assign('types',$types);

    	$article = D('article');
    	$condition['new'] = 1;
    	$res = $article->where($condition)->select();
    	$this->assign('res',$res);
        
        $articleid = I('id');
        $articles=$article->relation(true)->find($articleid);
    	$this->assign('articles',$articles);

        $this->display('article');
    }
}