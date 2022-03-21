<?php
// file I/O

/*
- opening a file
- reading a file
- wng a file
- closing a file
*/

#File in write mode

// $fileName = "docs/context.txt";

// $file = fopen($fileName, 'w');

// if($file == false){
//     echo "There is some errors in file opening!";
// }
// $filecontent = "This is file content for php io";
// fwrite($file, $filecontent);
// fclose($file);

#File in read mode

// $fileName = "docs/context.txt";
// $file = fopen($fileName, 'r');
// $fileSize = filesize($fileName);
// echo $fileSize . " Bytes";

// $content = fread($file, $fileSize);
// fclose($file);

// echo $content;

#append in file

$fp = fopen('data.txt', 'a');//opens file in append mode  
fwrite($fp, ' this is additional text ');  
fwrite($fp, 'appending data');  
fclose($fp);  
  
