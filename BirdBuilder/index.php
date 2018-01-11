<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 9:54
 */

header("Content-Type:text/html;charset=utf-8");
//------------------------生成器模式测试代码------------------
require_once "BirdBuilder.php";

$director=new Director();

echo "蓝鸟的组成：<hr/>";

$blue_bird=$director->Construct(new BlueBird());
$blue_bird->Show();

echo "<br/>Rose鸟的组成：<hr/>";

$rose_bird=$director->Construct(new RoseBird());
$rose_bird->Show();