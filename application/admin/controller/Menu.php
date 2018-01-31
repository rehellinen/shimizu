<?php
/**
 * Created by PhpStorm.
 * User: rehellinen
 * Date: 2017/10/15
 * Time: 14:44
 */

namespace app\admin\controller;


class Menu extends Base
{
    public function index()
    {
        $menu = model('menu')->getMenu();
        return $this->fetch('', [
            'menu' => $menu
        ]);
    }
}