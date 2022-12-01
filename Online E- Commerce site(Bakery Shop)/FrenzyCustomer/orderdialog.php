<?php
 session_start();
$_SESSION['order'] = 'order placed';
header('location: Services.php');
?>