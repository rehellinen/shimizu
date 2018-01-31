<?php
/**
 * Created by PhpStorm.
 * User: rehellinen
 * Date: 2017/10/18
 * Time: 0:22
 */

namespace app\common\model;


use think\Model;

class Desert extends Model
{
    protected $table = 'all_deserts';
    public function getDesert()
    {
        $data['status'] = array('neq', -1);
        return $this->where($data)->order('id desc')->paginate();
    }
}