<?php
/**
 * Created by PhpStorm.
 * UserValidate: fixright
 * Date: 2017/10/17
 * Time: 18:35
 * E-mail: 1397153057@qq.com
 */

namespace app\lib\validate;





class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected function isPositiveInteger($value, $rule = '',
                                         $data = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }
        else{
            return $field.'必须是正整数';
        }
    }

    protected $scene = [

    ];
}