<?php
//Strings

$name = "Mukesh";

// echo ($name);
// echo "<br>";
// var_dump($name);

// $lastname = "kumar";
// $fullName = $name ." ".$lastname;

// var_dump($fullName);
// echo "<br>";
// echo $fullName;
// echo "<br>";
// echo strlen($fullName);

// $n = "hello I am \"Mukehsh\"  string";
$n = "hello I am Mukehsh  string";

// echo strpos($n, "am");

// if(strpos($n, "amw")!==FALSE){
//  echo "Found";
// }
// else{
//     echo "Not Found";
// }

$fileName = "profile.php";

// $extension = substr($fileName,8);

// $extension = substr($fileName,strlen($fileName)-3);
// echo $extension;

#joining and spliting

// $fruits = "apple, banana, orange";
// echo $fruits;

//explode string

// $fruitsArr = explode(",",$fruits);
// echo"<pre>";
// var_dump($fruitsArr);

$languages =["PHP", "C", "JAVA", "PYTHON"];

$langlist = implode(",",$languages);
var_dump($langlist);
echo $langlist;

