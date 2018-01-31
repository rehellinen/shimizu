<?php
/**
 * Created by PhpStorm.
 * UserValidate: chen
 * Date: 2018/1/31
 * Time: 20:32
 */

namespace app\admin\controller;


use app\lib\validate\UserValidate;
use think\Controller;
use think\Request;
use think\Session;

class Login extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function check()
    {
        $post = Request::instance()->post();
        $userValidate = new UserValidate();

        $res = $userValidate->goCheck('login');
        if($res!==true){
            return show(0, $res);
        }

        $name = $post['name'];
        $password = $post['password'];

        if($name != config('password.name')){
            return show(0, '该用户不存在');
        }
        if($password != config('password.password')){
            return show(0, '密码不正确');
        }

        Session::set('loginUser', $name);
        return show(1, '登陆成功');
    }

    public function loginOut(){
        Session::set('loginUser', '');
        $this->redirect('admin/login/index');
    }
}