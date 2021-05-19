<?php 
session_start();
include 'connect.php';
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$address=$row['address'];
$_SESSION['name']=$name;

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

    <title><?php echo $name ?></title>
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
        Basic Banking System  <span style="float:right;color:yellow; font-size:15px"><?php echo $name ?></span>
    </header>
    <div class="container-transfer-money" >
        <h1 class="heading" style="margin-top:0vh;">Customer Details</h1>

		<table>
			<tr>
				<th class="p1">Name</th>
				<td class="p1"  style="text-align:left"> <?php echo $name ;?>     </td>
			</tr>
			<tr>
				<th class="p1">Email</th>
				<td class="p1" style="text-align:left"> <?php echo $row['email'] ;?>     </td>
			</tr>
			<tr>
				<th class="p1">Account Balance</th>
				<td class="p1" style="text-align:left">  <?php echo $amount ;?>       </td>
			</tr>
			<tr>
				<th class="p1">Address</th>
				<td class="p1" style="text-align:left">  <?php echo $address ;?>       </td>
			</tr>
		</table>
    </div>


	<div style="text-align:center">
	<br>
	<form action="transferTo.php" method="post" >
                        <button class="btnTransfer" type="submit" >Transfer Money</button>
                    </form>
		<br>
		<a href="./ministatement.php">
			<button class="btnTransfer">Mini Statement</button>
		</a>
	</div>
</body>

</html>
