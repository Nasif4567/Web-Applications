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
<link rel="stylesheet" href="ContactUsp.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <img  src="Images/logo.png">  
        <nav>
        <ul  class="nav_links">
                <li> <a href="profile.php">My profile</a> </li>
                <li> <a href="MyOrder.php" >My Pending Order</a> </li>
                <li> <a href="Services.php">Place an Order now !</a> </li>
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
    <div class="contactcon">
      <span class="fa fa-phone"></span>+6001 1023 567
      <span class="fa fa-envelope-o"></span> fenzy@company.com
    </div>
  </form>




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
