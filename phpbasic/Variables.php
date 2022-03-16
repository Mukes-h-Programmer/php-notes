<?php
#Variables
#$var = 30;

#$VAR; //wrong way to define a variables.
#$myname; //True
#$_myname; //True
#$_my_name; //True
#$3myname; //Wrong way False

#Data types

// $my_var = 1; #Integer
// var_dump($my_var);
// echo $my_var;

// $my_var = 1.3; #Float
// var_dump($my_var);
// echo $my_var;

// $my_var = 'Hello world.'; #String
// var_dump($my_var);
// echo $my_var;


#$my_var = true; #Boolean
// $my_var = false;
// var_dump($my_var);
// echo $my_var;

// $my_var = null; #NULL
// var_dump($my_var);
// echo $my_var;

       #Arrays

// $my_var = array(4,4,5,2,"dj");
// var_dump($my_var);
// echo $my_var;

// $my_var = [4,5,5];
// var_dump($my_var);
// echo $my_var;

// $my_var = ["mukesh" => 30, "Rohit" => 39];
// var_dump($my_var);
// echo $my_var;

    #Objects

class Abc{
    public $name;
    public function fun(){

        return "Hello There !";
    }
}

$classobj = new abc();
var_dump($classobj);
