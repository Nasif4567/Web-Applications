<?php

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "frenzy"; 

$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }

   
    session_start();
 
    $username = $_POST['usern'];  
    $password = $_POST['passwordn']; 
   
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql= "select *from customers where Username = '$username' and password = '$password' ";  
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

          
        if($count == 1){
            
            $_SESSION['Name']=$row['Name'];
            $_SESSION['Username']=$row['Username'];
            $_SESSION['Password']=$row['Password'];
            $_SESSION['Email']=$row['Email'];
            $_SESSION['Address']=$row['Address'];
            $_SESSION['Phone']=$row['Phone'];
            
            header('location: Services.php');
        }

        else{  
          echo '<script type="text/javascript">';
          echo ' alert("Invalid username or password")';  //not showing an alert box.
          echo '</script>';
        } 




     // Close connection
    mysqli_close($con);

    ?>






