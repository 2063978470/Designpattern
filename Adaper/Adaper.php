<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 9:56
 */

/**抽象运动员
 * Interface IPlayer
 */
interface IPlayer
{
    function Attack();
    function Defense();
}

/**前锋
 * Class Forward
 */
class Forward implements IPlayer
{

    function Attack()
    {
        echo "前锋攻击<br/>";
    }

    function Defense()
    {
        echo "前锋防御<br/>";
    }
}

/**中锋
 * Class Center
 */
class Center implements IPlayer
{

    function Attack()
    {
        echo "中锋攻击<br/>";
    }

    function Defense()
    {
        echo "中锋防御<br/>";
    }
}

//--------------待适配对象-----------
/**姚明                 外籍运动员
 * Class Yaoming
 */
class Yaoming
{
    function 进攻()
    {
        echo "姚明进攻<br/>";
    }

    function 防御()
    {
        echo "姚明防御<br/>";
    }
}

//------------适配器--------------
/**适配器
 * Class Adapter
 */
class Adapter implements IPlayer
{
    private $_player;

    function __construct()
    {
        $this->_player=new Yaoming();
    }

    function Attack()
    {
        $this->_player->进攻();
    }

    function Defense()
    {
        $this->_player->防御();
    }
}