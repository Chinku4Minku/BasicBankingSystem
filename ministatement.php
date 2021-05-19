<?php 
session_start();
include 'connect.php';
$name1=$_SESSION['name'];
$q="select * from mini_statement where receiver='$name1'";
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

    <title>Mini Statement</title>
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
        <h1 class="heading" style="margin-top:0vh;">Mini Statement</h1>

<table>
    <tr>
        <th>Sender Name</th>
        <th>Amount</th>
        <th>Time</th>
    </tr>
			
		<?php
		   while($row=mysqli_fetch_assoc($result)){
		       $sender=$row['sender'];
		       $amount=$row['amount'];
		       $time=$row['time'];
		       
		       echo '
        		    <tr>
        				<td> '.$sender.'</td>
        				<td>'.$amount.'</td>
        				<td>'.$time.'</td>
        			</tr>
		       ';
		   }
		?>
			
			
  
</table>     



    </div>
    
    <div style="text-align: center;">
        <br>
        <a href="./">
			<button class="btnTransfer">Back</button>
		</a>
    </div>

</body>

</html>
