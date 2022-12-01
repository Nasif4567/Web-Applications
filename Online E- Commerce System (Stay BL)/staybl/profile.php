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
                        <li><a href="profile.php">My profile</a></li>
                        <li><a href="item.php">Place order here</a></li>
                        <li><a href="MyOrder.php">My orders</a></li>
                        <li><a href="Logout.php">Logout </a></li>
                    </ul>
                </div>
            </div>
        </div>

<!------------------------------------------------------------------------------------------------->
<div class="profileContainer">
            <h1 class='conthead'>Your details</h1>
            <?php
            session_start();
            if(!$_SESSION['email'])
            {
                    header("location: CreateDatabase.php");
            }
            
            else {
                echo "<h2 class='text-success'>Name : ".$_SESSION['name']."</h2>";
                echo "<h2 class='text-success'>Email : ".$_SESSION['email']."</h2>";    
            }
            ?>
 
        </div>



 <!------------------------------------------------------------------------------------>

 <section class="footer">
            <p>Talk To Us: +60 11-5840 3488 | Email Us: stayblizzz@gmail.com</p>
            <p>Copyright 2021 stayblizz.com.all.rights.reserved</p>
        </section>
    </body>