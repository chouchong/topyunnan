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
		if($this->request->isAjax()){
			$ruleId = Loader::model('Rule')->validate(true)->save(input('post.'));
			if ($ruleId > 0) {
				return ['status' => $ruleId];
            }
            return ['status' => -1, 'msg' => Loader::model('Rule')->getError()];
		}
        $this->assign('ruleRows', Loader::model('Rule')->getMenusByParentId(0));
		return view();
	}
}
