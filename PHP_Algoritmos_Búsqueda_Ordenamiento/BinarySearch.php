<?php

/* *Given an array of integers `nums` which is sorted in ascending order,
and an integer `target`, write a function to search `target` in `nums`.
If `target` exists, then return its index. Otherwise, return `-1`.*

*You must write an algorithm with `O(log n)` runtime complexity.* */

function search($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $mid = $left + (int)(($right - $left) / 2); 

        if ($nums[$mid] == $target) {
            return $mid; 
        } elseif ($nums[$mid] < $target) {
            $left = $mid + 1; 
        } else {
            $right = $mid - 1; 
        }
    }

    return -1; 
}


$nums = [-1, 0, 3, 5, 9, 12];
$target = 9;
echo search($nums, $target);

?>