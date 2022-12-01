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
$db_name = "frenzy";  
      
$con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }

$emaill = $_SESSION['Email'];
$mg = $_POST['mesg'];
$namee = $_POST['name'];


if(isset($_POST['btncont']))
{


    $sql = "INSERT INTO contact(Name, Email, Message) VALUES ('$namee', '$emaill','$mg')";

    if ($con->query($sql) === TRUE) {
        echo '<script type="text/javascript">';
        echo ' alert("Message sent !")';  //not showing an alert box.
        echo '</script>';

       
     } else {

         echo "Error: " . $sql . "<br>" . $con->error;
                   }
    

}




            }// end of else --------------------------------------------




?>