<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:19
 */

/**抽象策略角色
 * Interface RotateItem
 */
interface RotateItem
{
    function inertiaRotate();
    function unInertisRotate();
}

/**具体策略角色——X产品
 * Class XItem
 */
class XItem implements RotateItem
{
    function inertiaRotate()
    {
        echo "我是X产品，我惯性旋转了。<br/>";
    }

    function unInertisRotate()
    {
        echo "我是X产品，我非惯性旋转了。<br/>";
    }
}

/**具体策略角色——Y产品
 * Class YItem
 */
class YItem implements RotateItem
{
    function inertiaRotate()
    {
        echo "我是Y产品，我<span style='color: #ff0000;'>不能</span>惯性旋转。<br/>";
    }

    function unInertisRotate()
    {
        echo "我是Y产品，我非惯性旋转了。<br/>";
    }
}

/**具体策略角色——XY产品
 * Class XYItem
 */
class XYItem implements RotateItem
{
    function inertiaRotate()
    {
        echo "我是XY产品，我惯性旋转。<br/>";
    }

    function unInertisRotate()
    {
        echo "我是XY产品，我非惯性旋转了。<br/>";
    }
}

class contextStrategy
{
    private $item;

    function getItem($item_name)
    {
        try
        {
            $class=new ReflectionClass($item_name);
            $this->item=$class->newInstance();
        }
        catch(ReflectionException $e)
        {
            $this->item="";
        }
    }

    function inertiaRotate()
    {
        $this->item->inertiaRotate();
    }

    function unInertisRotate()
    {
        $this->item->unInertisRotate();
    }
}
