<?php
namespace Redis\Logic;


class RedisInstance{
    protected static $handler = '';
    protected function instance(){
        if ( !extension_loaded('redis') ) E(L('_NOT_SUPPORT_').':redis');
        if(!self::$handler){
            self::$handler = new \Redis();
            $res = self::$handler->connect('47.97.183.226');//'pconnect' : 'connect';
            if(!$res) E(__CLASS__.':'.L('_METHOD_NOT_EXIST_'));
            $res = self::$handler->auth("Redis1234");
            if(!$res) E(__CLASS__.':'.L('_REDIS_PASSWORD_WRONG_'));
        }
        return self::$handler;
    }

    public static function __callStatic($method,$args){
        //调用缓存类型自己的方法
        if(method_exists(self::instance(), $method)){
            return call_user_func_array(array(self::instance(),$method), $args);
        }else{
            E(__CLASS__.':'.$method.L('_METHOD_NOT_EXIST_'));
            return;
        }
    }
}