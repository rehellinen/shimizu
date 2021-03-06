<?php
/**
 * Created by PhpStorm.
 * UserValidate: rehellinen
 * Date: 2017/10/18
 * Time: 0:40
 */

namespace app\admin\controller;

use think\Request;

class Event extends BaseController
{
    public function index()
    {
        $events = (new \app\common\model\Event())->getEvents();
        return $this->fetch('', [
            'events' => $events
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
            $event = array(
                'media_id' => $mediaId,
                'content' => $post['content'],
                'title' => $post['title'],
                'status' => 0,
                'create_time' => time()
            );
            $eventRes = model('event')->insert($event);

            //判断
            if($mediaRes && $eventRes){
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
                $news['media_id'] = $mediaId;
            }

            //更新all_news表
            $news['title'] = $post['title'];
            $news['content'] = $post['content'];

            $result = model('news')->where('id='.$post['id'])->update($news);
            if($result){
                return show(1,'更新成功');
            }else{
                return show(0,'更新失败');
            }

        }else{
            $id = $_GET['id'];
            $result = model('event')->getEventByID($id)->toArray();

            $url = $result['media_id'];
            return $this->fetch('', [
                'res' => $result,
                'url' => $url
            ]);
        }
    }
}