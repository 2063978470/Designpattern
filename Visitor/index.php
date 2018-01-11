<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:38
 */

require_once "Visitor.php";
$os = new ObjectStruct();
$os->Add(new VMan());
$os->Add(new VWoman());

//成功时反应
$ss = new Success();
$os->Display($ss);

//失败时反应
$fs = new Failure();
$os->Display($fs);

//恋爱时反应
$ats=new Amativeness();
$os->Display($ats);
