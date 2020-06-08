<?php

namespace Sort;

class Bubble_sort
{
    public function algorithm_min_to_max(array $arr)
    {
        echo (json_encode($arr));
        $arr_length = count($arr);
        for ($k = 0; $k < $arr_length; $k++) {
            for ($i = 0; $i < $arr_length - 1 - $k; $i++) {
                // for ($j = $i + 1; $j < $arr_length - $i; $j++) {
                if ($arr[$i] > $arr[$i + 1]) {
                    $temp = $arr[$i + 1];
                    $arr[$i + 1] = $arr[$i];
                    $arr[$i] = $temp;
                }
                // }
            }
        }
        echo "<br>After<br>";
        echo (json_encode($arr));
    }
    public function algorithm_max_to_min(array $arr)
    {
        echo (json_encode($arr));
        $arr_length = count($arr);
        for ($i = 0; $i < $arr_length; $i++) {
            $max = $i;
            for ($j = $i + 1; $j < $arr_length; $j++) {
                if ($arr[$j] > $arr[$max]) {
                    $max = $j;
                }
            }
            $temp = $arr[$i];
            $arr[$i] = $arr[$max];
            $arr[$max] = $temp;
        }
        echo "<br>After<br>";
        echo (json_encode($arr));
    }
}
