<?php

interface IProduct
{
    /**X轴旋转
     * @return mixed
     */
    function XRotate();

    /**Y轴旋转
     * @return mixed
     */
    function YRotate();
}

/**具体产品角色
 * Class XProduct        X轴旋转产品
 */
class XProduct implements IProduct
{
    private $xMax = 1;
    private $yMax = 1;

    function __construct($xMax, $yMax)
    {
        $this->xMax = $xMax;
        $this->yMax = 1;
    }

    function XRotate()
    {
        echo "您好，我是X轴旋转产品，X轴转转转。。。。。。";
    }

    function YRotate()
    {
        echo "抱歉，我是X轴旋转产品，我没有Y轴。。。。。。";
    }
}

/**具体产品角色
 * Class YProduct        Y轴旋转产品
 */
class YProduct implements IProduct
{
    private $xMax = 1;
    private $yMax = 1;

    function __construct($xMax, $yMax)
    {
        $this->xMax = 1;
        $this->yMax = $yMax;
    }

    function XRotate()
    {
        echo "抱歉，我是Y轴旋转产品，我没有X轴。。。。。。";
    }

    function YRotate()
    {
        echo "您好，我是Y轴旋转产品，Y轴转转转。。。。。。";
    }
}

/**具体产品角色
 * Class XYProduct        XY轴都可旋转产品
 */
class XYProduct implements IProduct
{
    private $xMax = 1;
    private $yMax = 1;

    function __construct($xMax, $yMax)
    {
        $this->xMax = $xMax;
        $this->yMax = $yMax;
    }

    function XRotate()
    {
        echo "您好，我是XY轴都可旋转产品，X轴转转转。。。。。。";
    }

    function YRotate()
    {
        echo "您好，我是XY轴都可旋转产品，Y轴转转转。。。。。。";
    }
}

/**工厂角色
 * Class ProductFactory
 */
class ProductFactory
{
    static function GetInstance($xMax, $yMax)
    {
        if ($xMax > 1 && $yMax === 1) {
            return new XProduct($xMax, $yMax);
        } elseif ($xMax === 1 && $yMax > 1) {
            return new YProduct($xMax, $yMax);
        } elseif ($xMax > 1 && $yMax > 1) {
            return new XYProduct($xMax, $yMax);
        } else {
            return null;
        }
    }
}