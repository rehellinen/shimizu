<?php
/**
 * Created by PhpStorm.
 * UserValidate: rehellinen
 * Date: 2017/10/18
 * Time: 16:44
 */

namespace app\common\model;


use think\Model;

class News extends Model
{
    public function getNews()
    {
        $data['status'] = array('neq', -1);
        return $this->order('id desc')->where($data)->paginate(10);
    }

    public function getNewsByID($id)
    {
        $data['status'] = array('neq', -1);
        $data['id'] = $id;
        return $this->find($data);
    }
}