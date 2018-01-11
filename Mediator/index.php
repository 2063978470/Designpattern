<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:30
 */

header("Content-Type:text/html;charset=utf-8");
//--------------------------中介者模式-------------------
require_once "Mediator.php";

//测试代码块
$UNSC = new UnitedCommit();
$c1 = new USA($UNSC);
$c2 = new China($UNSC);
$UNSC->countryChina = $c2;
$UNSC->countryUsa =$c1;
$c1->Declared("姚明的篮球打的就是好");
$c2->Declared("谢谢。");