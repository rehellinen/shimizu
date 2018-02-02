<?php
/**
 * Created by PhpStorm.
 * UserValidate: rehellinen
 * Date: 2017/10/18
 * Time: 16:44
 */

namespace app\common\model;


use think\Model;

class Event extends Model
{
    public function getMediaIdAttr($value)
    {
        $media = (new Media())->get($value);
        return $media['url'];
    }

    public function getEvents()
    {
        $data['status'] = array('neq', -1);
        return $this->order('id desc')->where($data)->paginate(10);
    }

    public function getEventByID($id)
    {
        $data['status'] = array('neq', -1);
        $data['id'] = $id;
        return $this->find($data);
    }
}