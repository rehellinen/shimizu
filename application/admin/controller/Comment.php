<?php
/**
 * Created by PhpStorm.
 * User: rehellinen
 * Date: 2018/4/2
 * Time: 16:41
 */

namespace app\admin\controller;


class Comment extends BaseController
{
    public function index()
    {
        $comment = (new \app\common\model\Comment())->where([
            'status' => 1
        ])->order('id desc')->paginate();
        return $this->fetch('', [
            'comment' => $comment
        ]);
    }
}