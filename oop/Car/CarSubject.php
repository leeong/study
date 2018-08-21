<?php

namespace oop\Car;

use Exception;
use SplObjectStorage;
use SplObserver;
use SplSubject;

class CarSubject implements SplSubject
{

    // 车名
    private $carName;

    // 是否启动
    private $carState = false;

    // 速度
    private $carSpeed = 0;

    // 观察对象
    private $observers;

    public function __construct($name)
    {
        $this->carName = $name;
        $this->observers = new SplObjectStorage;
    }

    // 启动
    public function start()
    {
        $this->carState = true;
        $this->notify();
    }

    // 刹车
    public function stop()
    {
        $this->carState = false;
        $this->carSpeed = 0;
        $this->notify();
    }

    /**
     * 加速
     * @param $accelerate
     * @throws Exception
     */
    public function accelerate($accelerate)
    {
        if (!$this->carState) {
            throw new Exception('车未启动 不能加速');
        }

        if (!is_int($accelerate) || $accelerate < 0) {
            throw  new Exception('加速参数错误');
        }

        $this->carSpeed += $accelerate;
        $this->notify();
    }

    public function attach(SplObserver $observer)
    {
        if (!$this->observers->contains($observer)) {
            $this->observers->attach($observer);
        }
        return true;
    }

    public function detach(SplObserver $observer)
    {
        if (!$this->observers->contains($observer)) {
            return false;
        }
        $this->observers->detach($observer);
        return true;
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @param $name
     * @return bool|int
     * @throws Exception
     */
    public function __get($name)
    {
        switch ($name) {
            case 'name':
                return $this->carName;
                break;
            case 'state':
                return $this->carState;
                break;
            case 'speed':
                return $this->carSpeed;
                break;
            default:
                throw new Exception("{$name}未定义");
        }
    }
}
