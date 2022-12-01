<?php  
   $host = "localhost";  
   $user = "root";  
   $password = '';  
   $db_name = "shop_db";  


   // this connection is for database creation ----------------------

   $connnn = mysqli_connect($host, $user, $password);  
   if(mysqli_connect_errno()) {  
       die("Failed to connect with MySQL: ". mysqli_connect_error());  
   }

   //-------------------------------------------------------------------------------









//fucntion for login


function login() {

    header('location: UserContact.php');


}





    //---------------------------------------------------------------------------------------


      // sql to create table
    function createtable() {
      include 'database.php';

      //--------------------------------------------------------  
      
      $query = "SELECT Name FROM admin";
      $result = mysqli_query($conn, $query);

if(empty($result)) {
  $sqla = "CREATE TABLE admin (
    Name VARCHAR(100) NOT NULL,
    Username VARCHAR(100) NOT NULL,
    Password VARCHAR(100)
    )";

if ($conn->query($sqla) === TRUE) {
  login();
} 
                
}

else {
  login();
}

//-----------------------------------------------------------------

$query1 = "SELECT Name FROM contact";
      $result1 = mysqli_query($conn, $query1);

if(empty($result1)) {
  $sqlc = "CREATE TABLE contact (
    Name VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Message VARCHAR(1000)
    )";

if ($conn->query($sqlc) === TRUE) {
  login();
} 

}

else {
  login();
}
      
      //-------------------------------------------------------------------------


      $query2 = "SELECT name FROM user_form";
      $result2 = mysqli_query($conn, $query2);

      if(empty($result2)) {
        $sqlcus = "CREATE TABLE user_form (
          name VARCHAR(100) NOT NULL,
          email VARCHAR(100) NOT NULL,
          password VARCHAR(100)
          )";

if ($conn->query($sqlcus) === TRUE) {
  login();
 }

}

else {
  login();
}



            
               


//------------------------------------------------------------------

$query3 = "SELECT Name FROM orders";
      $result3 = mysqli_query($conn, $query3);

      if(empty($result3)) {
        
  $sqlo = "CREATE TABLE orders (
    Name VARCHAR(100) NOT NULL,
    Quantity Int(100) NOT NULL,
    Price Int(100),
    Email VARCHAR(100)
    )";

if ($conn->query($sqlo) === TRUE) {
  login();
} 

}

else {
  login();
}
    
    



     //------------------------------------------------------------------
     $query4 = "SELECT Email FROM placedorder";
      $result4 = mysqli_query($conn, $query4);

      if(empty($result4)) {
        
 
        $sqlpo = "CREATE TABLE placedorder (
          Email VARCHAR(100) NOT NULL,
          Total VARCHAR(100) NOT NULL,
          Date VARCHAR(100),
          Status VARCHAR(100)
          )";


if ($conn->query($sqlpo) === TRUE) {
  login();
 }  

}

else {
  login();
}


     
    
    






//-------------------------------------------------------------------------------------
    }
    //--------------------------------------------------------------------------------------------------




    // create database ----------------------------------------------------


    // Create database
$sql = "CREATE DATABASE shop_db";
if ($connnn->query($sql) === TRUE) {
    createtable();
} 









        
?>