<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/2/1
 * Time: 21:31
 */

namespace app\index\controller;

use app\common\model\Banner;

class Product extends BaseController
{
    public function index()
    {
        // 大轮播图
        $banner = (new Banner())->getIndexBanner();

        return $this->fetch('', [
            'banner' => $banner
        ]);
    }
}