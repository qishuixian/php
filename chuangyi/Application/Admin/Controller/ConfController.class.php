<?php
namespace Admin\Controller;
use Think\Controller;
class ConfController extends Controller {
    public function lst(){
        $conf = D('conf');
        $count= $conf->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $list = $conf->order('cf_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('confs',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function add(){
        //没有图片，文字，可以直接接收就可以了
        $conf = D('conf');
        if (IS_POST) {
           if($conf->create()){
             if ($conf->add()) {
                 $this->success('配置添加成功！',U('lst'));
             }else{
                $this->error('配置添加失败！');
             }
           }else{
             $this->error($conf->getError());
           }
        return;
        }
        $this->display();
    }
    public function edit(){
        $conf = D('conf');
        $confss = I('cf_id');
        $confs = $conf->find($confss);
        $this->assign('confs',$confs);
        if(IS_POST){
            if($conf->create()){
                if($conf->save()){
                   $this->success('配置修改成功！',U('lst')); 
                }else{
                    $this->error("配置修改失败！");
                }
            }else{
                $this->error($conf->getError());
            }
            return;
        }
        $this->display();
    }
    public function shanchu(){
        $conf = D('conf');
        $confss = I('cf_id');
        if ($conf->delete($confss)) {
           $this->success('删除成功',U('lst'));
        }else{
            $this->error('删除失败！');
        }
    }
     //批量删除
    public function bdel(){
       $conf = D('conf');
       $bdel = I('bdel');
       $bdels = implode(',', $bdel);
       if ($conf->delete($bdels)) {
           $this->success('删除成功',U('lst'));
        }else{
            $this->error('删除失败！');
        }
    }
    public function Conflst(){
        $conf = D('conf');
        $confs= $conf->select();
        $this->assign('confs',$confs);
        if(IS_POST){
            $ret = array();
            $ret = $_POST;
            // var_dump($ret);
            // die;
            if($conf->xiugai($ret) !==false){
                $this->success('修改配置项成功',U('conflst'));
            }else{
                $this->error('修改配置项失败');
            }
            return;
        }
        $this->display();

    }
}