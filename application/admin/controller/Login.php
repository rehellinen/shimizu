<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/1/31
 * Time: 20:32
 */

namespace app\admin\controller;


use think\Request;

class Login extends BaseController
{
    public function index()
    {
        return $this->fetch();
    }

    public function check()
    {
        print_r($_POST);exit;
    }
}