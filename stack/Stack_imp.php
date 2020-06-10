<?php

namespace Stack;

class Stack_imp
{
    public $stack_arr = [];

    public $top = -1;

    public function push($value)
    {
        $this->top++;
        $this->stack_arr[$this->top] = $value;

        return $this->stack_arr;
    }
    public function pop()
    {
        if ($this->top != -1) {
            dump("@before top $this->top");
            $this->top > 0 ?  array_splice($this->stack_arr, $this->top, $this->top) : array_splice($this->stack_arr, $this->top, 1);
            $this->top--;
            dump("@after top $this->top");
            return $this->stack_arr;
        } else {
            return "underflow";
        }
    }
}
