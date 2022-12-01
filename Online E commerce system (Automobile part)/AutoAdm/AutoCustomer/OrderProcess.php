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
    $usn = $_SESSION['Username'] ;
    $addr =  $_SESSION['Address'];

    //---------------------------------------------------------------------------reading statements---------------------
    $sqlll= "select *from placedorder where Username = '$usn'";  
    $result = mysqli_query($con, $sqlll);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 
    
    //------------------------------------------------------------------------------------------------------------


            $data = json_decode($_POST['items'],true);

            foreach($data as $itm)    {      // start of loop


             $namee = $itm['name'];
             $pricee = $itm['price'];
             $quantityy =  $itm['inCart'];
             

             $sql = "INSERT INTO orders (Name, Quantity, Price,Username) VALUES ('$namee','$quantityy' , '$pricee' ,'$usn')";

             if ($con->query($sql) === TRUE) {
                print_r('order placed');
              } else {

                  echo "Error: " . $sql . "<br>" . $con->error;
                            } 



     // end of loop                       
    }



    // inseeting data into order---------------------------------------------------------------------------- 
          
        if($count == 1){
            
        } 
        
        else{ 

            // totalcost 

    $totalcost = $_POST['totalcost'];

    // delivery date 

    $datee = strtotime("+2 day");
    $datee = date("Y-m-d", $datee);

    print_r($datee);

    
    // inserting into placed order----------------------------------------------------------------------------------------

    $sqll = "INSERT INTO placedorder(Username,Total,Date,Status,Address) VALUES ('$usn','$totalcost','$datee','Pending' ,'$addr')";

             if ($con->query($sqll) === TRUE) {
                echo '<script type="text/javascript">';
                echo ' alert("Inserted into placed order")';  
                echo '</script>';
              } else {

                  print_r( "Error: " . $sqll . "<br>" . $con->error);
                            } 


     
    // inserting into order history ----------------------------------------------------------------------------------------

    $sqllo = "INSERT INTO orderhistory(Username,Total,Date,Address) VALUES ('$usn','$totalcost','$datee','$addr')";

             if ($con->query($sqllo) === TRUE) {
              } else {
                  print_r( "Error: " . $sqllo . "<br>" . $con->error);
                            } 

 //----------------------------------------------------------------------------------------------------------            
            
        } // end of else 


        // Close connection
        mysqli_close($con);





        ?>     