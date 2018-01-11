<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:28
 */
require_once "Iterator.php";
$iterator= new ConcreteIterator(array('周杰伦','王菲','周润发'));
$item = $iterator->First();
echo $item."<br/>";
while(!$iterator->IsDone())
{
    echo "{$iterator->CurrentItem()}：请买票！<br/>";
    $iterator->Next();
}