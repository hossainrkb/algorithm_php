<?php

include "vendor/autoload.php";

use Binary_search\B_search;
use Recursion\Fibonacci_series;
use Recursion\Recursion_basic;
use Sort\Bubble_sort;
use Sort\Selection_sort;
use Sort\Insertion_sort;
use Sort\Merge_sort;
use Sort\Quick_sort;

// $obj = new Insertion_sort();
// $obj->algorithm_min_to_max([5, 2, 4, 10, 1, 27, 3]);
// $obj->algorithm_max_to_min([5, 2, 4, 10, 1, 27, 3]);

// $obj = new Merge_sort();
// echo (json_encode($obj->merge([4, 3, 1, 9, 2])));
$obj = new Quick_sort();
echo (json_encode($obj->swap(5, 10)));

// $obj = new Recursion_basic();
// $obj->factorial(5);
// echo ($obj->factorial_without_recursive_call(50));

// $obj = new Fibonacci_series();
// ($obj->fib_without_recursion(6));
// echo ($obj->fib_with_recursion(6));

// $obj = new B_search();
// echo (json_encode($obj->binary_search_Recursion([5, 10, 15, 16, 40, 41, 62, 82, 85, 95], 40)));
