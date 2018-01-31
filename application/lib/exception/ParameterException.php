<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/10/17
 * Time: 21:01
 * E-mail: 1397153057@qq.com
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}