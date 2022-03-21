<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name  = "phpbasicdb";

//mysqli , pdo (php data object)

$conn = mysqli_connect($host, $db_user, $db_password, $db_name) or die("Connection Error: ".mysqli_connect_error());

// var_dump($conn);



if($conn){
   $sql = "select * from mukesh";
   $results = mysqli_query($conn, $sql);
   while ($row = mysqli_fetch_assoc($results)) {
       # code...
    //    var_dump($row);
    echo $row['stu_name'], " : ",$row['course'],"<br>";


   }}
// // //  else{
//     echo "connected";
//     echo "<br>";
//     echo mysqli_num_rows($results);


// if($conn > 0){
//     $row = mysqli_fetch_assoc($results);
//     echo var_dump($results);
// }