<?php

namespace Binary_search;

class First_last_occurrence
{
    public function first_occ($arr, $item)
    {
        $start = 0;
        $result = -1;
        $end = count($arr) - 1;
        while ($start <= $end) {
            $mid = round(($start + $end) / 2);
            // dd($mid);
            // dump("@start $start and @end $end");
            if ($arr[$mid] == $item) {
                $result = $mid;
                $end = $mid - 1;
                // return "@found and @index $mid";
            } elseif ($arr[$mid] > $item) {
                $end = $mid - 1;
            } else {
                $start = $mid + 1;
            }
        }
        return $result;
    }
    public function last_occ($arr, $item)
    {
        $start = 0;
        $result = -1;
        $end = count($arr) - 1;
        while ($start <= $end) {
            $mid = round(($start + $end) / 2);
            // dd($mid);
            // dump("@start $start and @end $end");
            if ($arr[$mid] == $item) {
                $result = $mid;
                $start = $mid + 1;
                // return "@found and @index $mid";
            } elseif ($arr[$mid] > $item) {
                $end = $mid - 1;
            } else {
                $start = $mid + 1;
            }
        }
        return $result;
    }
}
