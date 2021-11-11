<?php
    $username = "root";
    $servername = "localhost";
   
    $conn = new mysqli($servername, $username, "");
   
    $firstname = $_POST['fname'];
    $emailadd = $_POST['fname1'];
    $pass = $_POST['fname2'];
    $address = $_POST['fname3'];

    $sql = "INSERT INTO 'registration' ('Id' , 'firstname', 'emailadd', 'pass', 'address') VALUES ('0', '$firstname', '$emailadd', '$pass', '$address')";
   
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