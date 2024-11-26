<?php

/* *Given an integer `n`, return a string array `answer` (**1-indexed**) where:*

- `answer[i] == "FizzBuzz"` if `i` is divisible by `3` and `5`.
- `answer[i] == "Fizz"` if `i` is divisible by `3`.
- `answer[i] == "Buzz"` if `i` is divisible by `5`.
- `answer[i] == i` (as a string) if none of the above conditions are true. */

function fizzBuzz($n) {
    $answer = [];

    // Loop through 1 to n
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            $answer[] = "FizzBuzz"; 
        } elseif ($i % 3 == 0) {
            $answer[] = "Fizz"; 
        } elseif ($i % 5 == 0) {
            $answer[] = "Buzz"; 
        } else {
            $answer[] = (string)$i; 
        }
    }

    return $answer;
}


$n = 15;
print_r(fizzBuzz($n));

?>