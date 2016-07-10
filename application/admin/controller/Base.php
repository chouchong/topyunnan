<?php
namespace app\admin\controller;

use \think\Config;
use \think\Controller;
use \think\Db;
use \think\Request;
use \think\Session;
use \think\Loader;

class Base extends Controller
{

	public function __construct()
	{
		parent::__construct();
		Config::set('default_return_type','json');
		$this->isUser();

		$module = $this->request->module();
		$controller = $this->request->controller();
		$action = $this->request->action();

		$activeRouter = $module.'/'.$controller.'/'.$action;
		$resource = Db::name('rule')->field('id,name,title,parent_id')->where('name',$activeRouter)->find();
		$this->assign('uri', $activeRouter);
		$this->assign('pid', $resource['parent_id']);
		$this->assign('userInfo', session('userInfo.username'));
		$this->getBreadcrumb();
	}

	/**
	 * 判断用户登录
	 * @author chouchong
	 */
	public function isUser()
	{
		if(session('userInfo.id') == null){
			$this->redirect(url('/login'));
		}
	}
	/**
     * 获取当前位置
     * @author chouchong
     */
    protected function getBreadcrumb()
    {
        $ruleData = Loader::model('Rule')->getMenusByRoleId(session('userInfo.rid'));
        $this->assign('navBar', $ruleData);
    }
}