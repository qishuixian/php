<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function lst(){
        $article = M('article'); // 实例化User对象
        $count= $article->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $list = $article->order('ar_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $category=D("category");
        $res = $category->select();
        // var_dump ($res);
        // die;
        $this->assign("res",$res);
        $this->display();
    }
    public function add(){
        $cate=D('category');
        $cateres=$cate->category();
        $this->assign('cateres',$cateres);
        $article=D('article');
        //添加操作
        if(IS_POST){
            $data['ar_title']=I('ar_title');
            $data['ar_author']=I('ar_author');
            $data['ar_rem']=I('ar_rem');
            $data['ar_cateid']=I('ar_cateid');
            $data['ar_content']=I('ar_content');
            $data['ar_time']=time();
            if($_FILES['ar_pic']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath='./';
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $info=$upload->uploadOne($_FILES['ar_pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                 }else{// 上传成功  
                     $data['ar_pic']=$info['savepath'].$info['savename']; 
                     }
            }
            
            if($article->create($data)){
            if($article->add()){
                $this->success('文章新增成功',U('lst'));
            }else{
                $this->error('文章新增失败！');
            }
            }else{
                $this->error($article->getError());
            }
        return;
        }
        $this->display();
    }
    public function edit(){
        $ar_id=I("ar_id");
        $article=D('article');
        $articleres = $article->find($ar_id);
        $cate=D('category');
        $cateres=$cate->category();
        $this->assign('cateres',$cateres);
        $this->assign("articles",$articleres);
        if(IS_POST){
            $data['ar_id']=I('ar_id');
            $data['ar_title']=I('ar_title');
            $data['ar_author']=I('ar_author');
            $data['ar_rem']=I('ar_rem');
            $data['ar_cateid']=I('ar_cateid');
            $data['ar_content']=I('ar_content');
            $data['ar_time']=time();
            if($_FILES['ar_pic']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath='./';
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $info=$upload->uploadOne($_FILES['ar_pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功  
                    $data['ar_pic']=$info['savepath'].$info['savename']; 
                }
            }
            if($article->create($data)){
                //验证通过
                if($article->save()){
                    //添加成功
                    $this->success("修改文章成功",U("lst"),2);

                }else{

                    //添加失败
                    $this->error("修改文章失败");

                }

            }else{
                //验证失败
                $this->error($article->getError());

            }
             return;
        }
        $this->display();
    }
    public function shanchu(){
        $ar_id=I("ar_id");
         $article=D('article');
        if($article->delete($ar_id)){
            //删除成功
            $this->success("删除成功",U("lst"),2);
        }else{
            //删除失败
            $this->error("删除栏目失败");
        }
    }
     //批量删除
    public function bdel(){
        $dbel = I('bdel');
        //var_dump()方法是判断一个变量的类型与长度,并输出变量的数值,如果变量有值输的是变量的值并回返数据类型.此函数显示关于一个或多个表达式的结构信息，包括表达式的类型与值。数组将递归展开值，通过缩进显示其结构。
        // var_dump($dbel);
        if($dbel){
            //implode() 函数返回由数组元素组合成的字符串。
            $dbelid = implode(',',$dbel);
            // echo $dbelid;
            // die;
           $article=D('article');
            if ( $article->delete($dbelid)){
                //删除成功
                $this->success("删除成功",U("lst"),2);
            }else {
                //删除失败
                $this->error("删除栏目失败");
            }
        }
    }
}