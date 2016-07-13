<?php
namespace app\common\model;

use \think\Model;

class Configs extends Model
{
    protected $auto = ['create_time','update_time'];

    /**
     * 获取系统信息
     * @author chouchong
     */
    public function getConfigs()
    {
        $rs = $this->select();
        $configs = [];
        if(count($rs)>0){
            foreach ($rs as $key=>$v){
                $configs[] = $v;
            }
        }
        unset($rs);
        return $configs;
    }
}
