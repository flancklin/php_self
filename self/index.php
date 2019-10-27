<?php
//what`s is the flancklin？ nothing, its mine,just me.no words,no name,just me.
$config = require_once './frame/FrameConfig.php';
require './frame/Application.php';
(new frame\Application($config))->run();