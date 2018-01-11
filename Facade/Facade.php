<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:09
 */
/**阿里股票
 * Class Ali
 */
class Ali
{
    function buy()
    {
        echo "买入阿里股票<br/>";
    }

    function sell()
    {
        echo "卖出阿里股票<br/>";
    }
}

/**万达股票
 * Class Wanda
 */
class Wanda
{
    function buy()
    {
        echo "买入万达股票<br/>";
    }

    function sell()
    {
        echo "卖出万达股票<br/>";
    }
}

/**京东股票
 * Class Jingdong
 */
class Jingdong
{
    function buy()
    {
        echo "买入京东股票<br/>";
    }

    function sell()
    {
        echo "卖出京东股票<br/>";
    }
}

/**门面模式核心角色
 * Class FacadeCompany
 */
class FacadeCompany
{
    private $ali;

    private $wanda;

    private $jingdong;

    function __construct()
    {
        $this->ali=new Ali();
        $this->jingdong=new Jingdong();
        $this->wanda=new Wanda();
    }

    function buy()
    {
        $this->wanda->buy();
        $this->ali->buy();
    }

    function sell()
    {
        $this->jingdong->sell();
    }
}