<!----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <img  src="Images/logo.png">  
        <nav>
            <ul  class="nav_links">
                <li> <a href="Home.php">Home</a> </li>
                <li> <a href="Services.html">Our Brownies & Cookies</a> </li>
                <li> <a href="login.html" style = "color:  #0088a9">Login and Sign up</a> </li>
                <li> <a href="#">About us</a> 
                    <div class="submenuabt" >
                    <ul>
                        <li> <a href="#">Our vision statement</a> </li>
                        <li> <a href="#">Our Mission stamement</a> </li>
                        <li> <a href="#">Company information</a> </li>
                    </ul>
                </div>
                </li>
  
                <li><a href="#"><button>Contact us</button></a></li>
            </ul>
  
        </nav>
        
   </header>

<!------------------------------------------------------------------------------------------------->


<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
            <form action="lprocess.php" method="POST">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input class="input" type ="text" id = 'usern' name="usern"  required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input class="input" type="password" id = "passwordn" name="passwordn" required>
				</div>
				
				<div class="group">
					<input id="loginbtn" type="submit" class="button" value="Sign In">
				</div>
            </form>
				<div class="hr"></div>
			</div>


			<div class="sign-up-htm"> 
            <form action="rprocess.php" method="POST">

				<div class="group">
					<label for="name" class="label">Name</label>
					<input id="rname" name="rname" type="text" class="input" required>
				</div>

				<div class="group">
					<label for="email" class="label">Email</label>
					<input id="remail" name="remail" type ="email" class="input" required>
				</div>

				<div class="group">
					<label for="phone" class="label">Phone</label>
					<input id="rphone" name="rphone" type="text"   class="input" data-type="number" required>
				</div>

				<div class="group">
					<label for="address" class="label">Address</label>
					<input id="raddr" name="raddr" type="text" class="input" required>
				</div>

                <div class="group">
					<label  class="label">Enter a username</label>
					<input id="run" name="run" type="text" class="input" required>
				</div>

               

                <div class="group">
					<label for="pass" class="label">Password</label>
					<input id="rpass" name="rpass" type="password" class="input" required>
				</div>

				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>

                </form>
                
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
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
