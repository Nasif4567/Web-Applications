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
<link rel="stylesheet" href="servicesstyle.css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



<?php
  session_start();
  if (isset($_SESSION['order'])){
    echo '<script type="text/javascript">';
    echo ' alert("Payment success")';  //not showing an alert box.
    echo '</script>';
    unset($_SESSION['order']);
  }

  ?>

<body>

   <header>
      <img  src="Images/logo.png">  
      <nav>
      <ul  class="nav_links">
                <li> <a href="profile.php">My profile</a> </li>
                <li> <a href="MyOrder.php">My Pending Order</a> </li>
                <li> <a href="Services.php" style = "color:  #0088a9">Place an Order now !</a> </li>
                <li> <a href="ContactUS.php">Contact us</a> </li>
                <li> <a href="CreateDatabase.php">Logout</a> </li>
            </ul>
      </nav>
      
 </header>



 



<!----------------------------------------------------------------------------------->

<div class="main1">


   <div class ="contentservice2"> 
      <h1>Our Cookies</h1>
   </div>

   <a href="cart.php"> <h2><i class="fa fa-shopping-cart" style="font-size:48px;color:rgb(104, 104, 223) ; position: absolute; top: 20%;left: 90%;" ></i></h2></a>


      


   <!--cards -->
   
   
   <div class="card">
   
   <div class="image">
      <img src="Images/chococook.jpg">
   </div>
   <div class="title">
    <h1>
   Chocolate chip cookies</h1>
   <h3>1 box (250 gm) : 40 RM
   </h3>
   </div>
   <div class="des">
   <button class="btn">Add to cart</button>
   </div>
   </div>
   <!--cards -->
   
   
   <div class="card">
   
   <div class="image">
      <img src="Images/biscotticook.jpg">
   </div>
   <div class="title">
    <h1>
   Biscotti cookies</h1>
   <h3>1 box (250 gm) : 30 RM
   </h3>
   </div>
   <div class="des">
   <button class="btn">Add to cart</button>
   </div>
   </div>
   <!--cards -->

   <div class="card">
   
    <div class="image">
       <img src="Images/sugarcook.jpg">
    </div>
    <div class="title">
     <h1>
    Sugar cookies</h1>
    <h3>1 box (250 gm) : 20 RM
   </h3>
    </div>
    <div class="des">
    <button class="btn">Add to cart</button>
    </div>
    </div>
   
   <!--cards -->


   <div class="card">
   
    <div class="image">
       <img src="Images/oatscook.jpg">
    </div>
    <div class="title">
     <h1>
      Oatmeal Raisin Cookies</h1>
      <h3>1 box (250 gm) : 50 RM
      </h3>
    </div>
    <div class="des">
    <button class="btn">Add to cart</button>
    </div>
    </div>
   
   
   <!--cards -->

   <div class="card">
   
    <div class="image">
       <img src="Images/shortcook.jpg">
    </div>
    <div class="title">
     <h1>
    Short bread cookies</h1>
    <h3>1 box (250 gm) : 50 RM
   </h3>
    </div>
    <div class="des">
    <button class="btn">Add to cart</button>
    </div>
    </div>
   
   
   <!--cards -->
   
   <div class="card">
   
   <div class="image">
      <img src="Images/gingercook.jpg">
   </div>
   <div class="title">
    <h1>
   Ginger bread cookies</h1>
   <h3>1 box (250 gm) : 40 RM
   </h3>
   </div>
   <div class="des">
   <button class="btn">Add to cart</button>
   
   </div>
   </div>
   <!--cards  -->
   
   <div class="card">
   
    <div class="image">
       <img src="Images/fortunecook.jpg">
    </div>
    <div class="title">
     <h1>
    Fortune cookies</h1>
    <h3>1 box (250 gm) : 30 RM
    </h3>
    </div>
    <div class="des">
    <button class="btn">Add to cart</button>
    </div>
    </div>
   </div>


<!------------------------------------------------------------------------------>

