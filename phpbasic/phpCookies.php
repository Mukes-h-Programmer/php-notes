<?php

// Cookies

# set a cookie

// setcookie("name", "mukesh", time()+3600);
// setcookie("age", 35, time() + 3600);

#get cookie

// print_r($_COOKIE);
// print_r($_COOKIE ['age'] );

# access cookie

// if(isset($_COOKIE['name'])){
//     echo "Hello,".$_COOKIE['name'];
// }

// # delete cookie

// setcookie("name", "mukesh", time()-3600);

setcookie("cookie[one]","Cookie One");
setcookie("cookie[two]","Cookie Two");
setcookie("cookie[three]","Cookie Three");

if(isset($_COOKIE["cookie"])){
    echo "<pre>";
    print_r($_COOKIE["cookie"]);
}