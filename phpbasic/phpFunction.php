<?php
//define a function

// function sayHello(){
//     //function body
//     echo "Helloo world";
// }

//function calling

// sayHello();

//function with argument

// function add($num1, $num2) // parameters
// {
//     $sum = $num1 + $num2;
//     echo "$sum";
// }
#(mixed $num1, mixed $num2)
// add(4,5); // arguments


// function add($num1, $num2) // parameters
// {
//     $sum = $num1 + $num2;
//     return "$sum"; //return statement
// }

// $result = add(5,90);
// echo "$result";

#using ... token access variable argument

// function sum(...$numbers){

//     // var_dump($numbers);
//     $sum = 0;
//     if(!empty($numbers)){
//         foreach ($numbers as $num) {
//             # code...
//             $sum +=$num;
//         }
//     }
// return $sum;

// }

// $result = sum(3,4,6);
// $result = sum(3,4,6,34,90);
// echo "sum = ".$result;

// function add(){
//     $sum = 0;
//     $args = func_get_args();
//     var_dump($args);
// }

function add(){
    // $num_args = func_num_args(); // check how much argument present in this list.
    $num_a = func_get_arg(2); //access element by index no just like inthis 2.
    echo $num_a;
    die();
    $sum = 0;
    foreach(func_get_args() as $num ){
        $sum+=$num;
    }
   return $sum;

}

$sum = add(4,6,2);
echo $sum;