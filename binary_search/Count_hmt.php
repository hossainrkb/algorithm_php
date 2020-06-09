<?php

namespace Binary_search;

class Count_hmt
{
    public function hmt($arr, $item, bool $flag)
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
                if ($flag) {
                    $end = $mid - 1;
                } else {
                    $start = $mid + 1;
                }
            } elseif ($arr[$mid] > $item) {
                $end = $mid - 1;
            } else {
                $start = $mid + 1;
            }
        }
        return $result;
    }

    public function count_value($arr, $item)
    {
        $first_occ =  $this->hmt($arr, $item, true);
        if ($first_occ == -1) {
            dd("not found");
        } else {
            $last_occ =  $this->hmt($arr, $item, false);
            dd($last_occ - $first_occ + 1);
        }
    }
}
