<?php
/**
 * Created by PhpStorm.
 * User: rehellinen
 * Date: 2017/10/19
 * Time: 0:06
 */

namespace app\common\model;


use think\Model;

class Best extends Model
{
    protected $table = 'best_deserts';

    public function getDesert()
    {
        $data['status'] = array('neq', -1);
        return $this->where($data)->order('id desc')->paginate();
    }
}