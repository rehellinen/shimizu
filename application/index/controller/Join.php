<?php
/**
 * Created by PhpStorm.
 * User: rehellinen
 * Date: 2018/3/27
 * Time: 12:45
 */

namespace app\index\controller;


use app\common\model\Comment;

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

    public function comment()
    {
        $post = $this->request->post();
        $validate = (new \app\common\validate\Comment());
        if(!$validate->check($post)){
            return show(0, $validate->getError());
        }
        $data['name'] = $post['name'];
        $data['telephone'] = $post['telephone'];
        $data['question'] = $post['question'];

        Comment::create($data);
        return show(1, '留言成功');
    }
}