<?php
/**
 * Created by PhpStorm.
 * UserValidate: fixright
 * Date: 2017/10/17
 * Time: 18:33
 * E-mail: 1397153057@qq.com
 */

namespace app\lib\validate;

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
            return $error = $this->error;
        }else{
            return true;
        }
    }

    public function getDataByRule($data)
    {
        $newData = [];
        $checkedArray = $this->scene[$this->sceneName];
        foreach ($checkedArray as $key => $value)
        {
            $newData[$value] = $data[$value];
        }

        return $newData;
    }

    protected function inNotEmpty($value, $rule='', $data='', $field='')
    {
        if (empty($value)) {
            return false;
        } else {
            return true;
        }
    }
}