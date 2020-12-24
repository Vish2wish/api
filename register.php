<?php
    require 'connection.php';
    $username = $_POST['username'];
    $password = md5( $_POST['password']);
    $email = $_POST['email'];

    $checkUser = "SELECT * from user where email='$email'";
    $checkQuery = mysqli_query($con,$checkUser);

    if(mysqli_num_rows($checkQuery)>0)
      echo 'user already exist';
   else{
   
       $insertQuery = "INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username','$email','$password')";
       $result = mysqli_query($con,$insertQuery);
       if($result)
           echo'successful'; 
          else
            echo "Error: " . mysqli_error($con);
          
          $con->close();
        }

          
   



?>