<?php
/**
 * Created by PhpStorm.
 * User: rehellinen
 * Date: 2018/3/15
 * Time: 11:22
 */

namespace app\index\controller;


use app\common\model\Desert;
use think\Request;

class Detail extends BaseController
{
    public function index()
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
        return $this->fetch('', [
            'desert' => $desert,
            'leftDesert' => $leftDesert,
            'id' => $product_id
        ]);
    }
}