<?php
session_start();

if (isset($_SESSION['username'])) {
    echo"bem vindo, ".$_SESSION['username']. "!";
}
else{
    header('location: login.php');
}

?>
