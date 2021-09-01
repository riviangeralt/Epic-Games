<?php

    $email=$_POST['email'];
    $password=$_POST['password'];

    // Database Connection
    $con = new mysqli("localhost","root","","website");
    if($con->connect_error){
        die("Failed to Connect: ".$con->connect_error)
    }else{
        $stmt= $con->prepare()
    }

?>