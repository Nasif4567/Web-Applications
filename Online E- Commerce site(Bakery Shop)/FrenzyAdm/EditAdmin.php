<!----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>Edit my details</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="EditAdmin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <img  src="Images/logo.png">  
        <nav>
        <ul  class="nav_links">
                <li> <a href="Profile.php">Profile settings</a> </li>
                <li> <a href="ViewCustomer.php">View Users</a> </li>
                <li> <a href="AdminOrder.php">Check Placed orders</a> </li>
                <li> <a href="ContactUSAdmin.php">Check messages</a> </li>
                <li><form action = "logout.php" method = "post"><button type="submit">Logout</button></form></a></li>
            </ul>
  
        </nav>
        
   </header>

<!------------------------------------------------------------------------------------------------->
<div class="profileContainer">
            <h1 class='conthead'>Your details</h1>
            <?php
               session_start();

               echo " <form action ='EditAdminProcess.php' method='post'> ";
               echo "<label for='namee'>Admin Name</label>";
               echo " <input class='it' name='ename' value=". $_SESSION['Name']. " required>  ";
               
               echo "<label for='passs'>Admin Password</label>";
               echo " <input class='it' name='epass' type='password' value=". $_SESSION['Password']. " required> ";

               echo " <button type ='submit' class='profilebtn'>Save changes</button>";

               echo "</form>" ;
            ?>

            
 
        </div>



<!------------------------------------------------------------------------------------>

<footer>

    <div class="footer-content">
        <h3>Frenzy Brownie Shop</h3>

        <p>The best bakary in the town</p>


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

        <p>copyright &copy;2022 <a href="#">foolishdeveloper</a>  </p>

        <div class="footer-menu">
            <ul class="f-menu">
               <li><a href="">Terms and Policy</a></li>
               <li><a href="">About</a></li>
               <li><a href="">Contact</a></li>
               <li><a href="">Blog</a></li>
            </ul>
           </div>
     </div>






</footer>


</body>
