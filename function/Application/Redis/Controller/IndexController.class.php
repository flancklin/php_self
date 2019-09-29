<?php

namespace Redis\Controller;

use Redis\Logic\RedisInstance;
use Think\Controller;

class IndexController extends Controller
{
    public function g()
    {
        $A = new RedisInstance();
        var_dump("t");
        var_dump($A::subscribe(array('qa', 'chan-2', 'chan-3'), function ($redis, $chan, $msg) {
            switch ($chan) {
                case 'chan-1':
                    break;
                case 'chan-2':
                    break;
                case 'chan-2':
                    break;
            }
            var_dump(json_encode($redis, $chan, $msg));
        }));
    }

    public function p()
    {
        $A = new RedisInstance();
        var_dump($A::publish("qa", I("get.sv/s")));
    }
}