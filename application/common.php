<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

function show($status, $message, $data = array())
{
    $result = array(
        'status' => $status,
        'message' => $message,
        'data' => $data
    );
    return json($result);
}

function showEditor($status, $data)
{
    header('Content-type:application/json;charset=UTF-8');
    if($status == 0){
        exit(json_encode(array('error'=>0,'url'=>$data)));
    }
    exit(json_encode(array('error'=>1,'url'=>'上传失败')));
}

function getMenuType($type)
{
    if($type===1){
        return '后台菜单';
    }
    if($type===2){
        return '前端导航';
    }
    return '';
}

function getStatus($status)
{
    if($status===0){
        return '未审核';
    }
    if($status===1){
        return '审核通过';
    }
    if($status===2){
        return '审核不通过';
    }
    if($status===-1){
        return '已删除';
    }
    return 0;
}
