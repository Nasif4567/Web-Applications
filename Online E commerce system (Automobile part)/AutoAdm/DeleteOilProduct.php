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
    $sql = "DELETE FROM oilproducts WHERE id ='$idd' ";

                 if ($con->query($sql) === TRUE) {
                    header('location: profile.php');
                  } else {

                      echo "Error: " . $sql . "<br>" . $con->error;
                                }


?>