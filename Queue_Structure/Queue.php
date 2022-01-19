<?php

class Queue
{
    public $array;

    public function __construct()
    {
        $this->array = [];
    }

    public function enQueue($value)
    {
        $this->array[] = $value;
    }

    public function deQueue()
    {
        if (!$this->isEmpty()) {
            array_shift($this->array);
        }
        else{
            echo "Empty";
        }
    }


    public function isEmpty()
    {
        return count($this->array) == 0;
    }
}

$queue = new QueuePatient();
$queue->enQueue(1);
$queue->enQueue(2);
$queue->enQueue(3);
$queue->deQueue();
echo "<pre>";
print_r($queue);