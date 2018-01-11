
<?php
/**
 * Created by PhpStorm.
 * User: Jiang
 * Date: 2015/4/26
 * Time: 16:39
 */

/**抽象化角色            抽象路
 * Class AbstractRoad
 */
abstract class AbstractRoad
{
    public $icar;

    abstract function Run();
}

/**具体的             高速公路
 * Class speedRoad
 */
class SpeedRoad extends AbstractRoad
{
    function Run()
    {
        $this->icar->Run();
        echo ":在高速公路上。";
    }
}

/**乡村街道
 * Class Street
 */
class Street extends AbstractRoad
{
    function Run()
    {
        $this->icar->Run();
        echo ":在乡村街道上。";
    }
}

/**抽象汽车接口
 * Interface ICar
 */
interface ICar
{
    function Run();
}

/**吉普车
 * Class Jeep
 */
class Jeep implements ICar
{
    function Run()
    {
        echo "吉普车跑";
    }
}

/**小汽车
 * Class Car
 */
class Car implements ICar
{

    function Run()
    {
        echo "小汽车跑";
    }
}