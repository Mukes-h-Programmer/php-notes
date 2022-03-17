<?php
 #GET AND POST
#For post method

//  if(!empty($_POST)){
//      echo $_POST['name'];
//  }

    if(!empty($_REQUEST)){
        echo $_POST['name'];
    }
  ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>GET Method</title>
 </head>
 <body>
     <div class="container">
         <!-- <form action="gpFormaction.php" method="GET"> -->
          <!-- if we have not need to attached any another file and transer informaiton to self file then we can write like this. -->
          <!-- <form action="" method="GET"> -->
                 <!-- <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="GET">  -->                                
                           <!-- <form action="<?php echo htmlentities( $_SERVER["PHP_SELF"]) ?>" method="GET"> -->
<!-- 
                           Post method -->

                           <form action="<?php echo htmlentities( $_SERVER["PHP_SELF"]) ?>" method="POST">
             <label for="name">Nme</label>
             <input type="text" name="name" id="name" value="" >
             <br>
             <br>

             <label for="email">Email</label>
             <input type="text" name="email" id="email" value="" >
             <br><br>
             <input type="submit" name = "submitbtn" value="SUBMIT" >
         </form>
     </div>
 </body>
 </html>














































