<!DOCTYPE html>
<html>
<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');



input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 20px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 20px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}




*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;

}

body{

	background-color: #24252A;
	height: 100vh;
	display: flex;
    flex-direction: column;
}


li, a , button {
    font-family: "Montserrat", sans-serif;
    font-weight:500;
    font-size:16px;
    color: #edf0f1;
    text-decoration: none;

}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 10px;
    border-style:solid;
    box-shadow: 2px 2px 20px black;
    border-left: 0px;
    border-top-width:0px;
    border-bottom-width:1px;
    
}

.nav_links {
    list-style: none;
}

.nav_links li {
    display: inline-flex;
    padding: 0px 28px;
}


.nav_links li a {
    transition: all 0.3s ease 0s;
}

.nav_links li a:hover  {
    color: #0088a9 ;
}

button {
    padding: 9px 25px;
    background-color: rgba(0, 136,169,1);
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}

button:hover{
    background-color: transparent; 
}


.submenuabt{
    display: none;
    background: transparent;
    z-index: 1000;
    position:relative
   }
   
   .submenuabt ul li a {
       background: rgb(150, 143, 143);
      }
   
   
   .nav_links li:hover .submenuabt { 
       display: block;
       position: absolute;
       background: rgb(150, 143, 143);
       margin-top: 20px;
       margin-left: -15px;
   }
   
   .nav_links li:hover .submenuabt ul li {
       display:block;
       background: rgb(150, 143, 143);
       padding-top: 20px;
       padding-bottom: 20px;
   }




</style>
<body>



<header>
        <img  src="Images/logo.png">  
        <nav>
            <ul  class="nav_links">
                <li> <a href="Profile.php">Manage products</a> </li>
                <li> <a href="ViewCustomer.php">View Users</a> </li>
                <li> <a href="AdminOrder.php" style = "color:  #0088a9">Orders</a> </li>
                <li> <a href="ContactUSAdmin.php">Check messages</a> </li>
                <li><form action = "logout.php" method = "post"><button type="submit">Logout</button></form></a></li>
            </ul>
  
        </nav>
        
   </header>





   <!------------------------------------------------------------------------------------->


<h3>Add new Oil filter</h3>

<div>
  <form action="InsertOilProcess.php" method="POST" enctype="multipart/form-data">
    <label for="fname">Product Name</label>
    <input type="text" id="name" name="productnamee" placeholder="Product name" required>

    <label for="lname">Brand</label>
    <input type="text" id="brand" name="productbranddd" placeholder="product brand" required>

    <label for="lname">Product size</label>
    <input type="text" id="size" name="productsizeee" placeholder="product brand"  required>

    <label for="lname">Product price</label>
    <input type="number" id="brand" name="productpriceee" placeholder="product price" data-type="number" required>

    <label for="lname">Choose product image</label>
    <input type="File" id="file" name="productfileee" required>

  
    <input type="submit" value="Add the Oil filter">
  </form>
</div>



<?php
  session_start();
  if (isset($_SESSION['datains1'])) {
  echo '<script type="text/javascript">';
            echo ' alert("Product Added")';  //not showing an alert box.
            echo '</script>';
  unset($_SESSION['datains']); }
  

if (isset($_SESSION['proexists1'])) {
echo '<script type="text/javascript">';
echo ' alert("Product exists")';  //not showing an alert box.
echo '</script>';
  
  unset($_SESSION['proexists']);
}


  ?>





</body>
</html>