<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>Services</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="servicesstylep.css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<header>
        <img  src="Images/logo.png">  
        <nav>
        <ul  class="nav_links">
                <li> <a href="profile.php">My profile</a> </li>
                <li> <a href="MyOrder.php" >Orders</a> </li>
                <li> <a href="Services.php" style = "color:  #0088a9">Products</a> </li>
                <li> <a href="ContactUS.php">Contact us</a> </li>
                <li><a href="Logout.php">Logout</a></li>
            </ul>
        </nav>
        
   </header>




 




<!----------------------------------------------------------------------------------->

<div class="main1">


  
      <h8 style ="font-size:50px;color:white;margin-left:20px">Our Air Filters</h8>


   <a href="cart.php"> <h2><i class="fa fa-shopping-cart" style="font-size:48px;color:rgb(104, 104, 223) ; position: absolute; top: 20%;left: 90%;" ></i></h2></a>


      


   <!--cards -->

   <?php 
     $host = "localhost";  
     $user = "root";  
     $password = '';  
     $db_name = "Frenzy";  
       
     $con = mysqli_connect($host, $user, $password, $db_name);  
     if(mysqli_connect_errno()) {  
         die("Failed to connect with MySQL: ". mysqli_connect_error());  
     } 
 

    //-------------------------------------------------------------------------------

    $displayq = "select *from airproducts";
    $qdis = mysqli_query($con, $displayq); 

    while ($result = mysqli_fetch_array($qdis)) {
       
   
  echo '
   <div class="card">
   
   <div class="image">
      <img src="'.$result['image'].'">
   </div>
   <div class="title">
    <h1>
    Name : '  .$result['name'].'

   </h1>
   <h3>Brand : ' .$result['brand'].'

   </h3>
   <h3>
      Size : '. $result['size']. '
   </h3>
   <h3> 
      Price : ' .$result['price']. '
   </h3>
   </div>
   <div class="des">
   <button class="btn">Add to cart</button>
   </div>
   </div> ';

    }     


   ?>



   </div>


<!------------------------------------------------------------------------------>

<div class="main">


   
<h5 style ="font-size:50px;color:white;margin-left:15px">Our Oil Filters</h5>
  
      


   <!--cards -->

   <?php 
     $host = "localhost";  
     $user = "root";  
     $password = '';  
     $db_name = "Frenzy";  
       
     $con = mysqli_connect($host, $user, $password, $db_name);  
     if(mysqli_connect_errno()) {  
         die("Failed to connect with MySQL: ". mysqli_connect_error());  
     } 
 

    //-------------------------------------------------------------------------------

    $displayq = "select *from oilproducts";
    $qdis = mysqli_query($con, $displayq); 

    while ($result = mysqli_fetch_array($qdis)) {
       
   
  echo '
   <div class="card">
   
   <div class="image">
      <img src="'.$result['image'].'">
   </div>
   <div class="title">
    <h1>
    Name : '  .$result['name'].'

   </h1>
   <h3>Brand : ' .$result['brand'].'

   </h3>
   <h3>
      Size : '. $result['size']. '
   </h3>
   <h3> 
      Price : ' .$result['price']. '
   </h3>
   </div>
   <div class="des">
   <button class="btn">Add to cart</button>
   </div>
   </div> ';

    }     


   ?>




  </div>






  //------------------------------------------------------------------------------


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

  // array for  getting the products 

  let products = [];
  


  <?php
  $host = "localhost";  
  $user = "root";  
  $password = '';  
  $db_name = "Frenzy";  
    
  $con = mysqli_connect($host, $user, $password, $db_name);  
  if(mysqli_connect_errno()) {  
      die("Failed to connect with MySQL: ". mysqli_connect_error());  
  } 


 //-------------------------------------------------------------------------------

 $displayq = "select *from airproducts";
 $qdis = mysqli_query($con, $displayq); 

 while ($result = mysqli_fetch_array($qdis)) {
  ?>

  


   products.push(

{
   name: '<?php echo $result['name'] ;?>' ,
   tag: '<?php echo $result['filename']; ?>' ,
   price: '<?php echo $result['price'] ;?>' ,
   inCart: 0

},
)



<?php }  ?>


//----------------------------------------------------------------------------------

let products2 = [];




<?php
  $host = "localhost";  
  $user = "root";  
  $password = '';  
  $db_name = "Frenzy";  
    
  $con = mysqli_connect($host, $user, $password, $db_name);  
  if(mysqli_connect_errno()) {  
      die("Failed to connect with MySQL: ". mysqli_connect_error());  
  } 


 //-------------------------------------------------------------------------------

 $displayqq = "select *from oilproducts";
 $qdiss = mysqli_query($con, $displayqq); 

 while ($results = mysqli_fetch_array($qdiss)) {
  ?>

products2.push(

{
   name: '<?php echo $results['name'] ;?>' ,
   tag: '<?php echo $results['filename']; ?>' ,
   price: '<?php echo $results['price'] ;?>' ,
   inCart: 0

}, )




<?php }  ?>










Array.prototype.push.apply(products,products2);







// code for add adding items in cart
var noti = document.querySelector('h2');
	var button = document.getElementsByTagName('button');
   var add = Number(noti.getAttribute('data-count') || 0);
			noti.classList.add('zero')

	for(let i=0; i< button.length; i++){
		button[i].addEventListener('click', (e)=>{

         add = Number(noti.getAttribute('data-count') || 0);
			noti.classList.add('zero')	
         
        // store the cart numbers 

         let cartnumber = localStorage.getItem('cartnumber')
         cartnumber = parseInt(cartnumber);

         if (cartnumber) {
             localStorage.setItem('cartnumber',cartnumber + 1)
             noti.setAttribute('data-count', add +1);
         } else {
            localStorage.setItem('cartnumber',1)
            noti.setAttribute('data-count', 1);
         }

       //---------------------------------------------------------------




         let cartItems = localStorage.getItem('productsInCart');
         cartItems = JSON.parse(cartItems);
         
         if (cartItems != null ) {

            if (cartItems[products[i].tag] == undefined) {
               cartItems = {
                  ...cartItems,
                  [products[i].tag] : products[i]
               }

            }
            cartItems[products[i].tag].inCart +=1;
         }

         else {
            products[i].inCart = 1;

            cartItems = {[products[i].tag]: products[i]}

         }

         
         localStorage.setItem("productsInCart", JSON.stringify(cartItems))

         //--------------------------------------------------------------

         // to get the toatal cost 

         let cartcost = localStorage.getItem('totalCost');

         if (cartcost != null) {
            cartcost = parseInt(cartcost)

            localStorage.setItem("totalCost",cartcost + parseInt(products[i].price));

         }

         else {
            localStorage.setItem("totalCost",products[i].price)
         }
      //---------------------------------------------------------------

		})





	}
   // end of for loop listener-------------------------------------------

   function pageonload() {

      // load the cart numbers
   let cartnumber = localStorage.getItem('cartnumber')
         if (cartnumber) {
             noti.setAttribute('data-count', cartnumber); }
             //---------------------------------------------------------------

   }

   pageonload();
   
</script>