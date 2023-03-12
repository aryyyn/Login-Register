<?php

include "connection.php";

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $confirmemail = $_POST['confirmemail'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO discord_data(Email,ConfirmEmail,Username,Password) values('$email','$confirmemail','$username','$password')";
    if(mysqli_query($connection,$sql))
    {
        echo "Registered successfully!";
        header('location: index.php');
        
    }
    else
    {
        echo "Please check your data and try again! :C";
       
    }
   
}

?>