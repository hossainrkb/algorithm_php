<?php

namespace Sort;

class Merge_sort
{
    public $final_arr = [];
    public function merge(array $arr)
    {
        dump("iteration");
        dump($arr);
        $arr_length = count($arr);

        if ($arr_length < 2) {
            // echo (json_encode($arr) . '&nbsp');
            // echo $arr_length . '&nbsp';
            return $arr;
        }
        $mid = round($arr_length / 2);
        dump($mid);
        $left_arrr =  array_slice($arr, 0, $mid);
        dump("left");
        dump($left_arrr);
        $right_arrr =  array_slice($arr, $mid);
        dump("right");
        dump($right_arrr);
        // for ($left = 0; $left < $mid; $left++) {
        //     $left_arrr[] = $arr[$left];
        // }
        // for ($right = $mid; $right < $arr_length; $right++) {
        //     $right_arrr[] = $arr[$right];

        // }
        // print_r($right_arrr);
        $lef =  $this->merge($left_arrr);
        $rit = $this->merge($right_arrr);
        // dd($lef . "  |  " . $rit);
        dump("end partial");
        dump($this->merge_final($lef, $rit));
        ($this->merge_final($lef, $rit));
    }

    public function merge_final($left, $right)
    {
        $i = 0;
        $j = 0;
        $newArr = array();
        while (($i < count($left)) && ($j < count($right))) {
            if ($left[$i] <= $right[$j]) {
                // array_push($newArr, $left[$i]);
                $newArr[] = $left[$i];
                $i++;
            } else {
                // array_push($newArr, $right[$j]);
                $newArr[] = $right[$j];
                $j++;
            }
        }
        while ($i < count($left)) {
            // array_push($newArr, $left[$i]);
            $newArr[] = $left[$i];
            $i++;
        }
        while ($j < count($right)) {
            // array_push($newArr, $right[$j]);
            $newArr[] = $right[$j];
            $j++;
        }
        return $newArr;
        // echo ($newArr);
        // echo json_encode($newArr);
    }
}
