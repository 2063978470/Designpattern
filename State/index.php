<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:34
 */

require_once "State.php";

$emergWork = new Work();
$emergWork->hour = 9;
$emergWork->WriteCode();
$emergWork->hour = 10;
$emergWork->WriteCode();
$emergWork->hour = 13;
$emergWork->WriteCode();
$emergWork->hour=14;
$emergWork->WriteCode();
$emergWork->hour = 17;
$emergWork->WriteCode();

$emergWork->IsDone = true;
$emergWork->IsDone = false;

$emergWork->hour = 19;
$emergWork->WriteCode();

$emergWork->hour = 22;
$emergWork->WriteCode();