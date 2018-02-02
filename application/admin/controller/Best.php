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
        $desert = model('best')->getDesert();

        return $this->fetch('', [
            'desert' => $desert
        ]);
    }
}