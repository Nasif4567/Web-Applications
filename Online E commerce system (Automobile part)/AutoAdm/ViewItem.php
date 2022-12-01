<!----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>View Item</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="ViewItem.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <img  src="Images/logo.png">  
        <nav>
        <ul  class="nav_links">
                <li> <a href="Profile.php">Manage Products</a> </li>
                <li> <a href="ViewCustomer.php">View Users</a> </li>
                <li> <a href="AdminOrder.php">Orders</a> </li>
                <li> <a href="ContactUSAdmin.php">Check messages</a> </li>
                <li><form action = "logout.php" method = "post"><button type="submit">Logout</button></form></a></li>
            </ul>
  
        </nav>
        
   </header>

<!------------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------->
<div class="OrderContainer">
            <h1 class='conthead'>Items in the order</h1>

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

    session_start();   
    $usn = $_POST['idview'] ;

    //---------------------------------------------------------------------------reading statements---------------------
    $sqlll= "select *from orders where Username = '$usn'";  
    $result = mysqli_query($con, $sqlll);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if ($count > 0 ) {

        while($row = $result -> fetch_assoc()) {

            echo "<tr><td>" . $row['Name'] . "</td> <td>"  . $row['Quantity'] .  "</td> <td>" . $row['Price'] . "</td> </tr>";
        }

    

    }

    else {
        echo "<tr><td>No order </td> <td>No order</td> <td>No order</td> <td>No order</td> <td>No order</td> </tr>" ;
    }


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