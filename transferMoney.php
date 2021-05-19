<?php
session_start();
include 'connect.php';
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/gif"
        sizes="16x16">
    <link rel="stylesheet" href="style.css">

    <title>Transfer Money</title>
    <style>
        body {
            background-color: rgba(180, 118, 238, 0.377);
        }
    </style>
</head>

<body>
    <header>
        <a href="./index.html" style="text-decoration: none;">
            <img class="icon" href="./index.html" src="./img/home.png" height="45px"
      width="45px"/></a>
        Basic Banking System
    </header>
    <div class="container-transfer-money">
        <h1 class="heading" style="margin-top:0vh;">Transfer Money</h1>
<!--form section starts from here-->
	<form action="updateCredit.php" method="post">
	<label for="sender">Select Sender :</label>
		<select class="select" name="sender" required>
		<?php 
		include 'connect.php';
	    $q="SELECT * FROM `users`";
	    $result=mysqli_query($con,$q);

	    
	    
	    while($row=mysqli_fetch_assoc($result)){
	        $name=$row['name'];
	        echo '
	            <option value="'.$name.' "> '.$name.'</opiton>
	        ';
	    }
		?>
		</select><br><br>
		<label for="receiver">Select Receiver :</label>
		<select class="select" name="receiver" required>
		<?php 
		include 'connect.php';
	    $q="SELECT * FROM `users`";
	    $result=mysqli_query($con,$q);

	    
	    
	    while($row=mysqli_fetch_assoc($result)){
	        $name=$row['name'];
	        echo '
	            <option value="'.$name.' "> '.$name.'</opiton>
	        ';
	    }
		?>
		</select><br><br>
	 <label for="transfer">Amount :</label>
	<input class="select" type="number" name="transfer"  required><br><br>
	<button class="btnTransfer" type="submit" name="submit" >Transfer</button>
	<br><br>
            <a class="red" href="./index.html">Cancel transection and return back</a>
            <br><br>
        </form>
</div>
</body>
</html>