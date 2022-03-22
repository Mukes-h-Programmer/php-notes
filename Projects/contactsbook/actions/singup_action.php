<?php

ob_start();
session_start();

require_once '../includes/config.php';
$errors = [];
if(isset($_POST))
{
    $firstName = trim($_POST['fname']);
    $lastName = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['cpassword']);

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

    if(empty($password)){
        $errors[] = "Password can't be blank.";
    }
    if(empty($confirmPassword)){
        $errors[] = "confirm password can't be blank.";
    }
    if(!empty($password) && !empty($confirmPassword) && $password != $confirmPassword )
    {
        $erros[] = "Confirm password doesn't match.";
    }
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('location:'. SITEURL .'signup.php');
        exit();

    }
   #if no errors

}

