<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 9:41
 */

header("Content-Type:text/html;charset=utf-8");
//------------------------工厂方式测试代码------------------
require_once "IHanbao.php";

//-----------------餐厅厨师-----------
$chickenFactory=new ChickenFactory();
$rouSongFactory=new RouSongFactory();

//-----------点餐------------
$chicken1=$chickenFactory->MakeHanbao();
$chicken2=$chickenFactory->MakeHanbao();
$rouSong1=$rouSongFactory->MakeHanbao();
$rouSong2=$rouSongFactory->MakeHanbao();

//------------------顾客吃饭---------
$chicken1->Allay();
$chicken2->Allay();
$rouSong1->Allay();
$rouSong2->Allay();