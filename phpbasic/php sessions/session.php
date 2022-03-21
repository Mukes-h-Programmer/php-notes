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

$_SESSION['user'] = "Pankaj kumar";

header('location:/phpbasic/php sessions/session2.php');