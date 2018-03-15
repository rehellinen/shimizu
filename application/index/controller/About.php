<?php
/**
 * Created by PhpStorm.
 * User: rehellinen
 * Date: 2018/3/15
 * Time: 11:09
 */

namespace app\index\controller;


class About extends BaseController
{
    public function index()
    {
        return $this->fetch();
    }
}