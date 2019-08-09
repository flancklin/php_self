<?php
namespace Home\Controller;

use Common\Logic\AaLogic;
use Common\Logic\Pro\ProLogic;
use Think\Controller;
use Think\Exception;
use Think\Hook;

class EmptyController extends Controller {
    public function _empty(){
        $action = strtolower(CONTROLLER_NAME."_".ACTION_NAME);
        switch ($action){
            case 'index_index':
//                var_dump($action);
                $this->$action();
                break;
            default:
                var_dump("empty");
        }
        Hook::listen("aa", $a=33);
        AaLogic::aa();
        ProLogic::pro();
        $this->U2("pro", "pro")->li();
        $this->U2("pro", "pro")->get();
        $this->display(CONTROLLER_NAME.":".ACTION_NAME);
    }
    private function U2($table, $item=''){
        $className ="Common\\Model".($item ? '\\'.ucfirst($item):'')."\\".ucfirst($table)."Model";
        static $_model_u2 = [];
        if(!isset($_model_u2[$className])){
            if(!class_exists($className))
                throw new Exception("没定义类", 101);
            $_model_u2[$className] = new $className();
        }
        return $_model_u2[$className];
    }

    private function test(){

//        return true;
    }


    public function index_index(){
        if($this->test()) die;
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
}