<?php

include 'database.php';
session_start();

if(isset($_POST['submit'])){
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    
    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email='$email' AND password='$pass' ") or die('query failed');
    
    if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        header('location:profile.php');
    }else{
        $message[] = 'incorrect password or email!';
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="style_user.css" type="text/css">
        <title>Login</title>
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
            <h3>Login Now</h3>
            <form action="" method="post">
                <input type="email" name="email" required placeholder="enter email" class="box">
                <input type="password" name="password" required placeholder="enter password" class="box">
                <input type="submit" name="submit" class="btn" value="login now">
                <p>don't have an account? <a href="user_register.php">register now</a></p>
            </form>
        </div>
        
    </body>
</html>