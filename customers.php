<?php 
include 'connect.php';
$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


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

    <title>Customers</title>
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
    <div class="container-transection-money">
        <h1 class="heading" style="margin-top:0vh;">Customers Information</h1>

        <table>
            <tr>
                <th>SN</th>
                <th>Customer</th>
                <th>Email</th>
                <th>Balance</th>
                <th>Detail</th>
            </tr>

<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="p1 "><?php echo  $row["sn"]; ?> </td>
			<td class="p1 "><?php echo  $row["name"]; ?></td>
			<td class="p1 email "><?php echo  $row["email"]; ?></td>
			<td class="p1 "><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="getCustomerDetails.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="p1 "><?php echo  $row["sn"]; ?> </td>
			<td class="p1 "><?php echo  $row["name"]; ?></td>
			<td class="p1 email "><?php echo  $row["email"]; ?></td>
			<td class="p1 "><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="getCustomerDetails.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="p1 "><?php echo  $row["sn"]; ?> </td>
			<td class="p1 "><?php echo  $row["name"]; ?></td>
			<td class="p1 email "><?php echo  $row["email"]; ?></td>
			<td class="p1 "><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="getCustomerDetails.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
       <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="p1 "><?php echo  $row["sn"]; ?> </td>
			<td class="p1 "><?php echo  $row["name"]; ?></td>
			<td class="p1 email "><?php echo  $row["email"]; ?></td>
			<td class="p1 "><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="getCustomerDetails.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="p1 "><?php echo  $row["sn"]; ?> </td>
			<td class="p1 "><?php echo  $row["name"]; ?></td>
			<td class="p1 email "><?php echo  $row["email"]; ?></td>
			<td class="p1 "><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="getCustomerDetails.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="p1 "><?php echo  $row["sn"]; ?> </td>
			<td class="p1 "><?php echo  $row["name"]; ?></td>
			<td class="p1 email "><?php echo  $row["email"]; ?></td>
			<td class="p1 "><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="getCustomerDetails.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
       <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="p1 "><?php echo  $row["sn"]; ?> </td>
			<td class="p1 "><?php echo  $row["name"]; ?></td>
			<td class="p1 email "><?php echo  $row["email"]; ?></td>
			<td class="p1 "><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="getCustomerDetails.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="p1 "><?php echo  $row["sn"]; ?> </td>
			<td class="p1 "><?php echo  $row["name"]; ?></td>
			<td class="p1 email "><?php echo  $row["email"]; ?></td>
			<td class="p1 "><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="getCustomerDetails.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
			<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="p1 "><?php echo  $row["sn"]; ?> </td>
			<td class="p1 "><?php echo  $row["name"]; ?></td>
			<td class="p1 email "><?php echo  $row["email"]; ?></td>
			<td class="p1 "><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="getCustomerDetails.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
       <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="p1 "><?php echo  $row["sn"]; ?> </td>
			<td class="p1 "><?php echo  $row["name"]; ?></td>
			<td class="p1 email "><?php echo  $row["email"]; ?></td>
			<td class="p1 "><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="getCustomerDetails.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>

           
   
 
        </table>
    </div>


</body>

</html>