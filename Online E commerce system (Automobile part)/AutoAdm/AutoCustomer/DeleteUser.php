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



    $idd = $_SESSION['Username'];

    // deletes the order frokm placed order 
    $sql = "DELETE FROM customers WHERE Username ='$idd' ";

                 if ($con->query($sql) === TRUE) {
                     session_destroy();
                    header('location: home.php');
                  } else {

                      echo "Error: " . $sql . "<br>" . $con->error;
                                }



?>