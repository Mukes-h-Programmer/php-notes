

<?php


ob_start();
session_start();

require_once '../includes/config.php';
require_once '../includes/db.php';
$errors = [];
if(isset($_POST)){
   $email = trim($_POST['email']);
   $password = trim($_POST['password']);

   if(empty($email)){
    $errors[] = "Email can't be blank.";
    }
   if (!empty($email) && !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   # code...
   $errors[] = "Invalid Email address";
      }
      if(empty($password)){
        $errors[] = "Password can't be blank.";
    }
    if(!empty($errors)){
        $_SESSION['errors'] = $errors;
        header('location:' . SITEURL . "login.php");
    }

    //if no errors
    if(!empty($email)){
        $conn = db_connect();
        $sanitizeEmail = mysqli_real_escape_string($conn, $email);
        $emailSql = "SELECT * FROM users WHERE email = '{$sanitizeEmail}'";
        $sqlResult = mysqli_query($conn, $emailSql);
        $emailRow = mysqli_num_rows($sqlResult);
 
        if($emailRow > 0)
        {
            $userInfo = mysqli_fetch_assoc($sqlResult);
    
            
            if(!empty($userInfo)){
                $passwordInDb = $userInfo['password'];
                if(password_verify($password, $passwordInDb)){
                    unset($userInfo['password']);
                    $_SESSION['user'] = $userInfo;
                    header('location:' . SITEURL);

                }else{
                    $errors[] = "Incorrect Password!";
                    $_SESSION ['errors'] = $errors;
                    header('location:' . SITEURL. "login.php");
                   exit();
                }
            }
        }else{
            $errors[] = "Email address doesn't exist!";
            $_SESSION['errors'] = $errors;
            header('location:' .SITEURL."login.php");
            exit();
        }
    }
}