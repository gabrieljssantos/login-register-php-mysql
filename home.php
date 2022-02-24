<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'views/home-page.php';
    }else{
        header ('location: login.php');
    }
        
?>