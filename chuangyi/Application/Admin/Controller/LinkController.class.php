<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends Controller {
    public function lst(){
       $link= M('link'); // 实例化User对象
        $count= $link->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $link->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function add(){
        if(IS_POST){
            $data['li_id'] =I('li_id');
            $data['li_title'] =I('li_title');
            $data['li_url'] =I('li_url');
            $data['li_des'] =I('li_des');
            if($_FILES['li_pic']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath='./';
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $info=$upload->uploadOne($_FILES['li_pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功  
                     $data['li_pic']=$info['savepath'].$info['savename']; 
                }
            }
            $link= D('link');
            if($link->create($data)){
                if($link->add()){
                    $this->success('添加友情链接成功',U('lst'));
                }else{
                    $this->error('添加友情链接失败');
                }
            }else{
                $this->error($link->getError());
            }
            return;
        }
        $this->display();
    }
    public function edit(){
        $li_id= I('li_id');
        $link = D('link');
        $links = $link->find($li_id);
        $this->assign('links',$links);
        if(IS_POST){
            $data['li_id'] =I('li_id');
            $data['li_title'] =I('li_title');
            $data['li_url'] =I('li_url');
            $data['li_des'] =I('li_des');
            if($_FILES['li_pic']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath='./';
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $info=$upload->uploadOne($_FILES['li_pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功  
                     $data['li_pic']=$info['savepath'].$info['savename']; 
                }
            }
            $link= D('link');
            if($link->create($data)){
                if($link->save()){
                    $this->success('修改友情链接成功',U('lst'));
                }else{
                    $this->error('修改友情链接失败');
                }
            }else{
                $this->error($link->getError());
            }
            return;
        }
        $this->display();
    }
    public function shanchu(){
       $li_id= I('li_id');
       $link = D('link');
       if ($link->delete($li_id)) {
           $this->success('删除该文章成功',U('lst'));
       }else{
        $this->error('删除该文章失败');
       }
    }
     //批量删除
    public function bdel(){
        $bdel = I('bdel');
         $link = D('link');
        $bdels = implode(',', $bdel);
        if ($link->delete($bdels)) {
           $this->success('批量删除成功',U('lst'));
       }else{
        $this->error('批量删除失败');
       }
    }
}