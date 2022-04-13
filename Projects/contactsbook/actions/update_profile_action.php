<?php

ob_start();
session_start();

require_once '../includes/config.php';
require_once '../includes/db.php';
$errors = [];
if(isset($_POST))
{
    $firstName = trim($_POST['fname']);
    $lastName = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $photofile = !empty($_FILES['photo']) ? $_FILES['photo'] : [];


    // validation
    if(empty($firstName)){
        $errors[] = "First name can't be blank.";
    }
    if(empty($email)){
        $errors[] = "Email can't be blank.";
    }
if (!empty($email) && !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
    # code...
    $errors[] = "Invalid Email address";
}
if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    header('location:'.SITEURL."edit_profile.php");
    exit();
}
$photoName = '';

     if(!empty($photofile['name'])){

       
         $fileTempPath = $photofile['tmp_name'];
       
         $filename = $photofile['name'];
      
         $fileNameCmp = end(explode('.', $filename));
       
         $fileNewName = md5(time(). $filename) . '.'.$fileNameCmp;
        
     
         $photoName = $fileNewName;
      
 

          //allowed extension

         $allwed_extns = ['jpg', "jpeg", "png", "gif"];
         if(in_array($fileNameCmp, $allwed_extns)){
             $uploadFileDir = "../uploads/profilephotos/";
             $destiFilePath = $uploadFileDir . $photoName;

             if(!move_uploaded_file($fileTempPath, $destiFilePath)){
                 
                $errors[] = "File couldn't be uploaded.";
             }
            }
             else{
             $errors[] = "Invalid photo (file) extension.";

         }
     }
$userId = (!empty($_SESSION['user']) && !empty($_SESSION['user']['id'])) ? $_SESSION['user']['id'] : 0;
 
 if(!empty($userId)){
    if(!empty($photoName)) {
        $sql = "UPDATE users SET first_name = '{$firstName}', last_name = '{$lastName}' ,email = '{$email}', profile_img = '{$photoName}' WHERE id = {$userId}";
    }
    else{
        $sql = "UPDATE users SET first_name = '{$firstName}', last_name = '{$lastName}' ,email = '{$email}' WHERE id = {$userId}";
    }
    $conn = db_connect();
    if(mysqli_query($conn, $sql)){
         $_SESSION['success'] = "Profile has been updated.";
         db_close($conn);
         header('location:'. SITEURL."profile.php");
    }

 }

}