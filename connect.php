<?php

$servername = 'localhost';
$username = 'id16834493_chinku4minku_4432';
$password='?BPTgGuVSN_Gj$r7';
$database ='id16834493_banking_system';

// Connecting to the database
$con = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}


?>