<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit = 7)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($ojb)
    {
        return array_unshift($this->stack, $ojb);
    }

    public function pop()
    {
        return array_unshift($this->stack, );
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}
