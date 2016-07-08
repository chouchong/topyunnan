<?php
namespace app\admin\controller;

use \think\Loader;

class Rule extends Base{

	/**
	 * 权限列表
	 * @author chouchong
	 */
	public function index()
	{
		$ruleModel = Loader::model('Rule');
        $lists = $ruleModel->where('parent_id', 0)->order('sort', 'asc')->select();
        $this->assign('lists', $lists);
		return view('index');
	}
}
