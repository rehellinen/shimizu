<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/2/1
 * Time: 21:31
 */

namespace app\index\controller;

use app\common\model\Banner;
use app\common\model\Best;
use app\common\model\Desert;

class Product extends BaseController
{
    public function index()
    {
        // 大轮播图
        $banner = (new Banner())->getIndexBanner();
        // 推荐甜品
        $bestDesert = (new Best())->getIndexBest();
        // 所有甜品
        $allDesert = (new Desert())->getProductDeserts();

        return $this->fetch('', [
            'banner' => $banner,
            'bestDesert' => $bestDesert,
            'allDesert' => $allDesert
        ]);
    }
}