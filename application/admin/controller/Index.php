<?php
namespace app\admin\controller;

/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2017/10/15
 * Time: 13:21
 */
class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }


}