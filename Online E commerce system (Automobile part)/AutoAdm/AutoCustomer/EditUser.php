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
<link rel="stylesheet" href="EditUserp.css">
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
<div class="profileContainer">
            <h1 class='conthead'>Your details</h1>
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

               $usn = $_SESSION['Username'] ;

                //---------------------------------------------------------------------------reading statements---------------------
               $sqlll= "select *from customers where Username = '$usn'";  
              $result = mysqli_query($con, $sqlll);
             //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
              $count = mysqli_num_rows($result); 

              if ($count > 0 ) {

               while($row = $result -> fetch_assoc()) {

               echo " <form action ='EditProcess.php' method='post'> ";

               echo "<label for='nm'>Your Name</label>";
               echo " <input type='text' class='it' name='enn' value=". $row['Name']. " required> ";

               echo "<label for='emaill'>Your Email</label>";
               echo " <input class='it' name='eemail' value=". $row['Email']. " required> ";

               echo "<label for='phonee'>Your Phone No.</label>";
               echo " <input class='it' name='ephone' value=". $row['Phone']. " required> ";
               
               echo "<label for='addresss'>Your Address</label>";
               echo " <input class='it' name='eaddress' value=". $row['Address']. " required> ";

               
               echo "<label for='passs'>Your Password</label>";
               echo " <input class='it' name='epasss' type='password' value=". $row['password']. " required> ";

               echo " <button type ='submit' class='profilebtn'>Save changes</button> ";

               echo "</form>" ;

           
                 }   

                  }

               else {
        
                      echo "<h1>Something went wrong  </h1>" ;

                }

              

               
            ?>

            
 
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
