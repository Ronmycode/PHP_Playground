<?php
/* *Write an algorithm to determine if a number `n` is happy.*

*A **happy number** is a number defined by the following process:*

- *Starting with any positive integer, replace the number by the sum of the squares of its digits.*
- *Repeat the process until the number equals 1 (where it will stay), or it **loops endlessly in a cycle** which does not include 1.*
- *Those numbers for which this process **ends in 1** are happy.*

*Return `true` if `n` is a happy number, and `false` if not.* */


function isHappy($n) {
    
    function sumOfSquares($num) {
        $sum = 0;
        while ($num > 0) {
            $digit = $num % 10; 
            $sum += $digit * $digit; 
            $num = (int)($num / 10); 
        }
        return $sum;
    }

    $seen = [];

    while ($n != 1) {
       
        if (isset($seen[$n])) {
            return false;
        }

        $seen[$n] = true;
       
        $n = sumOfSquares($n);
    }

    return true; 
}


$n = 19;
echo isHappy($n) ? "true" : "false"; 


?>