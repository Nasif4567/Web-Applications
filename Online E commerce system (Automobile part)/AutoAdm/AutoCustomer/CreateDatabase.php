<?php  
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "frenzy";  


    // this connection is for database creation ----------------------

    $conn = mysqli_connect($host, $user, $password);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }

    //-------------------------------------------------------------------------------





//fucntion for login


function login() {

    header('location: login.php');


}









// fucntion of inserting data

function insertdatawithlogin() {
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "frenzy";  


    // this connection is for database creation ----------------------

    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }


    
    // Prepare a select statement
$sql= "select *from admiinn";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
    
    if($count == 1){ 
        // just login fucntion 
        login();
    } 
    
    else{   

         $sql = "INSERT INTO Admiinn (Name,Username,Password) VALUES ('Autocom', 'Admin','1234567')";

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

        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "frenzy";  
    
    
        // this connection is for database creation ----------------------

        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }

 //--------------------------------------------------------   
     $sqla = "CREATE TABLE admiinn (
        Name VARCHAR(100) NOT NULL,
        Username VARCHAR(100) NOT NULL,
        Password VARCHAR(100)
        )";
        
        if ($con->query($sqla) === TRUE) {
          insertdatawithlogin();
        } else {
          insertdatawithlogin();
        }


 //--------------------------------------------------------   
 $sqlar = "CREATE TABLE airproducts (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  size VARCHAR(100) NOT NULL,
  price VARCHAR(100),
  image VARCHAR(100),
  brand VARCHAR(100),
  filename VARCHAR(100)
  )AUTO_INCREMENT=10000";
  
  if ($con->query($sqlar) === TRUE) {
    insertdatawithlogin();
  } else {
    insertdatawithlogin();
  }

//-----------------------------------------------------------------
 $sqlol = "CREATE TABLE oilproducts (
 id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100) NOT NULL,
  size VARCHAR(100) NOT NULL,
  price VARCHAR(100),
  image VARCHAR(100),
  brand VARCHAR(100),
  filename VARCHAR(100)
  )AUTO_INCREMENT=10000";
  
  if ($con->query($sqlol) === TRUE) {
    insertdatawithlogin();
  } else {
    insertdatawithlogin();
  }


//-----------------------------------------------------------------
$sqloh = "CREATE TABLE orderhistory (
    Username VARCHAR(100) NOT NULL,
    Total VARCHAR(100) NOT NULL,
    Date VARCHAR(100),
    Address VARCHAR(100)
    )";
    
    if ($con->query($sqloh) === TRUE) {
      insertdatawithlogin();
    } else {
      insertdatawithlogin();
    }    

//-----------------------------------------------------------------
        $sqlc = "CREATE TABLE contact (
            Name VARCHAR(100) NOT NULL,
            Email VARCHAR(100) NOT NULL,
            Message VARCHAR(100)
            )";
            
            if ($con->query($sqlc) === TRUE) {
              insertdatawithlogin();
            } else {
              insertdatawithlogin();
            }

//------------------------------------------------------------------
            $sqlcus = "CREATE TABLE customers (
                Name VARCHAR(100) NOT NULL,
                Email VARCHAR(100) NOT NULL,
                Phone VARCHAR(100),
                Address VARCHAR(100),
                Username VARCHAR(100),
                password VARCHAR(100)
                )";
                
                if ($con->query($sqlcus) === TRUE) {
                  insertdatawithlogin();
                } else {
                  insertdatawithlogin();
                }


  //------------------------------------------------------------------
  $sqlo = "CREATE TABLE orders (
    Name VARCHAR(100) NOT NULL,
    Quantity VARCHAR(100) NOT NULL,
    Price VARCHAR(100),
    Username VARCHAR(100)
    )";
    
    if ($con->query($sqlo) === TRUE) {
      insertdatawithlogin();
    } else {
      insertdatawithlogin();
    } 
    
    



     //------------------------------------------------------------------
  $sqlpo = "CREATE TABLE placedorder (
    Username VARCHAR(100) NOT NULL,
    Total VARCHAR(100) NOT NULL,
    Date VARCHAR(100),
    Status VARCHAR(100),
    Address VARCHAR(100)
    )";
    
    if ($con->query($sqlpo) === TRUE) {
      insertdatawithlogin();
    } else {
      insertdatawithlogin();
    }    
    
    






//-------------------------------------------------------------------------------------
    }
    //--------------------------------------------------------------------------------------------------




    // create database ----------------------------------------------------


    // Create database
$sql = "CREATE DATABASE frenzy";
if ($conn->query($sql) === TRUE) {
    createtable();
} else {
    createtable();
}









        
?>