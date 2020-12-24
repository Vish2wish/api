<?php
     $hostName = 'localhost';
     $userName = 'root';
     $password = '';
     $dbname = 'userdata';

    $con = mysqli_connect($hostName,$userName,$password,$dbname);

    if($con)
        echo"Connected";
    else
         echo"Not Connected";
    

?>