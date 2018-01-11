<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:24
 */

header("Content-Type:text/html;charset=utf-8");
//-------------------------观察者模式-----------------------
require_once "Observe.php";
//前台
$_s = new ConcreteSubject();

//宝银
$baoyin = new ConcreteObserver($_s, "张三");
$jiangchao = new ConcreteObserver($_s,"李四");

//前台记下宝银姜超
$_s->Attach($baoyin);
$_s->Attach($jiangchao);

//前台发现老板回来
$_s->subject_state = "孙总回来了";

//前台发送通知
$_s->Notify();