<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/10/17
 * Time: 21:21
 * E-mail: 1397153057@qq.com
 */

namespace app\lib\exception;


class ExampleException extends BaseException
{
    public $code = 400;//状态码，需重写
    public $msg = '';//异常信息，需重写
    public $errorCode = 10000;//自定义错误码，需重写
}

/*
 * 1.如果是用户行为或者验证错误需要重写以上信息，并且在可能发生异常处 throw new ExampleException();
 * 2.其他未知地方的异常将会在调试模式开启下显示具体信息，关闭下仅显示500，‘服务器错误’，99999’
 * */