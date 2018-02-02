<?php
namespace app\index\controller;

use app\common\model\Banner;
use app\common\model\Desert;
use app\common\model\News;

class Index extends BaseController
{
    public function index()
    {
        // 大轮播图
        $banner = (new Banner())->getIndexBanner();
        // 近期活动大图
//        $eventBig = (new News())->getIndexBigEvent();
        // 咨询三个图
        $newsThree = (new News())->getIndexThreeNews();
        // 下方甜品轮播
        $desert = (new Desert())->getIndexDesert();

        return $this->fetch('', [
            'banner' => $banner,
            'desert' => $desert,
            'newsThree' => $newsThree
        ]);
    }
}
