<?php
namespace app\common\model;
use think\Model;

/**
 * Created by PhpStorm.
 * UserValidate: rehellinen
 * Date: 2017/10/15
 * Time: 15:11
 */
class Menu extends Model
{
    public function getMenu()
    {
        $data['status'] = array('neq', -1);
        return $this->order('listorder desc, id desc')->where($data)->paginate();
    }

    public function getNavMenu()
    {
        $data['status'] = 1;
        $data['type'] = 1;
        return $this->order('listorder desc, id desc')->where($data)->select();
    }
}