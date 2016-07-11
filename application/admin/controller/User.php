<?php
namespace app\admin\controller;

use \think\Loader;

class User extends Base
{
	/**
	 * 管理员列表
	 * @author chouchong
	 */
	public function index()
	{
		$lists = Loader::model('User')->paginate(10);
		$this->assign('lists', $lists);
		return view();
	}
	/**
	 * 管理员列表
	 * @author chouchong
	 */
	public function add()
	{
		if($this->request->isPOST())
		{
		 	$validate = Loader::validate('User');
			$result = $validate->scene('add')->check(input('post.'));
			if ($result !== true) {
	            return ['status' => -1, 'msg' => $validate->getError()];
	        }
	        $data = Loader::model('User')->authSave(input('post.'));
			return $data;
		}else{
			$lists = Loader::model('Role')->select();
			$this->assign('lists', $lists);
			return view();
		}
	}
	/**
	 * 管理员删除
	 * @author chouchong
	 */
	public function delete()
	{
		if(Loader::model('User')->where('id',input('post.id'))->delete()){
			return ['status' => 1, 'msg' => '删除成功'];
		}
		return ['status' => -1, 'msg' => '删除失败'];
	}
}
?>