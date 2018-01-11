<?php

require_once "AbstractRoad.php";
$speedRoad=new SpeedRoad();
$speedRoad->icar=new Car();
$speedRoad->Run();

echo "<hr/>";

$street=new Street();
$street->icar=new Jeep();
$street->Run();