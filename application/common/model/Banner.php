<?php
/**
 * Created by PhpStorm.
 * UserValidate: rehellinen
 * Date: 2017/10/15
 * Time: 19:04
 */

namespace app\common\model;

use think\Model;

class Banner extends Model
{
    public function getMediaIdAttr($value)
    {
        $media = (new Media())->get($value);
        return $media['url'];
    }

    public function getBanner()
    {
        $data['status'] = array('neq', -1);
        return $this->where($data)->order('listorder desc, id desc')->paginate();
    }

    public function getIndexBanner()
    {
        $data['status'] = array('neq', -1);
        return $this->where($data)->order('listorder desc, id desc')->select()->toArray();
    }
}