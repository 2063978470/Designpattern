<?php
/**
 * Created by PhpStorm.
 * User: Jang
 * Date: 2015/6/11
 * Time: 10:16
 */

//申请Model
class Request
{
    //数量
    public $num;
    //申请类型
    public $requestType;
    //申请内容
    public $requestContent;
}

//抽象管理者
abstract class Manager
{
    protected $name;
    //管理者上级
    protected $manager;
    public function __construct($_name)
    {
        $this->name = $_name;
    }

    //设置管理者上级
    public function SetHeader(Manager $_mana)
    {
        $this->manager = $_mana;
    }

    //申请请求
    abstract public function Apply(Request $_req);

}

//经理
class CommonManager extends Manager
{
    public function __construct($_name)
    {
        parent::__construct($_name);
    }
    public function Apply(Request $_req)
    {
        if($_req->requestType=="请假" && $_req->num<=2)
        {
            echo "{$this->name}:{$_req->requestContent} 数量{$_req->num}被批准。<br/>";
        }
        else
        {
            if(isset($this->manager))
            {
                $this->manager->Apply($_req);
            }
        }

    }
}

//总监
class MajorDomo extends Manager
{
    public function __construct($_name)
    {
        parent::__construct($_name);
    }

    public function Apply(Request $_req)
    {
        if ($_req->requestType == "请假" && $_req->num <= 5)
        {
            echo "{$this->name}:{$_req->requestContent} 数量{$_req->num}被批准。<br/>";
        }
        else
        {
            if (isset($this->manager))
            {
                $this->manager->Apply($_req);
            }
        }

    }
}


//总经理
class GeneralManager extends Manager
{
    public function __construct($_name)
    {
        parent::__construct($_name);
    }

    public function Apply(Request $_req)
    {
        if ($_req->requestType == "请假")
        {
            echo "{$this->name}:{$_req->requestContent} 数量{$_req->num}被批准。<br/>";
        }
        else if($_req->requestType=="加薪" && $_req->num <= 500)
        {
            echo "{$this->name}:{$_req->requestContent} 数量{$_req->num}被批准。<br/>";
        }
        else if($_req->requestType=="加薪" && $_req->num>500)
        {
            echo "{$this->name}:{$_req->requestContent} 数量{$_req->num}再说吧。<br/>";
        }
    }
}