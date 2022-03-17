<?php

#Functions in php

#check values is exists in array or not.

// $student = array("Rohan","Pawan","Pankaj");

// if(in_array("Pankaj3",$student)){
//     echo "Exists";
// }
// else{
// echo "Doesn't Exist";
// }

#check key is exists or not

$student = array("Rohan"=>"New Delhi"
,"Pankaj"=>"New Mumbai","Mukesh"=>"Agra");

// if(array_key_exists("Pawan",$student)){
//     echo "Yes";
// }
// else{
//     echo "no";
// }

echo count($student);
echo "<br>";
echo end($student);

