<?php

/**
 * @param $class
 *
 * 准确的说，自动加载加载的是文件，而不是类。
 * 类PRINTIT
 *
 *
 * 额外说个。类名分大小写。但是文件名是不分大小写的。
 */
function __autoload( $class ) {
    $file = 'Aa.php';
    var_dump($class);
    var_dump($file);
    var_dump( is_file($file));
    if ( is_file($file) ) {
        require_once($file);
    }
}
$obj = new A();
$obj->a();
$obj = new A1();
$obj->a1();