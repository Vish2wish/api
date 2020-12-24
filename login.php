<?php
    require 'connection.php';
   
    $password = md5( $_POST['passwords']);
    $email = $_POST['email'];

   $checkUser = "SELECT * FROM user WHERE email='$email' AND password = '$password'";
   $result = mysqli_query($con,$checkUser);

   if(mysqli_num_rows($result)>0){
       $response['error'] = "0000";
       $response['message'] = "Succesfully Login";
   }else{
    $response['error'] = "0001";
    $response['message'] = "Login Failed";
    
   }
          
   
   echo "Error: " . mysqli_error($con);
echo json_encode($response);

?>