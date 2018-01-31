<?php
/**
 * Created by PhpStorm.
 * UserValidate: rehellinen
 * Date: 2017/10/18
 * Time: 0:38
 */

namespace app\admin\controller;


class Best extends BaseController
{
    public function index()
    {
        $desertArr = model('best')->getDesert()->toArray();
        $desert = $desertArr['data'];
        foreach ($desert as $key => $value){
            foreach ($value as $key2 => $value2){
                //根据media_id获取图片链接
                if($key2 === 'media_id'){
                    $media = model('Media')->get($value2)->toArray();
                    $desert[$key][$key2] = $media['url'];
                }

                //根据deserts_id获取甜品信息
                if($key2 === 'deserts_id'){
                    $res = model('desert')->get($value2)->toArray();
                    $desert[$key]['name'] = $res['name'];
                }
            }
        }

        return $this->fetch('', [
            'desert' => $desert
        ]);
    }
}