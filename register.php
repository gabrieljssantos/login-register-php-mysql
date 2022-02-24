<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];
        
        $senha = hash('sha512', $senha);
        $senha2 = hash('sha512', $senha2);
        
        $error = '';
        
        if (empty($email) or empty($usuario) or empty($senha) or empty($senha2)){
            
            $error .= '<i>Por favor, preencha <b>todos</b> os campos</i>';
        }else{
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=feedback-project', 'root', '');
            }catch(PDOException $error_message){
                echo "Error: " . $error_message->getMessage();
            }
            
            $statement = $conexion->prepare('SELECT * FROM login WHERE usuario = :usuario LIMIT 1');
            $statement->execute(array(':usuario' => $usuario));
            $resultado = $statement->fetch();
            
                        
            if ($resultado != false){
                $error .= '<i>Este usuario <b>já</b> existe!</i>';
            }
            
            if ($senha != $senha2){
                $error .= '<i>As senhas <b>não</b> correspondem!</i>';
            }
            
            
        }
        
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO login (id, email, usuario, senha) VALUES (null, :email, :usuario, :senha)');
            $statement->execute(array(
                
                ':email' => $email,
                ':usuario' => $usuario,
                ':senha' => $senha
                
            ));
            
            $error .= '<i style="color: green;">Usuario registrado com <b>sucesso</b>!</i>';
        }
    }


    require 'views/register-page.php';

?>