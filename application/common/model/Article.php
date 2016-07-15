<?php
namespace app\common\model;

use think\Model;
use think\Request;

class Article extends Model
{
    protected $autoWriteTimestamp = true;
    /**
     * 关联文章分类表
     * @author chouchong
     */
    public function parent()
    {
        return $this->belongsTo('ArticleCate','category_id');
        // return $this->hasMany('ArticleCate', 'id','category_id');
    }
    /**
     * 添加文章
     * @author chouchong
     */
    public function add($data)
    {        
        if($data['id']){
            $article = model('Article')->save($data,['id'=>$data['id']]);
            // $article = model('Article')->where('id',$data['id'])->update($data);
            return ['status' => $article];
        }else{                
            $article = model('Article')->insert($data);
            return ['status' => $article];
        }
    }
  
}
