<?php
/**
 * Created by PhpStorm.
 * UserValidate: rehellinen
 * Date: 2017/10/18
 * Time: 0:40
 */

namespace app\admin\controller;

use think\Request;

class News extends BaseController
{
    public function index()
    {
        $news = model('news')->getNews();
        return $this->fetch('', [
            'news' => $news
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

            //插入到news表
            $news = array(
                'media_id' => $mediaId,
                'content' => $post['content'],
                'title' => $post['title'],
                'status' => 0,
                'create_time' => time()
            );
            $newsRes = model('News')->insert($news);

            //判断
            if($mediaRes && $newsRes){
                return show(1,'新增成功');
            }else{
                return show(0,'新增失败');
            }
        }else{
            return $this->fetch();
        }
    }
}