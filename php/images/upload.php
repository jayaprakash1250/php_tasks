<?php
session_start();
if(isset($_POST["submit"])){
    $submit=$_POST['submit'];
    $username=$_POST['uname'];
    $_SESSION['submit']=$submit;
    $_SESSION['username']=$username;
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'restaurents';
        
        //Create connection and select DB
        $db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if(mysqli_connect_errno()){
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = mysqli_query($db,"INSERT into images1 (image, created) VALUES ('$imgContent', '$dataTime')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}

?>

