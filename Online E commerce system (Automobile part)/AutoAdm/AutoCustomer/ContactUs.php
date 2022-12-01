<!----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>Contact us</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="ContactUspp.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <header>
        <img  src="Images/logo.png">  
        <nav>
        <ul  class="nav_links">
                <li> <a href="profile.php">My profile</a> </li>
                <li> <a href="MyOrder.php" >Orders</a> </li>
                <li> <a href="Services.php">Products</a> </li>
                <li> <a href="ContactUS.php" style = "color:  #0088a9">Contact us</a> </li>
                <li><form action = "logout.php" method = "post"><button type="submit">Logout</button></form></a></li>
            </ul>
        </nav>
        
   </header>

<!------------------------------------------------------------------------------------------------->

<form class="form" action="ContactProcess.php" method = "post">
    <h2>CONTACT US</h2>
    <p type="Name:"><input name = "name" placeholder="Write your name here.." required></input></p>
    <p type="Message:"><input name ="mesg" placeholder="What would you like to tell us.."></input></p>
    <button id = "btncon" name = "btncont" type="submit" class = "btncontact">Send Message</button>


<div class="alert alert-primary" role="alert">
<?php
  session_start();
  if (isset($_SESSION['messagesent'])) {
  echo '<script type="text/javascript">';
  echo ' alert("Message Sent !!")';  //not showing an alert box.
  echo '</script>';
  unset($_SESSION['messagesent']); }
  ?>

</div>

    <div class="contactcon">
      <span class="fa fa-phone"></span>+8801922693933 </span>
      <span </span> autocomlimited@yahoo.com</span>
    </div>
  </form>


  




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
