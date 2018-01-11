

<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 9:57
 */

header("Content-Type:text/html;charset=utf-8");
//------------------------原型模式测试代码------------------
require_once "Adaper.php";

$player1=new Forward();

echo "前锋上场:<br/>";
$player1->Attack();
$player1->Defense();

echo "<hr/><br/>";

echo "姚明上场:<br/>";
$yaoming=new Adapter();
$yaoming->Attack();
$yaoming->Defense();