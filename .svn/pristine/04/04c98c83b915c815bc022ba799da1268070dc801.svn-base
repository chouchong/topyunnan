<?php
namespace app\admin\controller;

use app\common\tools\Strings;

class Upload extends Base
{
    /**
     * dan图片上传界面
     * @author chouchong
     */
    public function index($id = 'editor')
    {
        if ($this->request->isPost()) {
            $optput = ['error' => '上传失败'];

            $file = request()->file('imgFile');
            $info = $file->move(STATIC_PATH . DS . $id . DS);
            if ($info) {
                $optput['file']  = Strings::fileWebLink($info->getLinkTarget());
                $optput['error'] = null;
            } else {
                $optput['error'] = $file->getError();
            }
            $optput['data'] = count($file);
            return $optput;
        }
        return view('',['id'=>$id]);
    }
    /**
     * duo图片上传界面
     * @author chouchong
     */
    public function upload()
    {
        if ($this->request->isPost()) {
            $files = request()->file('imgFile');
            foreach($files as $file){
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    $optput['file'][]  = Strings::fileWebLink($info->getLinkTarget());
                    $optput['error'] = null;
                }else{
                    $optput['error'] = $file->getError();
                }
            }
            return $optput;
        }
        return view();
    }
}
