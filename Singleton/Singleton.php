<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 9:50
 */

class Singleton
{
    //创建静态对象变量
    private static $instance=null;


    public $age;

    //构造函数私有化，防止外部调用
    private function __construct()
    {

    }

    //克隆函数私有化，防止外部克隆对象
    private function __clone()
    {

    }

    //实例化对象变量方法，供外部调用
    public static function getInstance()
    {
        if(empty(self::$instance))
        {
            self::$instance=new Singleton();
        }

        return self::$instance;
    }
}