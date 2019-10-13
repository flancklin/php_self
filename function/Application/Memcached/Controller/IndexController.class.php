<?php

namespace Memcached\Controller;

use Memcached\Logic\MemcachedInstance;
use Redis\Logic\RedisInstance;
use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $A = new MemcachedInstance();
        var_dump($A::add("aa","v1"));
    }
}