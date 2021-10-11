<?php

class StopWatch
{
    private int $startTime;
    private int $endTime;

    public function __construct($startTime, $endTime)
    {
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }


    public function getStartTime():int
    {
        return $this->startTime;
    }

    public function setStartTime($startTime): void
    {
        $this->startTime = $startTime;
    }

    public function getEndTime():int
    {
        return $this->endTime;
    }

    public function setEndTime($endTime): void
    {
        $this->endTime = $endTime;
    }

    public function start()
    {
        $this->startTime = microtime();
    }

    public function stop()
    {
        $this->endTime = microtime();
    }

    public function getElapsedTime():int
    {
        return $this->endTime - $this->startTime;
    }

    public function getSum(): int
    {
        $sum = 0;
        for ($i = 0; $i < 100000; $i++) {
            $sum += $i;
        }
        return $sum;
    }


}

$stopWatch = new StopWatch(1, 5);
echo $stopWatch->start() . "<br>";
echo $stopWatch->getSum() . "<br>";
echo $stopWatch->stop() . "<br>";
echo $stopWatch->getElapsedTime();