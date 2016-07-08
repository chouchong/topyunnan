<?php
namespace app\common\model;

use \think\Db;
use \think\Model;

class Role extends Model
{
    protected $auto = ['status'];

    protected $type = [
        'id'          => 'integer',
        'status'      => 'integer',
        'create_time' => 'datetime',
        'update_time' => 'datetime',
    ];

}
