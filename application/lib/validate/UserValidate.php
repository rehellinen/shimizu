<?php
/**
 * Created by PhpStorm.
 * UserValidate: chen
 * Date: 2018/1/31
 * Time: 21:01
 */

namespace app\lib\validate;


class UserValidate extends BaseValidate
{
    protected $rule = [
        ['name', 'require|inNotEmpty', '账号不能为空|账号不能为空'],
        ['password', 'require|inNotEmpty', '密码不能为空|密码不能为空']
    ];

    protected $scene = [
        'login' => ['name', 'password']
    ];
}