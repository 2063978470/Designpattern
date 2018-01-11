<?php
header("Content-Type:text/html;charset=utf-8");
//------------------------门面模式测试代码------------------
require_once "Share.php";
$factory=new BlogFactory();
$jobs=$factory->getBlogModel("JobsBlog");
if($jobs)
{
    $jobs->showTime();
    $jobs->showColor();
}


$jobs1=$factory->getBlogModel("JobsBlog");
if($jobs1)
{
    $jobs1->showTime();
    $jobs1->showColor();
}


$leijun=$factory->getBlogModel("LeiJunBlog");
if($leijun)
{
    $leijun->showTime();
    $leijun->showColor();
}


$leijun1=$factory->getBlogModel("LeiJunBlog");
if($leijun1)
{
    $leijun1->showTime();
    $leijun1->showColor();
}

$aFanda=$factory->getBlogModel("aFanda");
if($aFanda)
{
    $aFanda->showTime();
    $aFanda->showColor();
}