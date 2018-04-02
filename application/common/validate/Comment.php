<?php
namespace app\common\validate;
use think\Validate;

/**
 * Created by PhpStorm.
 * User: rehellinen
 * Date: 2018/4/2
 * Time: 16:33
 */
class Comment extends Validate
{
    protected $rule = [
        ['name', 'require|chsAlpha'],
        ['telephone', 'require|number'],
        ['question', 'require|chsAlpha'],
    ];
}