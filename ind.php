<?php
    $username = "root";
    $servername = "localhost";
   
    $conn = new mysqli($servername, $username, "");
   
    $emailadd = $_POST['fname1'];
    $pass = $_POST['fname2'];

    $sql = "INSERT INTO 'registration' ('Id' , 'emailadd' , 'pass') VALUES ('0', '$emailadd', '$pass')";
   
    if ($conn->connect_error)
    {
        die('Connection failed : '.$conn->connect_error);
    }
    else 
    {
        $stmt = $conn->prepare("Insert into registration form (FirstName, EmailAddress, Password, Address
            values(?, ?, ?, ?)");
        
      
        echo "Registration successful";
       
    }
?>