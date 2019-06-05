<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller{
    /**
     * tp323full渲染方式
     */
    public function index(){
        $this->assign("sayHello", "hello world");
        $this->display();
        $this->show('hello world');
        $a = $this->fetch();
        var_dump($a);
		$dirName =APP_PATH . 'Home/View/Cache/index.html';
		if(is_file( $dirName)){
			var_dump(3);
			chmod($dirName, 777);
		}else{
			var_dump(4);
		}
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

        echo $year . "-" . $mouth . '-' . $day;
    }

    public function view(){
        $this->a1 = 'a-1';
        $this->a2 = 'a-2';
        $this->assign("b1", 'b-1');
        $this->assign("b2", "b-2");
        $param = [
            'c1' => 'c-1',
            'c2' => 'c-2'
        ];
        $this->assign($param);
        $this->display();
    }
}