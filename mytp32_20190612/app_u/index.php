<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./App/');//控制器
define('TMPL_PATH', "./View/");//试图
define("COMMON_PATH", "../Common/");//公共方法
define('RUNTIME_PATH', './Runtime/');   // 系统运行时目录
define('CONF_PATH','./Config/'); // 应用配置目录
define('LANG_PATH','./Lang/'); // 应用配置目录
define('VENDOR_PATH','./Vendor/'); // 第三方类库目录

// 引入ThinkPHP入口文件
require __DIR__ . '/../../../php_frame_code/code_source/thinkphp_3.2.3_full/ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单