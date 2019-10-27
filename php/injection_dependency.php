<?php
//依赖注入思想。先规定一种行为(即接口或基础类)，再用多种方法(具体的类)或子类继承重写。真实调用的时候，参数是接口对象或基础类对象，传值是实现接口的类的对象。
//类的依赖通过__construct()构造函数来实现。【本初是Register的 __construct()】

/**
 *
 *注入方式  1、构造方法注入；
 *         2、set属性注入；
 *         3、静态工厂方法注入；
 *
 *
 *
 *
 */


interface Mail {
    public function send($param);
}

class Email implements Mail{
    public function send($param){
        //发送Email
        echo $param.'_ i can sent mail<br>';
    }
}

class SmsMail implements Mail{
    public function send($param){
        //发送短信
        echo $param.'_ i can send info<br>';
    }
}

class Register{
    public $obj;
    public function __construct(Mail $interfaceMail){
        $this->obj = $interfaceMail;
    }
    public function doRegister($param){
        $this->obj->send($param);//发送信息
    }
}

/* 此处省略若干行 */

$emailObj = new Email();
$reg = new Register($emailObj);
$reg->doRegister('email');//使用email发送


$smsObj = new SmsMail();
$reg1 = new Register($smsObj);
$reg1->doRegister('sms');//使用短信发送

/* 你甚至可以发完邮件再发短信 */

/**
 * 错误的使用参数
 */
$reg1 = new Register(new stdClass());

$reg1->doRegister('ssss');
?>