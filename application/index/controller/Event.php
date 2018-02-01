<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/2/1
 * Time: 21:25
 */

namespace app\index\controller;


class Event extends BaseController
{
    public function index()
    {
        return $this->fetch();
    }
}