<?php

namespace Redis\Controller;

use Redis\Logic\RedisInstance;
use Think\Controller;

class SubscribeController extends Controller
{
    public function sub()
    {
        $A = new RedisInstance();
        $A::set("a1", "1-".rand(0,9999999));
        var_dump($A::subscribe(array('qa', 'chan-2', 'chan-3'), function ($redis, $chan, $msg) {
            $a = new \Redis();
            $a->connect('47.97.183.226');
            $a->auth("Redis1234");
            $a->set("a2",json_encode($redis, $chan, $msg).'-'.rand(0,88888888));
        }));
        ;
        $A::set("a3", "3-".rand(0,9999999));
    }

    public function publish()
    {
        $A = new RedisInstance();
        var_dump($A::publish("qa", I("get.sv/s")));
    }
}