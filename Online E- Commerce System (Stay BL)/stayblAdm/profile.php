<!----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Profile</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="profilehh.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
       <h1 style="color:white; size:20px">StayBlizz Admin<h1> 
        <nav>
        <ul  class="nav_links">
                <li> <a href="Profile.php" style = "color:  #0088a9">Profile settings</a> </li>
                <li> <a href="ViewCustomer.php">View Users</a> </li>
                <li> <a href="AdminOrder.php" >Check Placed orders</a> </li>
                <li> <a href="ContactUSAdmin.php">Check messages</a> </li>
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
                echo "<h2 class='text-success'>Username : ".$_SESSION['Username']."</h2>";  
                
            } // end of else --------------------------
            ?>
 
        </div>



<!------------------------------------------------------------------------------------>




</body>