<div class="main">


   <div class ="contentservice"> 
      <h1>Our Brownies</h1>
   </div>

      


   <!--cards -->
   
   
   <div class="card">
   
   <div class="image">
      <img src="Images/bakebrown.jpg">
   </div>
   <div class="title">
    <h1>
   Bake shop brownie</h1>
   <h3>1 box (250 gm) : 70 RM
   </h3>
   </div>
   <div class="des">
   <button class="btn">Add to cart</button>
   </div>
   </div>
   <!--cards -->
   
   
   <div class="card">
   
   <div class="image">
      <img src="Images/fudgebrown.jpg">
   </div>
   <div class="title">
    <h1>
      Fudge Walnut Brownies</h1>
   <h3>1 box (250 gm) : 100 RM
   </h3>
   </div>
   <div class="des">
   <button class="btn">Add to cart</button>
   </div>
   </div>
   <!--cards -->

   <div class="card">
   
    <div class="image">
       <img src="Images/fudgeicebrown.jpg">
    </div>
    <div class="title">
     <h1>
      Fudge Iced Brownies</h1>
    <h3>1 box (250 gm) : 80 RM
   </h3>
    </div>
    <div class="des">
    <button class="btn">Add to cart</button>
    </div>
    </div>
   
   <!--cards -->


   <div class="card">
   
    <div class="image">
       <img src="Images/blodiesbrown.jpg">
    </div>
    <div class="title">
     <h1>
      Blondies</h1>
      <h3>1 box (250 gm) : 100 RM
      </h3>
    </div>
    <div class="des">
    <button class="btn">Add to cart</button>
    </div>
    </div>
   
   
   <!--cards -->

   <div class="card">
   
    <div class="image">
       <img src="Images/peanutbrown.jpg">
    </div>
    <div class="title">
     <h1>
      Peanut Butter Brownies</h1>
    <h3>1 box (250 gm) : 90 RM
   </h3>
    </div>
    <div class="des">
    <button class="btn">Add to cart</button>
    </div>
    </div>
   
   
   <!--cards -->
   
   <div class="card">
   
   <div class="image">
      <img src="Images/neutellabrown.jpg">
   </div>
   <div class="title">
    <h1>
      Nutella Brownies</h1>
   <h3>1 box (250 gm) : 120 RM
   </h3>
   </div>
   <div class="des">
   <button class="btn">Add to cart</button>
   
   </div>
   </div>
   <!--cards -->
   
   <div class="card">
   
    <div class="image">
       <img src="Images/mintbrown.jpg">
    </div>
    <div class="title">
     <h1>
      Mint Chocolate Brownies</h1>
    <h3>1 box (250 gm) : 80 RM
    </h3>
    </div>
    <div class="des">
    <button class="btn">Add to cart</button>
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


<script>

   // array for  getting the products 

   let products = [

      {
         name: 'Biscotti cookies',
         tag: 'biscotticook',
         price: '30',
         inCart: 0

      },

      {
         name: 'Sugar cookies',
         tag: 'sugarcook',
         price: '20',
         inCart: 0

      },

      {
         name: 'Oatmeal Raisin Cookies',
         tag: 'oatscook',
         price: '50',
         inCart: 0

      },

      {
         name: 'Short bread Cookies',
         tag: 'shortcook',
         price: '50',
         inCart: 0

      },

      {
         name: 'Ginger bread Cookies',
         tag: 'gingercook',
         price: '40',
         inCart: 0

      },

      {
         name: 'Fortune Cookies',
         tag: 'fortunecook',
         price: '30',
         inCart: 0

      },

      {
         name: 'Bake shop brownie',
         tag: 'bakebrown',
         price: '70',
         inCart: 0

      },

      {
         name: 'Fudge walnut brownie',
         tag: 'fudgebrown',
         price: '100',
         inCart: 0

      },

      {
         name: 'Fudge iced brownies',
         tag: 'fudgeicebrown',
         price: '80',
         inCart: 0

      },

      {
         name: 'Blondies',
         tag: 'blodiesbrown',
         price: '100',
         inCart: 0

      },

      {
         name: 'Peanut butter Brownies',
         tag: 'peanutbrown',
         price: '90',
         inCart: 0

      },

      {
         name: 'Netella Brownies',
         tag: 'neutellabrown',
         price: '120',
         inCart: 0

      },

      {
         name: 'Mint Chocolate Brownies',
         tag: 'mintbrown',
         price: '80',
         inCart: 0

      }

   ]

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