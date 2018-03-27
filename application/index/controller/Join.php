<?php
/**
 * Created by PhpStorm.
 * User: rehellinen
 * Date: 2018/3/27
 * Time: 12:45
 */

namespace app\index\controller;


class Join extends BaseController
{
    public function index()
    {
        return $this->fetch();
    }

    public function process()
    {
        $res = (new \app\common\model\Join())->get(1);
        return $this->fetch('', [
            'res' => $res
        ]);
    }

    public function condition()
    {
        $res = (new \app\common\model\Join())->get(1);
        return $this->fetch('', [
            'res' => $res
        ]);
    }

    public function contact()
    {
        return $this->fetch();
    }
}