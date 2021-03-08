<?php
session_start();
if(!isset($_SESSION['username'])){
    header("refresh:2 login.php");
    exit();
}
?>