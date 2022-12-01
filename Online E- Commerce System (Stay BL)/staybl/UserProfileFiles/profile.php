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
                        <li><a href="UserHome.php">HOME</a></li>
                        <li><a href="UserAboutUs.php">ABOUT</a></li>
                        <li><a href="item.php">PRODUCTS</a></li>
                        <li><a href="CreateDatabase.php">ACCOUNT</a></li>
                        <li><a href="usercontact.php">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </div>

<!------------------------------------------------------------------------------------------------->
<div class="profileContainer">
            <h1 class='conthead'>Your details</h1>
            <?php
            session_start();
            if(!$_SESSION['Email'])
            {
                    header("location: CreateDatabase.php");
            }
            
            else {
                echo "<h2 class='text-success'>Name : ".$_SESSION['Name']."</h2>";
                echo "<h2 class='text-success'>Email : ".$_SESSION['Email']."</h2>";    
            }
            ?>
 
        </div>



 <!------------------------------------------------------------------------------------>

 <footer>

<div class="footer-content">
    <h3>Frenzy Brownie Shop</h3>

    <p>The best bakary in the town</p>


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

    <p>copyright &copy;2021 <a href="#">@YPCInternationalCollege</a>  </p>

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
