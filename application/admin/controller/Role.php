<?php
namespace app\admin\controller;

use \think\Loader;
use \think\Url;

class Role extends Base
{

	/**
	 * 角色列表
	 * @author chouchong
	 */
	public function index()
	{
		$lists = Loader::model('Role')->paginate(5);
		$this->assign('lists', $lists);
		return view();
	}
	/**
	 * 角色添加
	 * @author chouchong
	 */
	public function add()
	{
		if($this->request->isPOST()){
			$data = input('post.');
            if (loader::validate('Role')->scene('add')->check($data) === false) {
                return ['status'=>-1,'msg'=>loader::validate('Role')->getError()];
            }
            // 编辑时的添加
            if(input('post.id')>0){
            	$roleRow = Loader::model('Role')->find(input('post.id'));
            	if ($roleRow->editRole($data) !== false) {
            		return ['status'=>1];
            	}
            // 直接添加
            }else{
	            if (Loader::model('Role')->addRole($data) !== false) {
	                return ['status'=>1];
	            }
            }
            return ['status'=>-2,Loader::model('Role')->getError()];
		}
		$ruleModel = Loader::model('Rule');
        $lists = $ruleModel->where('parent_id', 0)->order('sort', 'asc')->select();
        $this->assign('lists', $lists);
		return view();
	}
	/**
	 * 编辑添加
	 * @author chouchong
	 */
	public function edit()
	{
		$ruleModel = Loader::model('Rule');
		$this->assign('role', Loader::model('Role')->find(input('param.id')));
	    $this->assign('rule', implode(',',array_column($ruleModel->getRulesByRoleId(input('param.id')), 'id')));
        $lists = $ruleModel->where('parent_id', 0)->order('sort', 'asc')->select();
        $this->assign('lists', $lists);
		return view();
	}
	/**
	 * 角色删除
	 * @author chouchong
	 */
	public function delete()
	{
		if(Loader::model('Role')->deleteRole(input('post.id')) === false){
			return ['status' => -1, 'msg' => '删除失败'];
		}
		return ['status' => 1, 'msg' => '删除成功'];
	}
}
