<?php

// var_dump($_GET);

// echo "<pre>";

// print_r($_GET);
// echo $_GET['name'];

#first method to check prevent to pass any null value in this form

// if(isset($_GET) && $_GET['name']!=''){
//     echo $_GET['name'];
// }

#One more method  But in this method if value is zero its consider empty so when we need to diplay we have to need write like this !empty ,.

if(!empty($_GET)){
    echo $_GET['name'];
}
