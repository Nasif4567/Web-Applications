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
<link rel="stylesheet" href="AdminOrders.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <img  src="Images/logo.png">  
        <nav>
            <ul  class="nav_links">
                <li> <a href="Profile.php">Manage products</a> </li>
                <li> <a href="ViewCustomer.php">View Users</a> </li>
                <li> <a href="AdminOrder.php" style = "color:  #0088a9">Orders</a> </li>
                <li> <a href="ContactUSAdmin.php">Check messages</a> </li>
                <li><form action = "logout.php" method = "post"><button type="submit">Logout</button></form></a></li>
            </ul>
  
        </nav>
        
   </header>

<!------------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------->
<div class="OrderContainer">
            <h1 class='conthead'>Orders to be delivered</h1>

            <table id="ordertable">
            <tr> 
               <th>Order status</th>
               <th>Total price in RM</th>
               <th>Delivery date</th>
               <th>Delivery Address</th>
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
    $db_name = "Frenzy";  
      
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

            echo "<tr><td>" . $row['Status'] . "</td> <td>"  . $row['Total'] .  "</td> <td>" . $row['Date'] . "</td> <td>" . $row['Address'] . "</td> <td> <form action ='DeliveredProcess.php' method='post'> <input type='hidden' name='id' value=". $row['Username']. "> <button name = 'deliveredbtn' type = 'submit' style = 'color:pink'>Delivered</button> </form> </td>        <td> <form action ='ViewItem.php' method='post'> <input type='hidden' name='idview' value=". $row['Username']. "> <button name = 'viewbtn' type = 'submit' style = 'color:pink'>View Item list</button> </form> </td> </tr>" ;
        }

    

    }

    else {
        echo "<tr><td>No order </td> <td>No order</td> <td>No order</td> <td>No order</td> <td>No order</td> <td>No order</td> </tr>" ;
    }





}// end of first else 


     ?>


</table>


</div>






<!------------------------------------------------------------------------------------------------->
<div class="OrderContainer">
            <h1 class='conthead'>All the order history</h1>

            <table id="ordertable">
            <tr> 
               <th>Total</th>
               <th>Date</th>
               <th>Address</th>
               <th>Username</th>
               <th>Delete</th>
             </tr>

             

             <?php
if(!$_SESSION['Username'])
{
        header("location: login.php");
}


else {

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "Frenzy";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 


    //---------------------------------------------------------------------------reading statements---------------------
    $sqlll= "select *from orderhistory";  
    $result = mysqli_query($con, $sqlll);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if ($count > 0 ) {

        while($row = $result -> fetch_assoc()) {

            echo "<tr><td>" . $row['Total'] . "</td> <td>"  . $row['Date'] .  "</td> <td>" . $row['Address'] . "</td> <td>" . $row['Username'] . "</td> <td> <form action ='orderhistorydelete.php' method='post'> <input type='hidden' name='id' value=". $row['Username']. "> <button name = 'deliveredbtn' type = 'submit' style = 'color:pink'>Delete history</button> </form> </td>       </tr>" ;
        }

    

    }

    else {
        echo "<tr><td>No order </td> <td>No order</td> <td>No order</td> <td>No order</td><td>No order</td></tr>" ;
    }





}// end of first else 


     ?>


</table>


</div>






</body>



<!------------------------------------------------------------------------------------>

<footer>

    <div class="footer-content">
        <h3>Autocom Limited</h3>

        <p>Filters the oil like gold and makes your air fresh</p>


        <ul class="socials">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
         </ul>


    </div>

    <div class="footer-bottom">
        <!-- add all information -->

        <p> </p>

        <div class="footer-menu">
            
           </div>
     </div>







</footer>
