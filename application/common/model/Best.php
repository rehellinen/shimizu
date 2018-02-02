<?php
/**
 * Created by PhpStorm.
 * UserValidate: rehellinen
 * Date: 2017/10/19
 * Time: 0:06
 */

namespace app\common\model;


use think\Model;

class Best extends Model
{
    protected $table = 'best_deserts';

    public function getDesertsIdAttr($value)
    {
        $desert = (new Desert())->get($value)->toArray();
        return $desert;
    }

    public function getDesert()
    {
        $data['status'] = array('neq', -1);
        return $this->where($data)->order('listorder desc, id desc')->select()->toArray();
    }

    public function getIndexBest()
    {
        $data['status'] = 1;
        return $this->where($data)->order('listorder desc, id desc')->limit(5)->select()->toArray();
    }
}