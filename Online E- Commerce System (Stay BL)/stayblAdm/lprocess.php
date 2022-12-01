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

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "shop_db"; 

    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }

   
    session_start();
 
    $username = $_POST['ausn'];  
    $password = $_POST['apass']; 
   
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql= "select *from admin where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

          
        if($count == 1){
            
            $_SESSION['Name']=$row['Name'];
            $_SESSION['Username']=$row['Username'];
            
            header('location: profile.php');
        }  
        else{  
            echo '<script type="text/javascript">';
            echo ' alert("Invalid username or password")';  //not showing an alert box.
            echo '</script>';
        } 



}









// fucntion of inserting data

function insertdatawithlogin() {
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "shop_db";  


    // this connection is for database creation ----------------------

    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }


    
    // Prepare a select statement
$sql= "select *from admin";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
    
    if($count == 1){ 
        // just login fucntion 
        login();
    } 
    
    else{   

         $sql = "INSERT INTO Admin (Name,Username,Password) VALUES ('Jessy', 'Admin','1234567')";

         if ($con->query($sql) === TRUE) {
            // then call the login fuction
            login();
           
          } else {

              echo "Error: " . $sql . "<br>" . $con->error;
                        }


     //----------------------------------------------end of else -----------------------------------------------
        }
//-----------------------------------------------------------------------------------------------------------
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
    insertdatawithlogin();
    
  }
  
  












    









        
?>