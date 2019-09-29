<?php

namespace Redis\Controller;

use Redis\Logic\RedisInstance;
use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $A = new RedisInstance();
        var_dump($A::set("a","2017"));
        var_dump($A::get("a"));
    }
}