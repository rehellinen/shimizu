<?php
/**
 * Created by PhpStorm.
 * User: rehellinen
 * Date: 2018/3/21
 * Time: 22:33
 */

namespace app\admin\controller;

use think\Request;

class Shop extends BaseController
{
    public function index()
    {
        $shop = (new \app\common\model\Shop())->getShop();
        return $this->fetch('', [
            'shop' => $shop
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
            $shop = array(
                'media_id' => $mediaId,
                'status' => 0,
                'name' => $post['name'],
                'address' => $post['address'],
                'telephone' => $post['telephone']
            );
            $bannerRes = model('Shop')->insert($shop);

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
            $desert['address'] = $post['address'];
            $desert['telephone'] = $post['telephone'];
            $result = model('Shop')->where('id='.$post['id'])->update($desert);
            if($result){
                return show(1,'更新成功');
            }else{
                return show(0,'更新失败');
            }

        }else{
            $id = $_GET['id'];
            $result = model('Shop')->get($id);
            $url = $result['media_id'];
            return $this->fetch('', [
                'res' => $result,
                'url' => $url
            ]);
        }
    }
}