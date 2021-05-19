<?php
session_start();
include 'connect.php';
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
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
        Basic Banking System    <span  style="float:right; color:yellow; font-size:15px"><?php echo $name1 ; ?></span>
    </header>
    <div class="container-transfer-money">
        <h1 class="heading" style="margin-top:0vh;">Transfer Money </h1>
        <form action="./checkcredit.php" method="post">
               <label for="receiver">Select Receiver :</label>
            <select  name="receiver" class="select">
                   <?php while($row = $result->fetch_assoc()) { ?>
                			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
                			<?php } ?>

            </select>
            <br><br>
            <label for="transfer">Amount:</label> 
            <input  class="select" type="number" name="transfer" required>
            <br><br>
            <button class="btnTransfer" type="submit" value="Credit" >Transfer</button>
            
        </form>
            
            <br><form action="customers.php" method="post">
			<div class="buttons">
				<button class="btnTransfer" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			</div>
	</form><br>
       
    </div>

</body>

</html>
