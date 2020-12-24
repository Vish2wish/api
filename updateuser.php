<?php
   require 'connection.php';

   $id = $_REQUEST['id'];
   $username=$_POST['username'];
   $email = $_POST['email'];

//UPDATE `user` SET `username` = 'vish20', `email` = 'vish20' WHERE `user`.`id` = 20;


  $update_query = "UPDATE user SET username = '$username', `email` = '$email' WHERE `user`.`id` = '$id'";
  $result = mysqli_query($con,$update_query);

  if($result>0){
      $response ['error'] = "200";
      $response ['message'] = "user update success";
  }else{
      $response['error'] = "400";
      $response['message'] = "user update failed due to some reasons";  
  }

  echo json_encode($response);

  echo "Error: " . mysqli_error($con);
  echo $username;
  echo $email;


?>