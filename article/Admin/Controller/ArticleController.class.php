<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends BaseController {
	//文章页面
    public function tianjia(){
        if(IS_POST){
            $data["title"]=I("title");
            $data["author"]=I("author");
            $data["hot"]=I("hot");
            $data["new"]=I("new");
            $data["typeid"]=I("typeid");
            $data["desc"]=I("desc");
            $data["time"]=time();
            if($_FILES["pic"]["tmp_name"]!=""){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728 ;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath="./";
                $upload->savePath = './Public/Uploads/'; // 设置附件上传目录    // 上传单个文件 
                $info = $upload->uploadOne($_FILES['pic']);
                if(!$info) {
                 // 上传错误提示错误信息        
                 $this->error($upload->getError());    
                 }else{
                    // 上传成功 获取上传文件信息         
                    $data["pic"] = $info['savepath'].$info['savename'];
                }
            }
            $article=D("article");
            if($article->create($data)){
                //验证通过
                if($article->add($data)){
                    //添加成功
                    $this->success("添加文章成功",U("showlist"),2);

                }else{

                    //添加失败
                    $this->error("添加文章失败");

                }

            }else{
                //验证失败
                $this->error($article->getError());

            }
            return;
        }
        $type = D("type");
        $res=$type->select();
        $this->assign("res",$res);
        $this->display();
    }
    public function xiugai(){
        $article = D("article");
        if(IS_POST){
            $data['id'] = I('id');
            // echo $data['id'];
            // exit;
            $data["title"]=I("title");
            $data["author"]=I("author");
            $data["hot"]=I("hot");
            $data["new"]=I("new");
            $data["typeid"]=I("typeid");
            $data["desc"]=I("desc");
            if($_FILES["pic"]["tmp_name"]!=""){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728 ;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath="./";
                $upload->savePath = './Public/Uploads/'; // 设置附件上传目录    // 上传单个文件 
                $info = $upload->uploadOne($_FILES['pic']);
                if(!$info) {
                 // 上传错误提示错误信息        
                 $this->error($upload->getError());    
                 }else{
                    // 上传成功 获取上传文件信息         
                    $data["pic"] = $info['savepath'].$info['savename'];
                }
            }
            if($article->create($data)){
                //验证通过
                if($article->save()){
                    //添加成功
                    $this->success("修改文章成功",U("showlist"),2);

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
        $type = D("type");
        $types = $type->select();
        $id = I("id");
        $res=$article->find($id);
        $this->assign("res",$res);
        $this->assign("types",$types);
        $this->display();
    }
    public function showlist(){
        // 获取数据
        $article = D("article");
        $res = $article->select();
        // $this->assign("res",$res);
        //分页显示信息
        $count=$article->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show= $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $article->limit($Page->firstRow.','.$Page->listRows)->relation(true)->Select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        // $page->setConfig('first','首页');
        // $page->setConfig('end','末页');
        $this->display();
    }
     //栏目删除
     public function shanchu(){
        $Id=I("id");
        $article=D("article");
        if($article->delete($Id)){
            //删除成功
            $this->success("删除成功",U("showlist"),2);
        }else{
            //删除失败
            $this->error("删除栏目失败");
        }
     }
}