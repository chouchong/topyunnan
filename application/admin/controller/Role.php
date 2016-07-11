<?php
namespace app\admin\controller;

use \think\Loader;

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
			$data      = Input('post.');
            $roleModel = Loader::model('Role');

            // if (loader::validate('Role')->scene('add')->check($data) === false) {
            //     return ;
            // }
            // if (($id = $roleModel->addRole($data)) !== false) {
            //     return ;
            // }
            return $data;
		}
		$ruleModel = Loader::model('Rule');
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
		if(Loader::model('Role')->where('id',input('post.id'))->delete()){
			return ['status' => 1, 'msg' => '删除成功'];
		}
		return ['status' => -1, 'msg' => '删除失败'];
	}
}
