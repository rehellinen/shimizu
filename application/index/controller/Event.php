<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/2/1
 * Time: 21:25
 */

namespace app\index\controller;


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
}