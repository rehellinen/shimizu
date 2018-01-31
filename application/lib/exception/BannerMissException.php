<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/10/17
 * Time: 20:10
 * E-mail: 1397153057@qq.com
 */

namespace app\lib\exception;




use think\Exception;

class BannerMissException extends Exception
{
    public $code = 404;
    public $msg = 'global:your required resource are not found';
    public $errorCode = 10001;
}