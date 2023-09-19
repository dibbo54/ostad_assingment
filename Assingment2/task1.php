<?php

function printEvenNumbersFor($start, $end, $step)
{
    echo "forloop: ";

    for ($i = $start; $i <= $end; $i += $step) {


        echo $i . ",";
    }
}




function printEvenNumbersWhile($start, $end, $step)
{
    echo "whileloop: ";
    $current = $start;
    while ($current <= $end) {


        echo $current .  ",";
        $current += $step;
    }
}



function printEvenNumbersDoWhile($start, $end, $step)
{
    echo "do whileloop: ";

    $current = $start;
    do {

        echo $current . ",";
        $current += $step;
    } while ($current <= $end);
}


// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbersFor(2, 20, 2);

echo "<br>";

// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbersWhile(2, 20, 2);

echo "<br>";

// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbersDoWhile(2, 20, 2);

echo "<br>";