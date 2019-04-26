<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->assign("sayHello", "hello world");
        $this->display();
        $this->show('hello world');
        $a = $this->fetch();
        var_dump($a);
        $b = $this->buildHtml("index.html", APP_PATH . 'Home/View/Cache/');
        var_dump($b);
echo "<hr><br />";
        $this->display('Home@Index/index');
echo "<hr><br />";
        $this->theme('blue');

        $this->display();
        $this->show('hello world');
        $a = $this->fetch();
        var_dump($a);
        $b = $this->buildHtml("index.html", APP_PATH . 'Home/View/Cache/');
        var_dump($b);

    }

    /**
     * 方法自动绑定参数
     * @param $year
     * @param $mouth
     * @param $day
     * 访问形式  域名/Home/Index/bindParam/2019/4/26
     * $year = 2019  $mouth = 4 $day=26
     */
    public function bindParam($year, $mouth, $day){

        echo $year ."-" . $mouth . '-' . $day;
    }
}