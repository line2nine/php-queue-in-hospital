<?php
include "Queue.php";

class PriorityQueue implements Queue
{
    protected $queue;
    protected $limit;
    const VERY_BAD = 1;
    const BAD = 2;
    const NORMAL = 3;

    public function __construct($limit = 10)
    {
        $this->queue = [self::VERY_BAD => [], self::BAD => [], self::NORMAL => []];
        $this->limit = $limit;
    }

    function enqueue($name, $code)
    {
        if (!$this->isFull()) {
            $patient = new Patient($name, $code);
            array_push($this->queue[$code], $patient);
        } else {
            echo "Full";
        }
    }

    function dequeue()
    {
        if (!$this->isEmpty() && $this->queue[self::VERY_BAD]) {
            array_shift($this->queue[self::VERY_BAD]);
        } elseif (!$this->isEmpty() && $this->queue[self::BAD]) {
            array_unshift($this->queue[self::BAD]);
        } elseif (!$this->isEmpty() && $this->queue[self::NORMAL]) {
            array_unshift($this->queue[self::NORMAL]);
        } else {
            echo "Empty";
        }
    }

    function isEmpty()
    {
        return empty($this->queue);
    }

    function isFull()
    {
        return count($this->queue) == $this->limit;
    }
}