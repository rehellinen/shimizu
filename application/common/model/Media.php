<?php
/**
 * Created by PhpStorm.
 * UserValidate: chen
 * Date: 2017/10/17
 * Time: 19:14
 */

namespace app\common\model;


use think\Model;

class Media extends Model
{
    public function getUrlAttr($value)
    {
        return $value;
    }

    public function insertMedia($url)
    {
        $data['url'] = $url;
        $data['status'] = 1;
        $data['type'] = 2;
        return $this->save($data);

    }

    public function findMedia($url)
    {
        $data['url'] = $url;
        $res = $this->where($data)->find();
        return $res->id;
    }

    public function getMedia()
    {
        $data['status'] = array('neq' , -1);
        $data['type'] = 1;
        return $this->where($data)->order('id desc')->paginate();
    }
}
