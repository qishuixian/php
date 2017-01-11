<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller {
    public function lst(){
        // 获取数据
        $category = D("category");
        $res = $category->category();
        // $res = $category->select();
        $this->assign("res",$res);
        $this->display();
    }
    public function add(){
         if(IS_POST){
            $data["cate_id"]=I("cate_id");
            $data["cate_name"]=I("cate_name");
            $data["cate_ename"]=I("cate_ename");
            $data["cate_keywords"]=I("cate_keywords");
            $data["cate_desc"]=I("cate_desc");
            $data["cate_type"]=I("cate_type");
            $data["parentid"]=I("parentid");
            $data["cate_content"]=I("cate_content");
            if($_FILES["cate_pic"]["tmp_name"]!=""){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728 ;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath="./";
                $upload->savePath = './Public/Uploads/'; // 设置附件上传目录    // 上传单个文件 
                $info = $upload->uploadOne($_FILES['cate_pic']);
                if(!$info) {
                 // 上传错误提示错误信息        
                 $this->error($upload->getError());    
                 }else{
                    // 上传成功 获取上传文件信息         
                    $data["cate_pic"] = $info['savepath'].$info['savename'];
                }
            }
            $category=D("category");
            if($category->create($data)){
                //验证通过
                if($category->add($data)){
                    //添加成功
                    $this->success("添加栏目成功",U("lst"),2);

                }else{

                    //添加失败
                    $this->error("添加栏目失败");

                }

            }else{
                //验证失败
                $this->error($category->getError());

            }
            return;
        }
        $category=D("category");
        $res = $category->category();
        $this->assign("res",$res);
        $this->display();
    }
    public function edit(){
        $cate_id=I("cate_id");
        $category=D("category");
        $res = $category->find($cate_id);
        $this->assign("res",$res);
        if(IS_POST){
            $data["cate_id"]=I("cate_id");
            $data["cate_name"]=I("cate_name");
            $data["cate_ename"]=I("cate_ename");
            $data["cate_keywords"]=I("cate_keywords");
            $data["cate_desc"]=I("cate_desc");
            $data["cate_type"]=I("cate_type");
            $data["parentid"]=I("parentid");
            $data["cate_content"]=I("cate_content");
            $category=D("category");
            if($_FILES["cate_pic"]["tmp_name"]!=""){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728 ;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath="./";
                $upload->savePath = './Public/Uploads/'; // 设置附件上传目录    // 上传单个文件 
                $info = $upload->uploadOne($_FILES['cate_pic']);
                if(!$info) {
                 // 上传错误提示错误信息        
                 $this->error($upload->getError());    
                 }else{
                    // 上传成功 获取上传文件信息         
                    $data["cate_pic"] = $info['savepath'].$info['savename'];
                }
            }
            if($category->create($data)){
                //验证通过
                if($category->save()){
                    //添加成功
                    $this->success("修改栏目成功",U("lst"),2);

                }else{

                    //添加失败
                    $this->error("修改栏目失败");

                }

            }else{
                //验证失败
                $this->error($category->getError());

            }
             return;
        }
        
        $categorys=D("category");
        $ress = $categorys->category();
        $this->assign("ress",$ress);
        $this->display();
    }
     //栏目删除
    public function shanchu(){
        $cate_id=I("cate_id");
        $category=D("category");
        if($category->delete($cate_id)){
            //删除成功
            $this->success("删除成功",U("lst"),2);
        }else{
            //删除失败
            $this->error("删除栏目失败");
        }
    }
    //批量删除
    public function dbel(){
        $dbel = I('dbel');
        //var_dump()方法是判断一个变量的类型与长度,并输出变量的数值,如果变量有值输的是变量的值并回返数据类型.此函数显示关于一个或多个表达式的结构信息，包括表达式的类型与值。数组将递归展开值，通过缩进显示其结构。
        // var_dump($dbel);
        if($dbel){
            //implode() 函数返回由数组元素组合成的字符串。
            $dbelid = implode(',',$dbel);
            // echo $dbelid;
            // die;
            $category = D("category");
            if ($category->delete($dbelid)){
                //删除成功
                $this->success("删除成功",U("lst"),2);
            }else {
                //删除失败
                $this->error("删除栏目失败");
            }
        }
    }
}