<?php
/**
 * Created by PhpStorm.
 * User: rehellinen
 * Date: 2017/10/17
 * Time: 23:56
 */

namespace app\admin\controller;


class Media extends BaseController
{
    public function index()
    {
        $media = model('Media')->getMedia();
        return $this->fetch('', [
            'media' => $media
        ]);
    }
}