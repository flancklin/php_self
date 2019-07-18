<?php
namespace Common\Behavior;

use Think\Behavior;

class AaBehavior extends Behavior{
    // 行为扩展的执行入口必须是run
    public function run(&$content) {
        var_dump("AaBehavior_run()".json_encode($content));
    }
}