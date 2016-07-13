<?php
namespace app\admin\controller;

class Mall extends Base
{

	/**
	 * 系统商城信息
	 * @author chouchong
	 */
	public function index()
	{
		return view('',['configs'=>model('Configs')->getConfigs()]);
	}
}
