<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Products page</title>
        <link rel="stylesheet" href="cart.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body>
        <section class="shop">
        <div class="products">
            <div class="container">
                        <div class="bar">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">StayBlizz</h2>
                </div>
                
                <div class="menu">
                    <ul>
                        <li><a href="profile.php">My profile</a></li>
                        <li><a href="item.php">Place order here</a></li>
                        <li><a href="MyOrder.php">My orders</a></li>
                        <li><a href="Logout.php">Logout </a></li>
                    </ul>
                </div>
            </div>
        </div>

 


   

<!------------------------------------------------------------------------------------------------->

     <div class="CartContainer">

    <?php

    // this cart.php will only work if the user is logged in.................

    include 'database.php';

    session_start();
            if(!$_SESSION['email'])
            {
                    header("location: CreateDatabase.php");
            }
            
            else {
  
    $usn = $_SESSION['email'] ;

    //---------------------------------------------------------------------------reading statements---------------------
    $sqlll= "select *from placedorder where Email = '$usn'";  
    $result = mysqli_query($conn, $sqlll);
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



} // end of else 


     ?>
    

            
        </div>

</body>