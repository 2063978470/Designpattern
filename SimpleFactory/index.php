<?php
/**
 * Created by PhpStorm.
 * User: Jiang
 * Date: 2015/4/9
 * Time: 21:54
 */
require_once "IProduct.php";

header("Content-Type:text/html;charset=utf-8");

$pro=array();
$pro[]=ProductFactory::GetInstance(1,12);
$pro[]=ProductFactory::GetInstance(12,1);
$pro[]=ProductFactory::GetInstance(12,12);
$pro[]=ProductFactory::GetInstance(0,12);

foreach($pro as $v)
{
    if($v)
    {
        echo "<br/>";
        $v->XRotate();
        echo "<br/>";
        $v->YRotate();
    }
    else
    {
        echo "非法产品！<br/>";
    }
    echo "<hr/>";
}