<?php

include 'database.php';

if(isset($_POST['submit'])){
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    
    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email='$email' AND password='$pass' ") or die('query failed');
    
    if(mysqli_num_rows($select) > 0){
        $message[] = 'user already existed!';
    }else{
        mysqli_query($conn, "INSERT INTO `user_form`(name, email, password) VALUES('$name', '$email', '$pass')") or die ('query failed');
        $message[] = 'registered succesfully!';
        header('location:user_login.php');
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="style_user.css" type="text/css">
        <title>Register</title>
    </head>
    <body>
        
    <?php
    
    if(isset($message)){
        foreach ($message as $message){
            echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
        }
    }
    ?>
        <div class="form-container">
            <h3>Register Now</h3>
            <form action="" method="post">
                <input type="text" name="name" required placeholder="enter name" class="box">
                <input type="email" name="email" required placeholder="enter email" class="box">
                <input type="password" name="password" required placeholder="enter password" class="box">
                <input type="submit" name="submit" class="btn" value="register now">
                <p>already have an account? <a href="user_login.php">login now</a></p>
            </form>
        </div>
        
    </body>
</html>