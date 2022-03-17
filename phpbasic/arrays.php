<?php

//Arrays

/*
- Indexed Array (Numeric Array)
- Associate Array
- Multidimensional Array
*/

#Indexed Array

// $array = array(1,3,5,6);
// var_dump($array);


// $array = array(1,3.4,"s",5,6);

// echo "<pre>";
// print_r($array);

#push value in array

// $array = array(1,3.4,"s",5,6);
// array_push($array,8);
// echo "<pre>";
// print_r($array);

#Remove value from array

// $array = array(1,3.4,"s",5,6);
// array_shift($array);
// echo "<pre>";
// print_r($array);

#change value in array

// $array = array(1,3.4,"s",5,6);
// $array[3] = "mukesh";
// echo "<pre>";
// print_r($array);


#Associate Array

// $marks = ["maths"=>50, "eng"=>50,"sci"=>80];

// echo $marks["maths"];
// // var_dump($marks);
// echo "<br>";
// echo count($marks);

#Multidimensional arrays

// $students = array(
//     "pankaj" => array("maths"=> 54,"eng"=>50),
//     "pakaj" => array("maths"=> 54,"eng"=>50),
//     "panaj" => array("maths"=> 54,"eng"=>50),
//     "pnkaj" => array("maths"=> 54,"eng"=>50),
// );
// echo "<pre>";
// print_r($students);
// print_r($students['pankaj']['maths']);

// $students["pawan"] = array("maths" => 30,"eng" =>32, "sci"=> 33);
// print_r($students);