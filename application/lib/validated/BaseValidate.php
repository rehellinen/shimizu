<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/10/17
 * Time: 18:33
 * E-mail: 1397153057@qq.com
 */

namespace app\lib\validated;

use think\Exception;
use think\Validate;
use think\Request;

class BaseValidate extends Validate
{

    public function goCheck(){
        $request = Request::instance();
        $params = $request->param();

        $result = $this->check($params);
        if(!$result){
            $error = $this->error;
            throw new Exception($error);
        }
        else{
            return true;
        }
    }
}