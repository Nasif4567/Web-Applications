<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body onload="slider()">

    <header>
        <img  src="Images/logo.png">  
        <nav>
            <ul  class="nav_links">
                <li> <a style="color: #0088a9 ;" href="Home.">Home</a> </li>
                <li> <a href="Servicess.php">Our filters</a> </li>
                <li> <a href="CreateDatabase.php">Profile</a> </li>


                <li> <a href="#">About us</a> 
                    <div class="submenuabt" >
                    <ul>
                        <li> <a href="CompanyDescription.php">Company description</a> </li>
                        <li> <a href="Privacy.php">Privacy & Policy</a> </li>
                        <li> <a href="Terms.php">Terms and condition</a> </li>
                    </ul>
                </div>
                </li>

                <li><form action = "CreateDatabase.php" method = "post"><button type="submit">Contact us</button></form></a></li>
            </ul>

        </nav>
        
   </header>
    

    <div class ="banner">

        <div class="slider">

           <img src="Images/car3.jpg" id ="slideImg" >
            
        </div>

        <div class ="content"> 
            <h1>Want the Best filter in the town ? Here we are</h1>
        
        </div>

        <div class ="content2"> 

            <h3>Filters the oil like gold and makes your air fresh </h3>
        
        </div>


        <div class ="Convenient"> 

            <h4> <img src="https://img.icons8.com/color-glass/48/000000/easy.png"/> About Auto com </h4>
            
            <p> Autocom Industries Limited <br> 
                is a Bangladeshi <br>
                owned manufacturing company <br>
                dedicated to provide <br>
                quality automotive filters<br> 
                to the market.<br>
            </p>

        </div>



        <div class ="Services"> 

            <h4> <img src="https://img.icons8.com/color/48/000000/services.png"/> Our Service</h4>

            <p> 
                We provide a 24 hours deivery service<br>
                You can make the order in our website !<br>
                Call us : +8801922693933<br> 
                autocomlimited@yahoo.com<br>
            </p>

        </div>



        <div class ="Mission"> 

            <h4> <img src="https://img.icons8.com/color/48/000000/mission-of-a-company.png"/>  What we promise !</h4>
            
            <p> 
                100 % best filter<br> 
                Delivery just on time !<br>
                100 % cashback if any any problem<br>
            </p>

        </div>




        <div class ="Choose"> 

            <h4> <img src="https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/64/000000/external-choose-ads-icongeek26-linear-colour-icongeek26.png"/>  Why choose us ?</h4>
            
            <p> 

                 Autocom has gained its popularity for its tremendeous products <br>
                 Automer has the preminum quality filters that is distributed all over bangladesh. <br>
                 We are known for our craftsmanship in giving our final touch on our products. <br>
                 The use of natural and premium quality parts <br>
                 and “say NO to any contamination made this house unique.<br>

            </p>

        </div>


        
        
         </div>
 

        

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


    <script>

        var slideImage = document.getElementById("slideImg");

        var images = new Array(
            "Images/17801-11070.fw_-1.png",
            "Images/429-1-600x732.png",
            "Images/17801-BZ080.fw_-1.png",
            "Images/17801-50040.fw_-1.png"
        );

        var length = images.length;
        var i = 0;

        function slider() {
            if(i > length-1) {
                i = 0;
            }

            slideImage.src = images[i];
            i++;
            setTimeout('slider()',3000);
        }



    </script>


