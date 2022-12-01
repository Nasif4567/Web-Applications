<!----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Order</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="AdminOrderr.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
         <h1 style="color:white; size:20px">StayBlizz Admin<h1> 
        <nav>
            <ul  class="nav_links">
                <li> <a href="Profile.php">Profile settings</a> </li>
                <li> <a href="ViewCustomer.php">View Users</a> </li>
                <li> <a href="AdminOrder.php" style = "color:  #0088a9">Check Placed orders</a> </li>
                <li> <a href="ContactUSAdmin.php">Check messages</a> </li>
                <li><form action = "logout.php" method = "post"><button type="submit">Logout</button></form></a></li>
            </ul>
  
        </nav>
        
   </header>

<!------------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------->
<div class="OrderContainer">
            <h1 class='conthead'>Order to be delivered</h1>

            <table id="ordertable">
            <tr> 
               <th>Order status</th>
               <th>Total price in RM</th>
               <th>Delivery date</th>
               <th>Confirm delivery</th>
               <th>View Item list </th>
             </tr>

             

             <?php

session_start();
if(!$_SESSION['Username'])
{
        header("location: login.php");
}


else {

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "shop_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 


    //---------------------------------------------------------------------------reading statements---------------------
    $sqlll= "select *from placedorder";  
    $result = mysqli_query($con, $sqlll);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if ($count > 0 ) {

        while($row = $result -> fetch_assoc()) {

            echo "<tr><td>" . $row['Status'] . "</td> <td>"  . $row['Total'] .  "</td> <td>" . $row['Date'] . "</td> <td> <form action ='DeliveredProcess.php' method='post'> <input type='hidden' name='id' value=". $row['Email']. "> <button name = 'deliveredbtn' type = 'submit' style = 'color:black'>Delivered</button> </form> </td>        <td> <form action ='ViewItem.php' method='post'> <input type='hidden' name='idview' value=". $row['Email']. "> <button name = 'viewbtn' type = 'submit' style = 'color:black'>View Item list</button> </form> </td> </tr>" ;
        }

    

    }

    else {
        echo "<tr><td>No order </td> <td>No order</td> <td>No order</td> <td>No order</td> <td>No order</td> </tr>" ;
    }





}// end of first else 


     ?>


</table>


</div>






</body>



<!------------------------------------------------------------------------------------>


<!------------------------------------------------------------------------------------>




</body>
