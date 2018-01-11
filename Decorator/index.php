<?php
header("Content-Type:text/html;charset=utf-8");
//------------------------装饰器模式测试代码------------------
require_once "Decorator.php";

$Yaoming=new Person("姚明");
$aTai=new Person("A泰斯特");

$pixie=new PiXie();
$waitao=new Waitao();

$pixie->Decorate($Yaoming);
$waitao->Decorate($pixie);
$waitao->Display();

echo "<hr/>";

$qiuxie=new QiuXie();
$tshirt=new Tshirt();

$qiuxie->Decorate($aTai);
$tshirt->Decorate($qiuxie);
$tshirt->Display();