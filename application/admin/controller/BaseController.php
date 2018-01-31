<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2017/10/15
 * Time: 13:22
 */

namespace app\admin\controller;

use think\Controller;
use think\Request;

class BaseController extends Controller
{
    public function _initialize()
    {


        // 获取导航栏的菜单列表
        $menu = model('menu')->getNavMenu();
        $this->assign('nav', $menu);
    }

    public function add()
    {
        $post = Request::instance()->post();
        if($post){
            $controller = Request::instance()->controller();
            $res = model($controller)->insert($post);
            if($res){
                return show(1,'新增成功');
            }else{
                return show(0,'新增失败');
            }
        }else{
            return $this->fetch();
        }
    }

    public function edit()
    {
        $post = Request::instance()->post();
        if($post){
            $controller = Request::instance()->controller();
            $result = model($controller)->where('id='.$post['id'])->update($post);
            if($result){
                return show(1,'更新成功');
            }else{
                return show(0,'更新失败');
            }

        }else{
            $id = $_GET['id'];
            $controller = Request::instance()->controller();
            $result = model($controller)->get($id)->toArray();
            return $this->fetch('', [
                'res' => $result
            ]);
        }
    }

    public function status()
    {
        $post = Request::instance()->post();
        $controller = Request::instance()->controller();
        $result = model($controller)->where('id='.$post['id'])->update($post);
        if($result){
            return show(1, '成功');
        }else{
            return show(0,'失败');
        }
    }

    public function listorder()
    {
        $post = Request::instance()->post();
        $controller = Request::instance()->controller();
        $result = model($controller)->where('id='.$post['id'])->update($post);
        if($result){
            return show(1, '排序成功');
        }else{
            return show(0,'排序失败');
        }
    }
}