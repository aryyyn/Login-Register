<?php

include "connection.php";

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM discord_data WHERE Email = '$email' AND Username = '$username' AND Password = '$password'";
    $results = mysqli_query($connection,$sql);
    if(mysqli_num_rows($results) > 0)
    {
        echo "Logged in successfully! ";
        header('Location: index.php');
        
    
    }
    else 
    {
        echo "Wrong info! Try again! ";
        
    }
   
}

?>