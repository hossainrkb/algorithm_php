<?php

namespace Recursion;

class Recursion_basic
{
    public function factorial(int $num)
    {
        if ($num == 0) {
            echo "Recursive call=> $num => " . "1" . '<br>';
            return 1;
        } else {
            $temp = $num * $this->factorial($num - 1);
            echo "Recursive call=> $num => " . $temp . '<br>';
            return $temp;
        }
    }
    public function factorial_without_recursive_call(int $num)
    {
        if ($num == 0) {
            echo "Recursive call=> $num => " . "1" . '<br>';
            return 1;
        } else {
            $result = 1;
            for ($i = $num; $i >= 1; $i--) {
                $result = $result * $i;
            }
            return $result;
        }
    }
}
