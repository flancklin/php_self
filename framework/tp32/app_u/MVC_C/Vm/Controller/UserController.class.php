<?php
namespace Vm\Controller;


use Think\Controller;

class UserController extends  Controller{

    public function index(){
        fff();
        fun1();
        $this->assign("a", C("c"));
        $this->assign("a1", C("c1"));
        $this->display();
    }
}