<?php
/**
 * Created by PhpStorm.
 * User: rehellinen
 * Date: 2018/3/21
 * Time: 22:34
 */

namespace app\common\model;


use think\Model;

class Shop extends Model
{
    public function getMediaIdAttr($value)
    {
        $media = (new Media())->get($value);
        return $media['url'];
    }

    public function getShop()
    {
        $data['status'] = array('neq', -1);
        return $this->where($data)->order('listorder desc, id desc')->paginate();
    }

    public function getIndexShop()
    {
        $data['status'] = 1;
        return $this->where($data)->order('listorder desc, id desc')->select();
    }
}