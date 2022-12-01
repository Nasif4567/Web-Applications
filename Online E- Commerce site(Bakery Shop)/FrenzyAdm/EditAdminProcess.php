
<?php

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "Frenzy";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

session_start();


// stores the variables
$nameee = $_POST["ename"];
$usnn =  $_SESSION['Username'];
$passworddd = $_POST["epass"];

  



$sql = "UPDATE admiinn SET Name='$nameee' , Username='$usnn' , Password='$passworddd'  WHERE Username='$usnn' ";

if ($con->query($sql) === TRUE) {
    session_destroy();
    header('location: login.php');
 } else {

     echo "Error: " . $sql . "<br>" . $con->error;
               }






 ?>