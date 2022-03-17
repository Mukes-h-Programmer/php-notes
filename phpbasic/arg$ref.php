<?php

// passing argument by value and by reference

#call by value.

// function show_message($msg){
//     $msg.="Nice to see you";
//     echo $msg;
// }

// $message = "Hello Dear";
// show_message($message);

// echo "</br>", $message;

#call by reference

// function show_message(&$msg){
//     $msg.="Nice to see you";
//     echo $msg;
// }

// $message = "Hello Dear";
// show_message($message);

// echo "</br>", $message;

#default argument values

// function show_name ($name, $prefix){

//     return $prefix." ".$name;

// }

// $username = show_name("Pankaj" ,"Mr.");
// echo $username;


// function show_name ($name, $prefix = "Mr."){

//     return $prefix." ".$name;

// }

// $username = show_name("Pankaj");
// echo $username;

function show_name ($name, $prefix = "Mr."){

    return $prefix." ".$name;

}

$username = show_name("Monika" , "Mrs.");
echo $username;