<!----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>View Products</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="ViewProducts.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <img  src="Images/logo.png">  
        <nav>
            <ul  class="nav_links">
                <li> <a href="Profile.php" style = "color:  #0088a9">Manage products</a> </li>
                <li> <a href="ViewCustomer.php">View Users</a> </li>
                <li> <a href="AdminOrder.php">Orders</a> </li>
                <li> <a href="ContactUSAdmin.php">Check messages</a> </li>
                <li><form action = "logout.php" method = "post"><button type="submit">Logout</button></form></a></li>
            </ul>
  
        </nav>
        
   </header>

<!------------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------->
<div class="OrderContainer">
            <h1 class='conthead'>Air Filter</h1>

            <table id="ordertable">
            <tr> 
               <th>Name</th>
               <th>Brand</th>
               <th>Size</th>
               <th>Price</th>
               <th>Delete products</th>
             </tr>

             

             <?php

session_start();
if(!$_SESSION['Username'])
{
        header("location: login.php");
}


else {

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "Frenzy";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 


    //---------------------------------------------------------------------------reading statements---------------------
    $sqlll= "select *from airproducts";  
    $result = mysqli_query($con, $sqlll);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if ($count > 0 ) {

        while($row = $result -> fetch_assoc()) {

            echo "<tr><td>" . $row['name'] . "</td> <td>"  . $row['brand'] .  "</td> <td>" . $row['size'] . "</td> <td>" . $row['price'] . "</td> <td> <form action ='DeleteAirProduct.php' method='post'> <input type='hidden' name='id' value=". $row['id']. "> <button name = 'deliveredbtn' type = 'submit' style = 'color:pink'>Delete product</button> </form> </td>   </tr>" ;
        }

    

    }

    else {
        echo "<tr><td>No products </td> <td>No products</td> <td>No products</td> <td>No products</td> <td>No products</td> " ;
    }





}// end of first else 


     ?>


</table>


<form action ='AddAir.php' method='post'><button style="padding: 9px 25px;
    margin-top:20px;
    background-color: green;
    border: none;
    border-radius: 50px;
    cursor: pointer;" name = 'viewbtn' type = 'submit'>Add New Air Filter</button></form>


</div>






<!------------------------------------------------------------------------------------------------------------------->


<!------------------------------------------------------------------------------------------------->
<div class="OrderContainer">
            <h1 class='conthead'>Oil Filters</h1>

            <table id="ordertable">
            <tr> 
               <th>Name</th>
               <th>Brand</th>
               <th>Size</th>
               <th>Price</th>
               <th>Delete products</th>
             </tr>

             

             <?php

if(!$_SESSION['Username'])
{
        header("location: login.php");
}


else {

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "Frenzy";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 


    //---------------------------------------------------------------------------reading statements---------------------
    $sqlll= "select *from oilproducts";  
    $result = mysqli_query($con, $sqlll);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if ($count > 0 ) {

        while($row = $result -> fetch_assoc()) {

            echo "<tr><td>" . $row['name'] . "</td> <td>"  . $row['brand'] .  "</td> <td>" . $row['size'] . "</td> <td>" . $row['price'] . "</td> <td> <form action ='DeleteOilProduct.php' method='post'> <input type='hidden' name='id' value=". $row['id']. "> <button name = 'DeleteOilProduct' type = 'submit' style = 'color:pink'>Delete product</button> </form> </td>   </tr>" ;
        }

    

    }

    else {
        echo "<tr><td>No products </td> <td>No products</td> <td>No products</td> <td>No products</td> <td>No products</td> " ;
    }





}// end of first else 


     ?>


</table>


<form action ='AddOil.php' method='post'><button style=" margin-top:20px;
    background-color: green;
    border: none;
    border-radius: 50px;
    cursor: pointer;" name = 'viewbtn' type = 'submit'>Add New Oil Filter</button></form>


</div>



<!------------------------------------------------------------------------------------------------------------------------->






</body>



<!------------------------------------------------------------------------------------>

<footer>

    <div class="footer-content">
        <h3>Autocom Limited</h3>

        <p>Filters the oil like gold and makes your air fresh</p>


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

        <p> </p>

        <div class="footer-menu">
            
           </div>
     </div>







</footer>
