<?php

// Task 1

/* PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the function to print. Also do the same using while loop and do-while loop also. */




function Printinge_even_number_using_for_loop($startNumber, $endNumber, $stepNumber)
{
    if($startNumber % 2 != 0){
        $startNumber+=1;
    }else{
        return $startNumber;
    }
    for($result = $startNumber; $result <= $endNumber; $result += $stepNumber ){
        echo $result.PHP_EOL;
    }
}


Printinge_even_number_using_for_loop(1,20,2);

echo "\n================\n\n";





// while loop with function.





function Printinge_even_number_using_while_loop($startNumber , $endNumber , $stepNumber){
    if($startNumber % 2 != 0){
        $startNumber+=1;
    }else{
        return $startNumber;
    }
    while($startNumber <= $endNumber){
        $result = $startNumber;
        echo $result.PHP_EOL;
        $startNumber += $stepNumber;
    }
}

Printinge_even_number_using_while_loop(1,20,2);



echo "\n================\n\n";





// Do while loop with function.





function  Printinge_even_number_using_DO_while_loop($startNumber , $endNumber ,  $stepNumber){


    if($startNumber % 2 != 0){
        $startNumber+=1;
    }else{
        return $startNumber;
    }

    do{
        $result = $startNumber;
        echo $result.PHP_EOL;
        $startNumber += $stepNumber; 
    }while($startNumber <= $endNumber);
}

Printinge_even_number_using_DO_while_loop(1,20,2);


echo "\n================\n\n";








// Task 2 

/* PHP script that prints numbers from 1 to 50 using a for loop. However, when the loop encounters a multiple of 5, it should skip that number using the continue statement and continue to the next iteration. */

for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue; // Skip multiples of 5
    }
    echo $i . "\n";
}
echo "\n================\n\n";








// Task 3

/* Break on Condition. a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a Fibonacci number is greater than 100, break out of the loop using the break statement. */

$numberOne = 1;
$number2 = 2;

for ($startNum = 1; $startNum <= 10; $startNum++) {


    $result = $numberOne;
    echo $result . " ";

    $number3 = $numberOne + $number2;
    $numberOne = $number2;
    $number2 = $number3;



    if ($result > 100) {
        break; // Break the loop if Fibonacci number exceeds 100
    }
}

echo "\n================\n\n";





// Task 4

/* PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function. */


function Fibonacci($total_fibonacci_number){
    $old=0;
    $new=1; 
    for($i=1; $i<=$total_fibonacci_number; $i++){
        $result = $old;
        echo$result." ";

        $latestnum =$old + $new ;
        $old = $new;
        $new = $latestnum;
       }   
}


Fibonacci(15);

echo "\n=";