<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/2/1
 * Time: 21:25
 */

namespace app\index\controller;


use think\Controller;
use think\Request;

class BaseController extends Controller
{
    public function _initialize()
    {
        // 状态栏激活
        $controller = Request::instance()->controller();
        $nav = model('menu')->getIndexNavMenu();
        $this->assign('nav', $nav);
        $this->assign('controller', strtolower($controller));
    }

    public function getNextPage($data)
    {
        $currentPage = $data->currentPage();
        $hasMore = $data->hasMore();
        if($hasMore){
            return ++$currentPage;
        }
        return $currentPage;
    }
}