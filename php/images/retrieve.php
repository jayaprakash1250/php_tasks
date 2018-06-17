<?php
if(!empty($_GET['id'])){
    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'restaurents';
    
    //Create connection and select DB
    $db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if(mysqli_connect_errno()){
       die("Connection failed: " . mysqli_connect_error());
    }
    
    //Get image data from database
    $result = mysqli_query($db,"SELECT image FROM images1 WHERE id = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }
}
?>