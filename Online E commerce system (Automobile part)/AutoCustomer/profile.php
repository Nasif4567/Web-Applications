<!----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>Profile</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="profileh.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <img  src="Images/logo.png">  
        <nav>
        <ul  class="nav_links">
                <li> <a href="profile.php" style = "color:  #0088a9">My profile</a> </li>
                <li> <a href="MyOrder.php" >Orders</a> </li>
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
            session_start();
            if(!$_SESSION['Username'])
            {
                    header("location: login.php");
            }
            
            else {
                echo "<h2 class='text-success'>Name : ".$_SESSION['Name']."</h2>";
                echo "<h2 class='text-success'>Email : ".$_SESSION['Email']."</h2>";
                echo "<h2 class='text-success'>Phone : ".$_SESSION['Phone']."</h2>";
                echo "<h2 class='text-success'>Address : ".$_SESSION['Address']."</h2>";
                echo "<h2 class='text-success'>Username : ".$_SESSION['Username']."</h2>"; 
                
            }
            ?>

           <form action ='EditUser.php' method='post'> <button type ="submit" class="profilebtn">Edit profile details</button> </form>           
           <form action ='DeleteUser.php' method='post'> <button type ="submit" class="profilebtn">Delete account</button> </form>
 
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
