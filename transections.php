<?php 
include 'connect.php';
$q="SELECT * FROM `mini_statement` ORDER BY sn DESC";
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

    <title>Transection History</title>
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
        <h1 class="heading" style="margin-top:0vh;">Transection History</h1>

        <table>
            <tr>
                <th>SN</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
                <th>Time</th>
            
            </tr>
            
          <?php
              
               while($row=mysqli_fetch_assoc($result)){
                   echo'
                            <tr class="table-row">
                                <td class="p1">     '.$row['sn'].'    </td>
                                <td class="p1">     '.$row['sender'].'    </td>
                                <td class="p1">     '.$row['receiver'].'    </td>
                                <td class="p1">     '.$row['amount'].'    </td>
                                <td class="p1">     '.$row['time'].'    </td>
                            </tr>
                   ';
               }
          
          ?>
                        

            
            
            

        </table>
    </div>


</body>

</html>