<?php
namespace app\admin\controller;

use \think\Loader;
use \think\Request;

class Common
{
	/**
	 * 用户登录
	 * @author chouchong
	 */
	public function login()
	{
		$request = Request::instance();
		if($request->isPOST())
		{
			$user = array(
		 		'username' => input('post.usernamelogin'),
		 		'password' => input('post.password'),
		 		);
		 	$validate = Loader::validate('User');
			$result = $validate->scene('login')->check($user);
			if ($result !== true) {
	            return ['status' => -1, 'msg' => $validate->getError()];
	        }
	        $data = Loader::model('User')->login($user);
			return $data;
		}else{
			return view('auth/login');
		}
	}
}
?>