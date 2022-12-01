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

    header('location: user_login.php');


}





    //---------------------------------------------------------------------------------------


      // sql to create table
    function createtable() {
      include 'database.php';

  

  $sqla = "CREATE TABLE IF NOT EXISTS `admin` (
    Name VARCHAR(100) NOT NULL,
    Username VARCHAR(100) NOT NULL,
    Password VARCHAR(100)
    )";

if ($conn->query($sqla) === TRUE) {
  
} 


 





//-----------------------------------------------------------------
  $sqlc = "CREATE TABLE IF NOT EXISTS `contact` (
    Name VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Message VARCHAR(1000)
    )";

if ($conn->query($sqlc) === TRUE) {
    
} 


 





      
      //-------------------------------------------------------------------------
      
        $sqlcus = "CREATE TABLE IF NOT EXISTS `user_form` (
          name VARCHAR(100) NOT NULL,
          email VARCHAR(100) NOT NULL,
          password VARCHAR(100)
          )";

if ($conn->query($sqlcus) === TRUE) {
  
 }
      
      
      




     





            
               


//------------------------------------------------------------------


        $sqlo = "CREATE TABLE IF NOT EXISTS `orders`  (
          Name VARCHAR(100) NOT NULL,
          Quantity Int(100) NOT NULL,
          Price Int(100),
          Email VARCHAR(100)
          )";
      
      if ($conn->query($sqlo) === TRUE) {
        
      }   
      
      



    
    



     //------------------------------------------------------------------

     
        $sqlpo = "CREATE TABLE IF NOT EXISTS `placedorder` (
          Email VARCHAR(100) NOT NULL,
          Total VARCHAR(100) NOT NULL,
          Date VARCHAR(100),
          Status VARCHAR(100)
          )";


        if ($conn->query($sqlpo) === TRUE) {
      
             }   
      
      


    

          


     
    
    






//-------------------------------------------------------------------------------------
    }
    //--------------------------------------------------------------------------------------------------




    // create database ----------------------------------------------------


    // Create database
$sql = "CREATE DATABASE IF NOT EXISTS shop_db;";
if ($connnn->query($sql) === TRUE) {
  createtable();
  login();
  
}

login();











        
?>