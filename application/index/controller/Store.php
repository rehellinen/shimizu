<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/2/1
 * Time: 21:34
 */

namespace app\index\controller;


use app\common\model\Shop;

class Store extends BaseController
{
    public function index()
    {
        $store = (new Shop())->getIndexShop();
        return $this->fetch('', [
            'store' => $store
        ]);
    }
}