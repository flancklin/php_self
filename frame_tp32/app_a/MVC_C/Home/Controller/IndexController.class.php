<?php
namespace Home\Controller;

use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "只差把model和logic从各个木块从独立出来了。其实最好能独立到index.php同层次的文件上。<br/>
        但好像引入有问题。<br/>
        好像所有的.php文件必须放在APP_PATH下,不然new不到对应的class。";


        //配置文件和公共方法的独立与共享。基于1、tp3封装的函数：load_ext_file。2、tp3的自定义COMMON_PATH
        //其实配置文件也可以单独自定义CONF_PATH的。但是有bug，配置文件自定义之后。load_ext_file找路径依旧是COMMON_PATH，没有随之切换。
        //所以最后觉得config和function都按框架原来的放在common中最好。支取改Common的路径即可
        var_dump(C("c"));
        var_dump(C("c1"));
        fff();
        fun_c();
    }

    public function a2(){
        var_dump(32324);
//        var_dump(C("aa"));
    }

}