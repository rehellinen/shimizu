<?php
/**
 * Created by PhpStorm.
 * UserValidate: rehellinen
 * Date: 2017/10/18
 * Time: 0:20
 */

namespace app\admin\controller;

use think\Request;

class Desert extends BaseController
{
    public function index()
    {
        $desertArr = model('desert')->getDesert()->toArray();
        $desert = $desertArr['data'];
        foreach ($desert as $key => $value){
            foreach ($value as $key2 => $value2){
                if($key2 === 'media_id'){
                    $media = model('Media')->get($value2)->toArray();
                    $desert[$key][$key2] = $media['url'];
                }
            }
        }

        return $this->fetch('', [
            'desert' => $desert
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

            //插入到all_desert表
            $desert = array(
                'media_id' => $mediaId,
                'status' => 0,
                'name' => $post['name'],
                'introduction' => $post['introduction'],
                'price' => $post['price']
            );
            $bannerRes = model('Desert')->insert($desert);

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
            if($post['url']){
                //插入到media表
                $mediaRes = model('Media')->insertMedia($post['url']);
                //根据url获取id
                $mediaId = model('Media')->findMedia($post['url']);
                $desert['media_id'] = $mediaId;
            }

            //更新all_desert表
            $desert['name'] = $post['name'];
            $desert['introduction'] = $post['introduction'];
            $desert['price'] = $post['price'];
            $result = model('Desert')->where('id='.$post['id'])->update($desert);
            if($result){
                return show(1,'更新成功');
            }else{
                return show(0,'更新失败');
            }

        }else{
            $id = $_GET['id'];
            $result = model('Desert')->get($id)->toArray();

            $media = model('Media')->get($result['media_id'])->toArray();
            $url = $media['url'];
            return $this->fetch('', [
                'res' => $result,
                'url' => $url
            ]);
        }
    }

    public function push()
    {
        $post = Request::instance()->post();
        $res = [];
        $status = true;

        foreach ($post as $key => $value)
        {
            $newArray['deserts_id'] = $value;
            $res[$key] = model('Best')->insert($newArray);
        }

        foreach ($res as $key => $value)
        {
            if(!$value){
                $status = false;
            }
        }

        if($status){
            return show(1, '推送成功');
        }else{
            return show(0, '推送失败');
        }
    }
}