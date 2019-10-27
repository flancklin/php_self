<?php
namespace frame;


class Application{
    private $app = [];

    function __construct($config)
    {
        $this->app['config'] = $config;
    }

    public function run(){
        $this->parseUrl();
        $this->exec();
        var_dump($this->app);
    }

    private function parseUrl(){//路由解析，分析出控制器的位置（路径和命名空间）
        echo "我在解析路由<br />";
    }
    private function exec(){//实列化控制器，调用方法
        echo "我在执行CMV<br />";
    }
}