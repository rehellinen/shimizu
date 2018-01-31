<?php
/**
 * Created by PhpStorm.
 * User: rehellinen
 * Date: 2017/10/15
 * Time: 19:03
 */

namespace app\admin\controller;

use think\Request;


class Banner extends BaseController
{
    public function index()
    {
        $banner = model('Banner')->getBanner();
        $page = $banner->render();
        $banner = collection($banner)->toArray();
        $res = array();
        foreach ($banner as $key => $value){
            if(is_array($value)){
                foreach ($value as $key2 => $value2){
                    if(is_array($value2)){
                        foreach ($value2 as $key3 => $value3){
                            if($key3 === 'media_id'){
                                $media = model('Media')->get($value3)->toArray();
                                $res[$key2][$key3] = $media['url'];
                            }else{
                                $res[$key2][$key3] = $value3;
                            }

                        }
                    }
                }
            }
        }

        return $this->fetch('', [
            'banner' => $res,
            'page' => $page
        ]);
    }

    public function add()
    {
        $post = Request::instance()->post();
        if($post){
            //插入到media表
            $mediaRes = model('Media')->insertMedia($post['url']);
            //根据url获取id
            $mediaId = model('Media')->findMedia($post['url']);

            //插入到banner表
            $banner = array(
                'media_id' => $mediaId,
                'status' => 0
            );
            $bannerRes = model('Banner')->insert($banner);

            //判断
            if($mediaRes && $bannerRes){
                return show(1,'新增成功');
            }else{
                return show(0,'新增失败');
            }
        }else{
            return $this->fetch();
        }
    }

    public function edit()
    {
        $post = Request::instance()->post();
        if($post){
            if($post['url']) {
                //插入到media表
                $mediaRes = model('Media')->insertMedia($post['url']);
                //根据url获取id
                $mediaId = model('Media')->findMedia($post['url']);
            }

                //更新banner表
            $banner['media_id'] = $mediaId;
            $result = model('Banner')->where('id='.$post['id'])->update($banner);
            if($result || $mediaRes){
                return show(1,'更新成功');
            }else{
                return show(0,'更新失败');
            }

        }else{
            $id = $_GET['id'];
            $result = model('Banner')->get($id)->toArray();

            $media = model('Media')->get($result['media_id'])->toArray();
            $url = $media['url'];
            return $this->fetch('', [
                'res' => $result,
                'url' => $url
            ]);
        }
    }
}