<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>Cart</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="cart.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>

    
    <header>
        <img  src="Images/logo.png">  
        <nav>
        <ul  class="nav_links">
                <li> <a href="profile.php">My profile</a> </li>
                <li> <a href="MyOrder.php" style = "color:  #0088a9">My Pending Order</a> </li>
                <li> <a href="Services.php">Place an Order now !</a> </li>
                <li> <a href="ContactUS.php">Contact us</a> </li>
                <li><form action = "logout.php" method = "post"><button type="submit">Logout</button></form></a></li>
            </ul>
  
        </nav>
        
   </header>
        
 

<!------------------------------------------------------------------------------------------------->

     <div class="CartContainer">

    <?php

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "frenzy";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 

    session_start();   
    $usn = $_SESSION['Username'] ;

    //---------------------------------------------------------------------------reading statements---------------------
    $sqlll= "select *from placedorder where Username = '$usn'";  
    $result = mysqli_query($con, $sqlll);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if ($count == 1 ) {

        echo " <div class='Header'> ";
        echo "<h3 class='Heading'>Your already have a pending order please wait until the order is delivered . Thank you</h3>";
        echo "</div>";

    }

    else {
        echo " <script src='order.js'></script> " ;

    }


     ?>
    

            
        </div>

</body>