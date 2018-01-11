<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:09
 */

header("Content-Type:text/html;charset=utf-8");
//------------------------门面模式测试代码------------------
require_once "Facade.php";

$lurenA=new FacadeCompany();
$lurenA->buy();
$lurenA->sell();