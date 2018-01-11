<?php
header("Content-Type:text/html;charset=utf-8");
//----------------------命令模式--------------------
require_once "Command.php";
//测试代码
// 命令接收者 　
$myTv = new Tv();
// 开机命令 　
$on = new CommandOn($myTv);
// 关机命令 　
$off = new CommandOff($myTv);

// 频道切换命令 　
$channel = new CommandChannel($myTv, 2);
// 命令控制对象　
$control = new Control($on, $off, $channel);
// 开机 　
$control->turnOn();
// 切换频道 　
$control->changeChannel();
// 关机 　
$control->turnOff();