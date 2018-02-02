<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/2/1
 * Time: 21:09
 */

namespace app\index\controller;

class News extends BaseController
{
    public function index()
    {
        $news = (new \app\common\model\News())->getIndexNews();

        return $this->fetch('', [
            'news' => $news
        ]);
    }
}