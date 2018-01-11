<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:23
 */


abstract class Subject
{
    private $observers = array();

    public function  Attach(Observer $observer)
    {
        array_push($this->observers,$observer);
    }

    public function  Detach(Observer $observer)
    {
        foreach($this->observers as $k=>$v)
        {
            if($v==$observer)
            {
                unset($this->observers[$k]);
            }
        }
    }

    function  Notify()
    {
        foreach($this->observers as $v)
        {
            $v->Update();
        }
    }
}

//具体通知者（Boss和Secretary）
class ConcreteSubject extends Subject
{
    public $subject_state;
}

//抽象观察者
abstract class Observer
{
    public abstract function Update();
}

//具体观察者
class ConcreteObserver extends Observer
{
    private $name;
    private $observerState;
    public $subject;

    public function __construct(ConcreteSubject $_sub,$_name)
    {
        $this->subject = $_sub;
        $this->name = $_name;
    }

    public function  Update()
    {
        $this->observerState = $this->subject->subject_state;
        echo "观察者".$this->name."的新状态是:".$this->observerState."<br/>";
    }
}