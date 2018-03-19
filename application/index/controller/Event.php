<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/2/1
 * Time: 21:25
 */

namespace app\index\controller;

use think\Request;

class Event extends BaseController
{
    public function index()
    {
        $events = (new \app\common\model\Event())->getIndexAllEvents();

        // 近期活动大图
        $eventBig = (new \app\common\model\Event())->getIndexBigEvent();

        return $this->fetch('', [
            'events' => $events,
            'eventBig' => $eventBig
        ]);
    }

    public function detail()
    {
        $get = Request::instance()->get();
        if(!$get){
            return '没有传入id';
        }
        $event_id = $get['event_id'];
        $event = (new \app\common\model\Event())->find($event_id);

        // 左侧产品
        $left = (new \app\common\model\Event())->getLeftEvent();
        $currentPage = $this->getNextPage($left);

        return $this->fetch('', [
            'event' => $event,
            'left' => $left,
            'id' => $event_id,
            'page' => $currentPage
        ]);
    }
}