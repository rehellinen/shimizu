<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/10/17
 * Time: 20:00
 * E-mail: 1397153057@qq.com
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    public $code = 400;
    public $msg = 'invalid parameters';
    public $errorCode = 999;


}