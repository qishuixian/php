<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
    
	public function lst(){
		$admin=D('admin');
		$admins=$admin->select();
		$this->assign('admins',$admins);
		$this->display();
    }
	
	public function add(){
		if(IS_POST){
		$admin=D('admin');
		$condition['ad_name']=I('ad_name');
		$condition['ad_password']=md5(I('ad_password'));
		if($admin->create($condition)){
			if($admin->add()){
				$this->success('添加管理员成功！',U('lst'));
			}else{
				$this->error('添加管理员失败！');
			}
		}else{
			$this->error($admin->getError());
		}
		
		return;
		}
		$this->display();
    }
	
	public function edit(){
		$admin=D('admin');
		if(IS_POST){
		$condition['ad_id']=I('ad_id');
		$condition['ad_name']=I('ad_name');
		$condition['ad_password']=md5(I('ad_password'));
		if($admin->create($condition)){
			if($admin->save()){
				$this->success('修改管理员成功！',U('lst'));
			}else{
				$this->error('修改管理员失败！');
			}
		}else{
			$this->error($admin->getError());
		}
		
		return;
		}
		$ad_id=I('ad_id');
		$admins=$admin->find($ad_id);
		$this->assign('admins',$admins);
		$this->display();
    }

	public function del($ad_id){
		$admin=D('admin');
		if($admin->delete($ad_id)){
			$this->success('管理员删除成功！',U('lst'));
		}else{
			$this->error('管理员删除失败！');
		}
	
	}
	
	public function bdel(){
		$admin=D('admin');
		$bdel=I('bdel');
		$bdel=implode(',',$bdel);
		if($admin->delete($bdel)){
			$this->success('管理员批量删除成功！',U('lst'));
		}else{
			$this->error('管理员批量删除失败！');
		}
		
	}	
	

















}