<?php

ob_start();
session_start();

require_once '../includes/config.php';
require_once '../includes/db.php';
$errors = [];

if (isset($_POST) && !empty($_SESSION['user'])) {
 
    $firstName = trim($_POST['fname']);
    $lastName = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $photofile = !empty($_FILES['photo']) ? $_FILES['photo'] : [];
    $cId = !empty($_POST['cid']) ? $_POST['cid'] : '';

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
     if (empty($phone)) {
         
        $errors[] = "Phone no. can't be blank.";

     }
    
     if(!empty($phone) && (strlen($phone) < 10 || strlen($phone) > 10 )){
         $errors[] = "Invalid Phone no.";
     }
    if(!empty($phone)  && !is_numeric($phone) ){
        $errors[] = "Phone no should be numeric.";
    }

     if(empty($address)){
         $errors[] = "Address can't be blank.";
     }

     if(!empty($errors)){

        $_SESSION['errors'] = $errors;
        header('location:'. SITEURL. "addcontact.php");
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
             $uploadFileDir = "../uploads/photos/";
             $destiFilePath = $uploadFileDir . $photoName;

             if(!move_uploaded_file($fileTempPath, $destiFilePath)){
                 
                $errors[] = "File couldn't be uploaded.";
             }
            }
             else{
             $errors[] = "Invalid photo (file) extension.";

         }
     }
     $ownerID = (!empty($_SESSION['user']) && !empty($_SESSION['user']['id'])) ? $_SESSION['user']['id'] : 0;
    
     if(!empty($cId)){
         //update
         if(!empty($photoName)){
            $sql = "UPDATE contacts SET first_name = '{$firstName}' , last_name = '{$lastName}', email = '{$email}', phone = '{$phone}', address = '{$address}', photo = '{$photoName}' WHERE id = {$cId} AND owner_id={$ownerID}"; 
         }else{
            $sql = "UPDATE contacts SET first_name = '{$firstName}' , last_name = '{$lastName}', email = '{$email}', phone = '{$phone}', address = '{$address}' WHERE id = {$cId} AND owner_id={$ownerID}";
         }
        $message = "Contact has been updated successfully!";
          
     }     
     else{
         //Insert
        $sql = "INSERT INTO contacts (first_name, last_name, email, phone, address, photo, owner_id) VALUES ('{$firstName}', '{$lastName}', '{$email}','{$phone}', '{$address}','{$photoName}','{$ownerID}')"; 
        $message = "New Contact has been added successfully!";
     }
     
     $conn = db_connect();
     if(mysqli_query($conn, $sql)){
         db_close($conn);
       
         $_SESSION['success'] = $message;

         header('location:'. SITEURL);
     }
     else{
         echo "failed!!";
     }
 }

