<?php

echo "<pre />";
//功能：指定某个类必须实现哪些方法，但不需要定义方法的具体内容
//要求：定义的所有方法必须是public.
interface Protocol{
    public function i_a();
    public static function i_b();
}
//要求：1、抽象类不能被实例化。
//      2、抽象类可以没有抽象方法
//      3、有抽象方法的类必须声明为抽象类
//      4、抽象方法，只能作声明，不能定义其具体的功能实现
//      5、非抽象方法和class一样的，该怎么实现的就怎么写。
abstract class AbClass implements Protocol{
    public function i_a() { // TODO: Implement p_a() method.
        var_dump("str_i_a");
    }
    public static function i_b(){  // TODO: Implement p_b() method.
        var_dump("str_i_b");
    }
    public final function ab_c(){
        var_dump("str_final_ab_c");
    }
    abstract public function ab_a();
    abstract public static function ab_b();//这个什么会提示static不能声明为abstract
}
class MyClass extends AbClass{
    public function ab_a() {  // TODO: Extends ab_a() method.
        var_dump("str_ab_a");
    }
    public final function ab_c(){         //final不支持被重写
        var_dump("str_final_ab_c");
    }
}
