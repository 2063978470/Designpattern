<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:19
 */

header("Content-Type:text/html;charset=utf-8");

require_once "Strategy.php";

$strategy=new contextStrategy();

echo "<span style='color: #ff0000;'>X产品</span><hr/>";
$strategy->getItem('XItem');
$strategy->inertiaRotate();
$strategy->unInertisRotate();

echo "<span style='color: #ff0000;'>Y产品</span><hr/>";
$strategy->getItem('YItem');
$strategy->inertiaRotate();
$strategy->unInertisRotate();

echo "<span style='color: #ff0000;'>XY产品</span><hr/>";
$strategy->getItem('XYItem');
$strategy->inertiaRotate();
$strategy->unInertisRotate();