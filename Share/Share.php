<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:12
 */
/**所有享元父接口角色
 * Interface IBlogModel
 */
interface IBlogModel
{
    function showTime();
    function showColor();
}

/**乔布斯的博客模板
 * Class JobsBlog
 */
class JobsBlog implements IBlogModel
{
    function showTime()
    {
        echo "纽约时间：5点整<br/>";
    }

    function showColor()
    {
        echo "<div style='color: #006600;height: 30;width: 30;background-color: #898989;'>Jobs</div>";
    }
}

/**雷军博客模板
 * Class LeiJunBlog
 */
class LeiJunBlog implements IBlogModel
{
    function showTime()
    {
        echo "北京时间：17点整<br/>";
    }

    function showColor()
    {
        echo "<div style='color:#c7254e;height: 30;width: 100;background-color: #898989;'>雷军</div>";
    }
}

/**博客模板工厂
 * Class BlogFactory
 */
class BlogFactory
{
    private $model=array();

    function getBlogModel($name)
    {
        if(isset($this->model[$name]))
        {
            echo "我是缓存里的<br/>";
            return $this->model[$name];
        }
        else
        {
            try
            {
                echo "我是新创建的<br/>";
                $class=new ReflectionClass($name);
                $this->model[$name]=$class->newInstance();
                return $this->model[$name];
            }
            catch(ReflectionException $e)
            {
                echo "<span style='color: #ff0000;'>你要求的对象我不能创建哦。</span><br/>";
                return null;
            }

        }
    }
}