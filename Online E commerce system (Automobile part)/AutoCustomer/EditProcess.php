
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
$nameee = $_POST["enn"];
$addressss = $_POST["eaddress"];
$passworddd = $_POST["epasss"];

$usnn = $_SESSION['Username'] ;

$emailll = $_POST["eemail"];
$phoneee = $_POST["ephone"];

  



$sql = "UPDATE customers SET Name='$nameee' ,  Email='$emailll' ,  Phone='$phoneee' ,  Address='$addressss' , Username='$usnn' , Password='$passworddd'  WHERE Username='$usnn' ";

if ($con->query($sql) === TRUE) {
   session_destroy();
   header('location: login.php');
 } else {

     echo "Error: " . $sql . "<br>" . $con->error;
               }






 ?>