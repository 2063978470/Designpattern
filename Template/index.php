<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:36
 */

header("Content-Type:text/html;charset=utf-8");
//-------------------------模板模式---------------------
require_once "Template.php";
$miui=new XiaoMi();
$flyMe=new FlyMe();

$miui->MakeFlow();
$flyMe->MakeFlow();