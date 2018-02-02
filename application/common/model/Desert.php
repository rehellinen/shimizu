<?php
/**
 * Created by PhpStorm.
 * UserValidate: rehellinen
 * Date: 2017/10/18
 * Time: 0:22
 */

namespace app\common\model;


use think\Model;

class Desert extends Model
{
    protected $table = 'all_deserts';

    public function getMediaIdAttr($value)
    {
        $media = (new Media())->get($value);
        return $media['url'];
    }

    public function getDesert()
    {
        $data['status'] = array('neq', -1);
        return $this->where($data)->order('id desc')->paginate();
    }

    public function getIndexDesert()
    {
        $data['status'] = 1;
        return $this->where($data)->order('id desc')->limit(10)->select()->toArray();
    }

    public function getProductDeserts()
    {
        $data['status'] = 1;
        return $this->where($data)->order('id desc')->paginate();
    }
}