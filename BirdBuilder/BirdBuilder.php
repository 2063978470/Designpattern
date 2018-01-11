<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 9:54
 */


/**具体产品角色  鸟类
 * Class Bird
 */
class Bird
{
    public $_head;
    public $_wing;
    public $_foot;

    function show()
    {
        echo "头的颜色:{$this->_head}<br/>";
        echo "翅膀的颜色:{$this->_wing}<br/>";
        echo "脚的颜色:{$this->_foot}<br/>";
    }
}

/**抽象鸟的建造者(生成器)
 * Class BirdBuilder
 */
abstract class BirdBuilder
{
    protected $_bird;

    function __construct()
    {
        $this->_bird=new Bird();
    }

    abstract function BuildHead();
    abstract function BuildWing();
    abstract function BuildFoot();
    abstract function GetBird();
}

/**具体鸟的建造者(生成器)   蓝鸟
 * Class BlueBird
 */
class BlueBird extends BirdBuilder
{

    function BuildHead()
    {
        // TODO: Implement BuilderHead() method.
        $this->_bird->_head="Blue";
    }

    function BuildWing()
    {
        // TODO: Implement BuilderWing() method.
        $this->_bird->_wing="Blue";
    }

    function BuildFoot()
    {
        // TODO: Implement BuilderFoot() method.
        $this->_bird->_foot="Blue";
    }

    function GetBird()
    {
        // TODO: Implement GetBird() method.
        return $this->_bird;
    }
}

/**玫瑰鸟
 * Class RoseBird
 */
class RoseBird extends BirdBuilder
{

    function BuildHead()
    {
        // TODO: Implement BuildHead() method.
        $this->_bird->_head="Red";
    }

    function BuildWing()
    {
        // TODO: Implement BuildWing() method.
        $this->_bird->_wing="Black";
    }

    function BuildFoot()
    {
        // TODO: Implement BuildFoot() method.
        $this->_bird->_foot="Green";
    }

    function GetBird()
    {
        // TODO: Implement GetBird() method.
        return $this->_bird;
    }
}

/**指挥者
 * Class Director
 */
class Director
{
    /**
     * @param $_builder      建造者
     * @return mixed         产品类：鸟
     */
    function Construct($_builder)
    {
        $_builder->BuildHead();
        $_builder->BuildWing();
        $_builder->BuildFoot();
        return $_builder->GetBird();
    }
}