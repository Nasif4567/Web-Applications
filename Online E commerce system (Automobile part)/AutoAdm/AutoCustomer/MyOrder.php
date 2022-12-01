<!----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>MyOrder</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="MyOrder.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <img  src="Images/logo.png">  
        <nav>
        <ul  class="nav_links">
                <li> <a href="profile.php">My profile</a> </li>
                <li> <a href="MyOrder.php" style = "color:  #0088a9">Orders</a> </li>
                <li> <a href="Services.php">Products</a> </li>
                <li> <a href="ContactUS.php">Contact us</a> </li>
                <li><form action = "logout.php" method = "post"><button type="submit">Logout</button></form></a></li>
            </ul>
  
        </nav>
        
   </header>

<!------------------------------------------------------------------------------------------------->
<div class="OrderContainer">
            <h1 class='conthead'>Order to be delivered</h1>

            <table id="ordertable">
            <tr> 
               <th>Order status</th>
               <th>Total price in RM</th>
               <th>Delivery date</th>
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
    
    
    $usn = $_SESSION['Username'] ;

    //---------------------------------------------------------------------------reading statements---------------------
    $sqlll= "select *from placedorder where Username = '$usn'";  
    $result = mysqli_query($con, $sqlll);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if ($count > 0 ) {

        while($row = $result -> fetch_assoc()) {

            echo "<tr><td>" . $row['Status'] . "</td> <td>"  . $row['Total'] .  "</td> <td>" . $row['Date'] . "</td> </tr>" ;
        }

    

    }

    else {
        echo "<tr><td>No order </td> <td>No order</td> <td>No order</td> </tr>" ;
    }


}//-------------------------------------end of else -----------------------------------------------


     ?>


</table>












<h1 class='conthead1'>Items in the order</h1>

            <table id="ordertable">
            <tr> 
               <th>Name</th>
               <th>Quantity</th>
               <th>Price</th>       
             </tr>

             <?php

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "Frenzy";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 

    $usn = $_SESSION['Username'] ;

    //---------------------------------------------------------------------------reading statements---------------------
    $sqlll= "select *from orders where Username = '$usn'";  
    $result = mysqli_query($con, $sqlll);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if ($count > 0 ) {

        while($row = $result -> fetch_assoc()) {

            echo "<tr><td>" . $row['Name'] . "</td> <td>"  . $row['Quantity'] .  "</td> <td>" . $row['Price'] . "</td> </tr>" ;
        }   

    }

    else {
        
        echo "<tr><td>No item </td> <td>No item</td> <td>No item</td> </tr>" ;

    }


     ?>


</table>














<h1 class='conthead1'>Your order history</h1>

            <table id="ordertable">
            <tr> 
               <th>Total</th>
               <th>Date</th>
               <th>Address</th>     
             </tr>

             <?php

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "Frenzy";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 

    $usn = $_SESSION['Username'] ;

    //---------------------------------------------------------------------------reading statements---------------------
    $sqlll= "select *from orderhistory where Username = '$usn'";  
    $result = mysqli_query($con, $sqlll);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if ($count > 0 ) {

        while($row = $result -> fetch_assoc()) {

            echo "<tr><td>" . $row['Total'] . "</td> <td>"  . $row['Date'] .  "</td> <td>" . $row['Address'] . "</td> </tr>" ;
        }   

    }

    else {
        
        echo "<tr><td>No item </td> <td>No item</td> <td>No item</td> </tr>" ;

    }


     ?>


</table>





 </div>



 <!------------------------------------------------------------------------------------>
 <footer>

<div class="footer-content">
    <h3>Autocom limited</h3>

    <p>The best filter in Bangladesh</p>


    <ul class="socials">
        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://myaccount.google.com/profile"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
        <li><a href="https://www.linkedin.com/home/?originalSubdomain=bd"><i class="fa fa-linkedin-square"></i></a></li>
     </ul>


</div>


<div class="footer-bottom">
    <!-- add all information -->

    <p>copyright &copy;2021 <a href="#">@INTI_INTERNATIONAL_UNIVERSITY</a>  </p>

    <div class="footer-menu">
        <ul class="f-menu">
           <li><a href="Terms.php">Terms and conditions</a></li>
           <li><a href="Privacy.php">Privacy and policy</a></li>
           <li><a href="">Contact</a></li>
           <li><a href="">Blog</a></li>
        </ul>
       </div>
 </div>

</footer>

   


</body>
