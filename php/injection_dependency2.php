<?php

class Container {
    private $s=array();
    function __set($k, $c) { $this->s[$k]=$c; }
    function __get($k) { return $this->s[$k]($this); }
}

class A {
    private $container;
    public function __construct(Container $container) {
        $this->container = $container;
    }
    public function doSomeThing(){
        //do something which needs class B
        $b = $this->container->get();
        //to do
    }
}
class B{

}
$c = new Container();
$c->setB(new B());