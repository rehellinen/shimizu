<?php
/**
 * Created by PhpStorm.
 * UserValidate: chen
 * Date: 2017/10/17
 * Time: 19:05
 */

namespace app\admin\controller;

use think\Request;


class Image extends BaseController
{
    public function upload()
    {
        $file = Request::instance()->file('photo');
        //目录
        $info = $file->move('upload');
        if($info && $info->getPathname()){
            return show(1, '图片上传成功', '\\'.$info->getPathname());
        }
        return show(0,'图片上传失败');
    }

    public function editor()
    {
        $file = Request::instance()->file('imgFile');
        $info = $file->move('upload');
        if($info && $info->getPathname()){
            return showEditor(1, '\\'.$info->getPathname());
        }
        return showEditor(0,'图片上传失败');
    }

    public function video()
    {
        $file = Request::instance()->file('video');
        //目录
        $info = $file->move('video');
        if($info && $info->getPathname()){
            return show(1, '视频上传成功', '\\'.$info->getPathname());
        }
        return show(0,'视频上传失败');
    }
}