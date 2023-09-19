<?php


function printFibonacci($count) {
    $first = 0;
    $second = 1;
    
    for ($i = 0; $i < $count; $i++) {
        echo $first . " ";
        
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);
