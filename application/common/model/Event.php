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

    public function getIndexBigEvent()
    {
        $data['status'] = 1;
        return $this->where($data)->find();
    }

    public function getIndexEvents()
    {
        $data['status'] = 1;
        return $this->where($data)->order('id desc')->limit(6)->select();
    }

    public function getIndexAllEvents()
    {
        $data['status'] = 1;
        return $this->order('id desc')->where($data)->paginate(10);
    }

    public function getLeftEvent()
    {
        $data['status'] = 1;
        return $this->where($data)->order('id desc')->paginate(3);
    }
}