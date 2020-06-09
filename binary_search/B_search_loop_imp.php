<?php

namespace Binary_search;

class B_search_loop_imp
{
    public function binary_search_loop($arr, $item)
    {
        $start = 0;
        $end = count($arr) - 1;
        while ($start <= $end) {
            dump("@start $start and @end $end");
            $mid = round(($start + $end) / 2);
            if ($arr[$mid] == $item) {
                return "@found and @index $mid";
            } elseif ($arr[$mid] > $item) {
                $end = $mid - 1;
            } else {
                $start = $mid + 1;
            }
        }
        return "not found";
    }
}
