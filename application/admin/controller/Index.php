<?php
namespace app\admin\controller;

/**
 * Created by PhpStorm.
 * UserValidate: chen
 * Date: 2017/10/15
 * Time: 13:21
 */
class Index extends BaseController
{
    public function index()
    {
        return $this->fetch();
    }
}