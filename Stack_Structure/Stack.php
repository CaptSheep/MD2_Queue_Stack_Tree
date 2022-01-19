<?php

class Stack
{
public $stack;
public $limit;

    /**
     * @param $stack
     * @param $limit
     */
    public function __construct($limit = 10)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($data)
    {
        if(count($this->stack) <= $this->limit){
            array_unshift($this->stack,$data);
        }
        else{
            return "There's no place to push";
        }
    }

    public function pop()
    {
        if ($this->isEmpty()){
            return "This's Empty";
        }
        else{
            array_shift($this->stack);
        }
    }

    public function top()
    {
        return end($this->stack);
    }

    public function isEmpty()
    {
        return count($this->stack) == 0 ;
    }
}

$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->pop();
echo "<pre>";
print_r($stack->top());