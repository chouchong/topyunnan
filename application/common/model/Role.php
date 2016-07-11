<?php
namespace app\common\model;

use \think\Db;
use \think\Model;
use \PDOException;

class Role extends Model
{
    protected $auto = ['status'];
    /**
     * 多对多关联权限表
     * @author chouchong
     */
    public function rule()
    {
        return $this->belongsToMany('Rule', 'role_rule', 'rule_id', 'role_id');
    }
    /**
     * 添加角色
     * @author chouchong
     */
    public function addRole(array $data)
    {
        return Db::transaction(function () use ($data) {
            $roleModel = new Role;

            $roleId = $roleModel->save([
                'name'   => $data['name']
            ]);

            if ($roleId === false) {
                throw new PDOException($roleModel->getError());
            }

            if (isset($data['rules']) && is_array($data['rules']) && !empty($data['rules'])) {
                $roleModel     = $roleModel->find($roleId);
                $data['rules'] = array_map('intval', $data['rules']);
                //插入关联表
                $roleModel->rule()->saveAll($data['rules']);
            }

            return $roleId;
        });
    }

}
