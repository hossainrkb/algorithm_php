<?php

namespace Recursion;

class Fibonacci_series
{
    public function fib_without_recursion(int $num)
    {
        if ($num <= 1) {
            return $num;
        } else {
            $a = 0;
            $b = 1;
            echo $a . '&nbsp';
            for ($i = 2; $i <= $num; $i++) {
                $c = $a + $b;
                $a = $b;
                $b = $c;
                echo $b . '&nbsp';
            }
        }
    }
    public function fib_with_recursion(int $num)
    {
        if ($num <= 2) {
            return 1;
        } else {
            $data =  $this->fib_with_recursion($num - 1) + $this->fib_with_recursion($num - 2);
            // echo "Call =>" . $data . "<br>";
            return $data;
        }
    }
}
