<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/2/1
 * Time: 21:25
 */

namespace app\index\controller;


use think\Controller;

class BaseController extends Controller
{
    public function _initialize()
    {
        $nav = model('menu')->getIndexNavMenu();
        $this->assign('nav', $nav);
    }
}