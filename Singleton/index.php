<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 9:50
 */

require "Singleton.php";

$single1=Singleton::getInstance();
$single1->age=22;

$single2=Singleton::getInstance();

$single2->age=24;

echo "变量1的age:{$single1->age}<br/>";
echo "变量2的age:{$single2->age}<br/>";