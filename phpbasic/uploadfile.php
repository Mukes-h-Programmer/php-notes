<?php

if(isset($_POST['submit'])){

    $errors = [];

    $fileName = $_FILES['filename']['name'];
    $file_tmp = $_FILES['filename']['tmp_name'];
    $file_size = $_FILES['filename']['size'];
    $arr = explode('.',$fileName);
    $file_extn = strtolower(end($arr));

    $allowedExtns = ["jpg", "jpeg", "png"];
    if (!in_array($file_extn, $allowedExtns)) {
        $errors[] = "Invalid file extension. Only jpg, jpeg and png allowed";
    }
    if($file_size > 2097152 ){
 
        $errors[] = "File size should not be greater than 2mb";

    }
    if(empty($errors)){
        $destination = getcwd (). "/uploads/".$fileName;

        

        if(move_uploaded_file($file_tmp, $destination)){
        
            echo "File uploaded successfully!";
        }else{
            echo "File couldn't be uploaded";
        }
    } else{
        echo "<prev>";
        print_r($errors);
    }


    // echo "<pre>";
    // print_r($_FILES);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form method = "POST" action = "" enctype="multipart/form-data" >
     <input type="file" name= "filename"  >
     <input type="submit" name = "submit" value = "SUBMIT" >

    </form>

</body>
</html>