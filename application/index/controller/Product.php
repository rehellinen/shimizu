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
use think\Request;

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

    public function detail()
    {
        $get = Request::instance()->get();
        if(!$get){
            return '没有传入甜品id';
        }
        // 甜品详情
        $product_id = $get['id'];
        $desert = (new Desert())->find($product_id);

        // 左侧产品
        $leftDesert = (new Desert())->getLeftDeserts();
        $currentPage = $this->getNextPage($leftDesert);

        return $this->fetch('', [
            'desert' => $desert,
            'leftDesert' => $leftDesert,
            'id' => $product_id,
            'page' => $currentPage
        ]);
    }
}