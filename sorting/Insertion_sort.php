<?php

namespace Sort;

class Insertion_sort
{
    public function algorithm_min_to_max(array $arr)
    {
        echo (json_encode($arr));
        $arr_length = count($arr);
        for ($i = 1; $i < $arr_length; $i++) {
            $value = $arr[$i];
            $hole = $i;
            while ($hole > 0 && $arr[$hole - 1] > $value) {
                $arr[$hole] = $arr[$hole - 1];
                $hole = $hole - 1;
            }
            $arr[$hole] = $value;
        }
        echo "<br>After<br>";
        echo (json_encode($arr));
    }
}
