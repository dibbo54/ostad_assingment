<?php

// Initialize the first two Fibonacci numbers
$prev = 0;
$current = 1;

// Print the first two Fibonacci numbers
echo $prev . " " . $current . " ";

// Loop to calculate and print the next 8 Fibonacci numbers
for ($i = 2; $i < 10; $i++) {
    // Calculate the next Fibonacci number
    $next = $prev + $current;
    
    // If the next Fibonacci number is greater than 100, break out of the loop
    if ($next > 100) {
        break;
    }
    
    // Print the next Fibonacci number
    echo $next . " ";
    
    // Update previous and current values for the next iteration
    $prev = $current;
    $current = $next;
}
