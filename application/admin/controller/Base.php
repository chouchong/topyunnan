<?php
namespace app\admin\controller;

use \think\Config;
use \think\Controller;

class Base extends Controller{

	public function __construct()
	{
		parent::__construct();
		Config::set('default_return_type','json');
		$this->isUser();

		$module = $this->request->module();
		$controller = $this->request->controller();
		$action = $this->request->action();

		$activeRouter = $module.'/'.$controller.'/'.$action;

		$this->assign('uri', $activeRouter);
	}

	/**
	 * 判断用户登录
	 * @author chouchong
	 */
	public function isUser()
	{
		if(session('user.id') == null){
			$this->redirect(url('/login'));
		}
	}

}