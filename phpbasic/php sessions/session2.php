<?php

//Sessions

session_start();

// if(isset($_SESSION['visit_counter'])){

//     $_SESSION['visit_counter'] += 1;    

// }
// else{

// $_SESSION['visit_counter'] += 1;

// }

// $message = "You have visited this page " . $_SESSION['visit_counter']. " in this session";
// echo $message;

// if(isset($_SESSION['user'])){

//     echo "Welcome, " . $_SESSION['user'];

// }


#how to check which value is available in this session

// echo "<pre>";
// print_r($_SESSION);

#delete session variables

// unset($_SESSION['visit_counter']); #work for single session variables

// echo "<pre>";
// print_r($_SESSION);

#again add some value 

// $_SESSION['course'] = "MCA";

// echo "<pre>";

// print_r($_SESSION);

#if we need to delete all data of this session

session_destroy(); #work for all session
echo "<pre>";
print_r($_SESSION);