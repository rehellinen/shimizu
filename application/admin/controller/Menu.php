<?php
/**
 * Created by PhpStorm.
 * UserValidate: rehellinen
 * Date: 2017/10/15
 * Time: 14:44
 */

namespace app\admin\controller;


class Menu extends BaseController
{
    public function index()
    {
        $menu = model('menu')->getMenu();
        return $this->fetch('', [
            'menu' => $menu
        ]);
    }
}