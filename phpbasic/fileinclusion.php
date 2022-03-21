<?php

//Inclusion in PHP

//include() - Both are inherit file content from one to another but in this if file's path does not exists then show some error and move for next step.
//require() - But in this tag if file's tag does not exists its show fatal error then we can not mover for next step.

// include_once 
// require_once
// include "config.php";
// include_once "config.php";

require "config.php";
require_once "config.php";

#if any file icluded or required by mistake twice then we need to write like this tag require_once or icluded_once by this help of this tag will avoid this types of errors.

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
    include "header.php";
    include "header.php";
    ?>
    
    <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi est consequatur cupiditate excepturi, sapiente tempore exercitationem ipsum enim nemo rerum praesentium quisquam quos vel iusto maxime officia possimus blanditiis similique? Expedita quod error sed quos illum minus fugit repellat.]
    </div>
</main>
<?php
require "footer.php";
?>
</body>
</html>