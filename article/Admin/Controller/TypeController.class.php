<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends BaseController {
	//栏目加载列表页面
    public function showlist(){
    	// 获取数据
    	$typename = D("type");
    	$res = $typename->select();
    	// $this->assign("res",$res);
    	//分页显示信息
        $count=$typename->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show= $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $typename->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        // $page->setConfig('first','首页');
        // $page->setConfig('end','末页');
        $this->display();
    }
    //栏目加载添加页面
    public function tianjia(){
    	if(IS_POST){
            $data["typename"]=I("typename");
            $type=D("type");
            if($type->create($data)){
                //验证通过
                if($type->add($data)){
                    //添加成功
                    $this->success("添加栏目成功",U("showlist"),2);

                }else{

                    //添加失败
                    $this->error("添加栏目失败");

                }

            }else{
                //验证失败
                $this->error($type->getError());

            }
            return;
        }
        $this->display();
    }
    //栏目加载修改页面
    public function xiugai(){
    	if(IS_POST){
            $data["typename"]=I("typename");
            $data["id"]=I("typeId");
            $type=D("type");
            if($type->create($data)){
                //验证通过
                if($type->save()){
                    //添加成功
                    $this->success("修改栏目成功",U("showlist"),2);

                }else{

                    //添加失败
                    $this->error("修改栏目失败");

                }

            }else{
                //验证失败
                $this->error($type->getError());

            }
        	return;
        }
    	$typename = I('typename');
    	$typeId = I('id');
    	$this->assign('typename',$typename);
    	$this->assign('typeId',$typeId);
        $this->display();
    }
    //栏目删除
     public function shanchu(){
     	$typeId=I("id");
        $type=D("type");
        if($type->delete($typeId)){
        	//删除成功
            $this->success("删除成功",U("showlist"),2);
        }else{
        	//删除失败
            $this->error("删除栏目失败");
        }
     }
}