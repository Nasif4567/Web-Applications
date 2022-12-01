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


    // Store varibales
    $namee = trim($_POST['productnamee']);
    $brandd = trim($_POST["productbranddd"]);
    $pricee = trim($_POST["productpriceee"]);
    $sizee = trim($_POST["productsizeee"]);
    $files = $_FILES['productfileee'];


    $filename = $files['name'];
    $filerror = $files['error'];
    $filetmp = $files['tmp_name'];

    $fileext = explode(".", $filename);
    $filecheck = strtolower(end($fileext));

  

    $onlyfilename = basename($filename,'.png' );

    $fileextstored = array("png","jpg","jpeg");

    if(in_array($filecheck,$fileextstored)) {
        $destinationfile = 'AutoCustomer/uploads/'.$filename;
        $destinationfiledir = 'uploads/'.$filename;

        move_uploaded_file($filetmp,$destinationfile);
    }




 
    
        // Prepare a select statement
        $sql= "select *from oilproducts where name = '$namee' ";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
            
            if($count == 1){  
                $_SESSION['proexists1'] = "Product Already exists";
                header('location: AddOil.php');
            } 
            
            else{   
                   



                 $sql = "INSERT INTO oilproducts(name, size,price,image,brand,filename) VALUES ('$namee','$sizee','$pricee','$destinationfiledir','$brandd','$onlyfilename')";

                 if ($con->query($sql) === TRUE) {
                    $_SESSION['datains1'] = "Product added";
                   header('location: AddOil.php');
                  } else {

                      echo "Error: " . $sql . "<br>" . $con->error;
                                }


             //----------------------------------------------end of else -----------------------------------------------
                }



            // Close connection
            mysqli_close($con);






    
    

    
    
        
        

?>