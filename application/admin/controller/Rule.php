<?php
namespace app\admin\controller;

use \think\Loader;

class Rule extends Base
{

	/**
	 * 权限列表
	 * @author chouchong
	 */
	public function index()
	{
		$ruleModel = Loader::model('Rule');
        $lists = $ruleModel->where('parent_id', 0)->order('sort', 'asc')->paginate(5);
        $this->assign('lists', $lists);
		return view();
	}
	/**
	 * 权限节点添加
	 * @author chouchong
	 */
	public function add()
	{
		$ruleModel = Loader::model('Rule');
		if($this->request->isAjax()){
			if(input('post.id')>0){
				if ($ruleModel->save(input('post.'),['id'=>input('post.id')]) != false) {
	                return ['status' => 1];
	            }
			}
			else{
            	$ruleId = $ruleModel->validate(true)->save(input('post.'));
				if ($ruleId > 0) {
					return ['status' => $ruleId];
	            }
            }
            return ['status' => -1, 'msg' => $ruleModel->getError()];
		}
        $this->assign('ruleRows', $ruleModel->getMenusByParentId(0));
		return view();
	}
	/**
	 * 权限节点修改
	 * @author chouchong
	 */
	public function edit()
	{
		$this->assign('rule',Loader::model('Rule')->find(input('param.id')));
		$this->assign('ruleRows', Loader::model('Rule')->getMenusByParentId(0));
        return view();
	}
	/**
	 * 权限节点删除
	 * @author chouchong
	 */
	public function delete()
	{

        if (Loader::model('Rule')->deleteRule(input('post.id')) === false) {
            return ['status' => -1, 'msg' => '删除失败'];
		}
		return ['status' => 1, 'msg' => '删除成功'];
	}
}
