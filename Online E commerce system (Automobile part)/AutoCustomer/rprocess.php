<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "Frenzy";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  






    // Store varibales
    $phonee = trim($_POST['rphone']);
    $emaill = trim($_POST["remail"]);
    $namee = trim($_POST["rname"]);
    $addresss = trim($_POST["raddr"]);
    $passwordd = trim($_POST["rpass"]);
    $usn = trim($_POST["run"]);

    $usn = stripcslashes($usn);  
    $phonee = stripcslashes( $phonee);
    $emaill = stripcslashes( $emaill);  
    $usn = mysqli_real_escape_string($con, $usn);  
    $phonee = mysqli_real_escape_string($con,  $phonee); 
    $emaill = mysqli_real_escape_string($con,  $emaill); 


 
    
        // Prepare a select statement
        $sql= "select *from customers where Username = '$usn' ";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
            
            if($count == 1){  
                echo '<script type="text/javascript">';
                echo ' alert("User already exists, Please use different Username !")';  //not showing an alert box.
                echo '</script>';
            } 
            
            else{   
                   



                 $sql = "INSERT INTO customers (Name, Email, Phone,Address,Username,Password) VALUES ('$namee', '$emaill','$phonee','$addresss','$usn','$passwordd')";

                 if ($con->query($sql) === TRUE) {
                    echo '<script type="text/javascript">';
                    echo ' alert("Successfully registered")';  //not showing an alert box.
                    echo '</script>';
                    header('location: login.php');
                  } else {

                      echo "Error: " . $sql . "<br>" . $con->error;
                                }


             //----------------------------------------------end of else -----------------------------------------------
                }



            // Close connection
            mysqli_close($con);






    
    

    
    
        
        

?>