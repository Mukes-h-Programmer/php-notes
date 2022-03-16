<?php
//Loops

/*
- for
- while
- do- while
- for-each
*/

#for loop :- when we know the range of the iteration.

// for ($i = 1; $i <= 10; $i++){
//     echo "Number is: ", $i;
//     echo "<br>";
// }

// $k = 4;

// for ($i = 1; $i <= 10; $i++){
//     echo $i *$k, "</br>";
// }

#while loop

// $i = 3;

// while($i <=10){
//     echo "Number is :", $i, "<br>";
//     $i++;
// }

#do while loop

// $i = 3;

// do{
//     echo "Number is : " , $i, "<br>";
//     $i++;
// }
// while($i<9);

// $i = 9;

// do{
//     echo "Number is : " , $i, "<br>";
//     $i++;
// }
// while($i<9);

#foreach Loop majorly use for arrays.

// $arr = array(3,3,54,3,2,4,3);

// foreach ($arr as $n)
// {
//     echo "Number is : " , $n, "<br>";
// }

$students = ["pankaj"=>39,"pawan"=>39,"rohav"=>38];
$arr = array(3,3,54,3,2,4,3);

foreach ($students as $name => $age) {
    
    echo $name.":".$age;
    echo "<br>";
}