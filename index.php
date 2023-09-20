<?php




// Recursive function 

// function recursivrCountdown($n){
//     if($n == 0){
//         return;
//     }

//     echo $n."\n";
//     recursivrCountdown( $n -1);
// }

// recursivrCountdown(5);

// factorial function 


// function factorial($n){
//     if($n==0){
//         return 1;
//     }
//     return $n * factorial( $n - 1);
// }


// $result = factorial(5);
// echo $result;

// $num1 = 1;
// $num2 = 2;

// for ($i = 1; $i <= 10; $i++) {
//     $fibonacci = $num1;
//     echo $fibonacci . " ";

//     $num3 = $num1 + $num2;
//     $num1 = $num2;
//     $num2 = $num3;

//     if ($fibonacci > 100) {
//         break; // Break the loop if Fibonacci number exceeds 100
//     }
// }




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
