<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/10/17
 * Time: 18:33
 * E-mail: 1397153057@qq.com
 */

namespace app\lib\validated;

use think\Validate;
use think\Request;

class BaseValidate extends Validate
{
    private $sceneName;

    public function goCheck($scene){
        $params = Request::instance()->param();

        $this->sceneName = $scene;
        $result = $this->scene($scene)->check($params);
        if(!$result){
            $error = $this->error;
            return show(0, $error);
        }else{
            return true;
        }
    }

    public function getDataByRule($data)
    {
        $newData = [];
//        foreach ($this->rule)
    }
}