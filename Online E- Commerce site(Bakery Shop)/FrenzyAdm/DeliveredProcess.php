<?php

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "frenzy";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 



    $idd = $_POST['id'];

    // deletes the order frokm placed order 
    $sql = "DELETE FROM placedorder WHERE Username ='$idd' ";

                 if ($con->query($sql) === TRUE) {
                    header('location: AdminOrder.php');
                  } else {

                      echo "Error: " . $sql . "<br>" . $con->error;
                                }


    // deletes the order from items 
    
    $sqll = "DELETE FROM orders WHERE Username ='$idd' ";

                 if ($con->query($sqll) === TRUE) {
                    header('location: AdminOrder.php');
                  } else {

                      echo "Error: " . $sqll . "<br>" . $con->error;
                                }


?>