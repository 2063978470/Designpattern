<?php


/**抽象产品角色       汉堡
 * Interface IHanbao
 */
interface IHanbao
{
    function Allay();
}

/**具体产品角色         肉松汉堡
 * Class RouSongBao
 */
class RouSongBao implements IHanbao
{
    function Allay()
    {
        echo "I am 肉松汉堡，小的给主人解饿了！<br/>";
    }

}

/**鸡肉汉堡
 * Class ChickenBao
 */
class ChickenBao implements IHanbao
{
    function Allay()
    {
        echo "I am 鸡肉汉堡，小的给主人解饿了！<br/>";
    }

}

/**抽象工厂角色
 * Interface IServerFactory
 */
interface IServerFactory
{
    function MakeHanbao();
}

/**具体工厂角色     肉松汉堡工厂
 * Class RouSongFactory
 */
class RouSongFactory implements IServerFactory
{

    function MakeHanbao()
    {
        return new RouSongBao();
    }
}

class ChickenFactory implements IServerFactory
{

    function MakeHanbao()
    {
        return new ChickenBao();
    }
}