<?php

namespace Binary_search;

class B_search
{
    public function binary_search_Recursion(array $arr, $item)
    {
        // return $arr;
        $arr_length = count($arr);

        if ($arr_length == 1 && ($arr[0] != $item)) {
            return "not found";
        }
        $newArr = [];
        $left = [];
        $mid = round($arr_length / 2);
        // return $mid;
        if ($arr[$mid - 1] == $item) {
            return  "found ";
        } elseif ($arr[$mid - 1] > $item) {
            // return  $arr[$mid];
            $newArr = array_slice($arr, 0, $mid);
        } else {
            $newArr = array_slice($arr, $mid);
        }

        return $this->binary_search_Recursion($newArr, $item);
    }
}
