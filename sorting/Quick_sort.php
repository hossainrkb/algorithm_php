<?php

namespace Sort;

class Quick_sort
{

    function quickSort(&$arr, $leftIndex, $rightIndex)
    {
        $index = $this->partition($arr, $leftIndex, $rightIndex);
        if ($leftIndex < $index - 1)
            $this->quickSort($arr, $leftIndex, $index - 1);
        if ($index < $rightIndex)
            $this->quickSort($arr, $index, $rightIndex);
    }

    function partition(&$arr, $leftIndex, $rightIndex)
    {
        $p_index = $leftIndex;
        $pivot = $arr[$rightIndex];
        // dd($pivot);
        for ($i = $leftIndex; $i < $rightIndex; $i++) {
            if ($arr[$i] <= $pivot) {
                $temp = $arr[$p_index];
                $arr[$p_index] = $arr[$i];
                $arr[$i] = $temp;
                $p_index++;
            }
        }
        // dd($pivot);
        $temp = $arr[$rightIndex];
        $arr[$rightIndex] = $arr[$p_index];
        $arr[$p_index] = $temp;
        dump(implode(", ", $arr) . " @pivot $pivot @index $p_index");
        return $p_index;
    }
}
