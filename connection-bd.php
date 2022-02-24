<?php
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=feedback-project', 'root', '');
    }catch(PDOException $error_message){
        echo "Error: " . $error_message->getMessage();
    }
?>