<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:35
 */
//抽象模板类
abstract class MakePhone
{
    protected $name;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function MakeFlow()
    {
        $this->MakeBattery();
        $this->MakeCamera();
        $this->MakeScreen();
        echo $this->name."手机生产完毕！<hr/>";
    }
    public abstract function MakeScreen();
    public abstract function MakeBattery();
    public abstract function MakeCamera();
}

//小米手机
class XiaoMi extends MakePhone
{
    public function __construct($name='小米')
    {
        parent::__construct($name);
    }

    public   function MakeBattery()
    {
        echo "小米电池生产完毕！<br/>";
    }
    public   function MakeCamera()
    {
        echo "小米相机生产完毕！<br/>";
    }

    public  function MakeScreen()
    {
        echo "小米屏幕生产完毕！<br/>";
    }
}

//魅族手机
class FlyMe  extends  MakePhone
{
    function __construct($name='魅族')
    {
        parent::__construct($name);
    }

    public   function MakeBattery()
    {
        echo "魅族电池生产完毕！<br/>";
    }
    public   function MakeCamera()
    {
        echo "魅族相机生产完毕！<br/>";
    }

    public   function MakeScreen()
    {
        echo "魅族屏幕生产完毕！<br/>";
    }
}