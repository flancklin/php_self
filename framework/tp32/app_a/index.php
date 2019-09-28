<?php
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

define('APP_PATH','./MVC_C/');//定义应用目录
define('TMPL_PATH', "./MVC_V/");//视图目录
define("COMMON_PATH", "./../Common/app_a/");//公共配置和公共方法目录
define('RUNTIME_PATH', './Runtime/');   // 系统运行时目录
//define('VENDOR_PATH','./Vendor/'); // 第三方类库目录 最好不分，反正放在也不影响程序。关键是一套代码放两个地方，不安全。比如七牛云的插件，发送邮件等

//define('LANG_PATH','./Lang/'); // 应用配置目录.最好还是前后端分离。因为前后端的文字不一样

// 引入ThinkPHP入口文件
require __DIR__ . '/../../../php_source/thinkphp_3.2.3_full/ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单