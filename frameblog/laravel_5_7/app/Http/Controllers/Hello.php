<?php

namespace App\Http\Controllers;


class Hello extends \Illuminate\Routing\Controller
{

    public function hello2(){
        echo "hello world 2";
    }

    public function hello3(){
        $info='Hello World 3';
        return view('hello3')->with('info',$info);

    }
}
