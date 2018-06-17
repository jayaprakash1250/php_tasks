  <?php 
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'restaurents';
        
        //Create connection and select DB
        $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if(mysqli_connect_errno()){
            die("Connection failed: " . mysqli_connect_error());
        }
?>
        