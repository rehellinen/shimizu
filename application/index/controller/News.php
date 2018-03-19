<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/2/1
 * Time: 21:09
 */

namespace app\index\controller;

use think\Request;

class News extends BaseController
{
    public function index()
    {
        $news = (new \app\common\model\News())->getIndexNews();

        return $this->fetch('', [
            'news' => $news
        ]);
    }

    public function detail()
    {
        $get = Request::instance()->get();
        if(!$get){
            return '没有传入id';
        }
        $news_id = $get['news_id'];
        $news = (new \app\common\model\News())->find($news_id);

        // 左侧产品
        $left = (new \app\common\model\News())->getLeftNews();
        $currentPage = $this->getNextPage($left);

        return $this->fetch('', [
            'news' => $news,
            'left' => $left,
            'id' => $news_id,
            'page' => $currentPage
        ]);
    }
}