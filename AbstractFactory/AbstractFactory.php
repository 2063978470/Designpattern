<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 9:45
 */

interface IAllayFood
{
    function Allay();
}

/**抽象产品角色            解渴食物
 * Interface IDrinkFood
 */
interface IDrinkFood
{
    function Drink();
}

/**具体产品角色           虾仁汉堡
 * Class XiaRenHamb
 */
class XiaRenHamb implements IAllayFood
{
    function Allay()
    {
        echo "虾仁汉堡充饥了。。。。。。。<br/>";
    }
}

/**具体产品角色            鸡肉汉堡
 * Class ChickenHamb
 */
class ChickenHamb implements IAllayFood
{
    function Allay()
    {
        echo "鸡肉汉堡充饥了。。。。。。。<br/>";
    }
}

/**具体产品角色             可口可乐
 * Class KekouKele
 */
class KekouKele implements IDrinkFood
{

    function Drink()
    {
        echo "可口可乐解渴了。。。。。。。。。<br/>";
    }
}

/**具体产品角色             百事可乐
 * Class BaishiKele
 */
class BaishiKele implements IDrinkFood
{

    function Drink()
    {
        echo "百事可乐解渴了。。。。。。。。<br/>";
    }
}

//-------------------抽象工厂---------------------

/**顶层超级抽象工厂接口
 * Interface IFactory
 */
interface IFactory
{
    //得到充饥食物
    function GetAllayFood();
    //得到解渴食物
    function GetDrinkFood();
}

/**工厂A              A套餐:虾仁汉堡+百事可乐
 * Class IAFactory
 */
class AFactory implements IFactory
{

    function GetAllayFood()
    {
        return new XiaRenHamb();
    }

    function GetDrinkFood()
    {
        return new BaishiKele();
    }
}

/**工厂B                B套餐：鸡肉汉堡+可口可乐
 * Class IBFactory
 */
class BFactory implements IFactory
{

    function GetAllayFood()
    {
        return new ChickenHamb();
    }

    function GetDrinkFood()
    {
        return new KekouKele();
    }
}