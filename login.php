<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $senha = hash('sha512', $senha);
        
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=feedback-project', 'root', '');
            }catch(PDOException $error_message){
                echo "Error: " . $error_message->getMessage();
            }
        
        $statement = $conexion->prepare('
        SELECT * FROM login WHERE usuario = :usuario AND senha = :senha'
        );
        
        $statement->execute(array(
            ':usuario' => $usuario,
            ':senha' => $senha
        ));
            
        $resultado = $statement->fetch();
        
        if ($resultado !== false){
            $_SESSION['usuario'] = $usuario;
            header('location: home.php');
        }else{
            $error .= '<i>Este Usuario NÃO existe!</i>';
        }
    }   
require 'views/login-page.php';

?>