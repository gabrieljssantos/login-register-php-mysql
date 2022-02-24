<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    
    <link rel="stylesheet" href="icon/style.css">
    <link rel="stylesheet" href="css/global.css">
    
</head>
<body>
    
<div class="container-form">
        <div class="header">
            <div class="logo-title">
            <img src="./image/logoM.png" alt="">
                <h2></h2>
            </div>
            <div class="menu">
                <a href="login.php"><li class="module-login">Login</li></a>
                <a href="register.php"><li class="module-register active">Cadastro</li></a>
            </div>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h1>Cadastre-se</h1><h2></h2></div>
            
            <div class="user line-input">
                <label class="lnr lnr-envelope"></label>
                <input type="text" placeholder="Email" name="email">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Senha" name="senha">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Confirmar senha" name="senha2">
            </div>           
            <div class="sectors line-input">
                <label for="sectors" class="sectorsClass">Setor</label>
                <select id="sectors" name="sectors">
                    <option value="ti">TI</option>
                    <option value="financeiro">Financeiro</option>
                    <option value="infraestrutura">Infraestrutura</option>
                    <option value="limpeza">Limpeza</option>
                </select>
            </div>
            
            
            
            <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button type="submit">Cadastrar-se<label class="lnr lnr-chevron-right"></label></button>
               
    </form>
    </div>

    
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>