<?php

include 'database.php';


    session_start();   
    $usn = $_SESSION['email'] ;

    //---------------------------------------------------------------------------reading statements---------------------
    $sqlll= "select *from placedorder where Email = '$usn'";  
    $result = mysqli_query($conn, $sqlll);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 
    
    //------------------------------------------------------------------------------------------------------------


            $data = json_decode($_POST['items'],true);

            foreach($data as $itm)    {      // start of loop


             $namee = $itm['name'];
             $pricee = $itm['price'];
             $quantityy =  $itm['inCart'];
             

             $sql = "INSERT INTO orders(Name, Quantity, Price,Email) VALUES ('$namee','$quantityy' , '$pricee' ,'$usn')";

             if ($conn->query($sql) === TRUE) {
                print_r('order placed');
              } else {

                  echo "Error: " . $sql . "<br>" . $conn->error;
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

    $sqll = "INSERT INTO placedorder(Email,Total,Date,Status) VALUES ('$usn','$totalcost','$datee','Pending' )";

             if ($conn->query($sqll) === TRUE) {
                echo '<script type="text/javascript">';
                echo ' alert("Inserted into placed order")';  
                echo '</script>';
              } else {

                  print_r( "Error: " . $sqll . "<br>" . $conn->error);
                            } 

 //----------------------------------------------------------------------------------------------------------            
            
        } // end of else 


        // Close connection
        mysqli_close($conn);





?>     