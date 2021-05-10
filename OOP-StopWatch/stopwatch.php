<?php

class StopWatch
{
    private int|string $startTime;
    private int|string $endTime;

    public function __construct()
    {
        $this->startTime = date('H:i:s');

    }

    public function getStarttime() :int|string
    {
        return $this->startTime;
    }

    public function getEndtime() :int|string
    {
        return $this->endTime;
    }

    public function start()
    {
        $this->startTime = date('s');
    }

    public function stop()
    {
        $this->endTime = date('s');
    }

    public function getElapsedTime() :int|string
    {
        return abs($this->endTime*1000 - $this->startTime*1000);
    }
}
