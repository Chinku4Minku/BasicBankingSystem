<?php

$servername = 'localhost';
$username = 'root';
$password='';
$database ='id16834493_banking_system';

// Connecting to the database
$con = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}


?>
