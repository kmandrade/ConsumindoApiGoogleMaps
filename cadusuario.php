<?php
 session_start();
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../projeto_covid/login-cadastrar.css">
</head>
<body>


    <header>
        <div class="center">
        <div class="logo"><a href="../projeto_covid/home.php"><img class="img" src="../projeto_covid/image/mais.png" alt=""></div></a>
        <div><p class="home">Home</p> </div>
            <div class="titulo">
            <h1 >Cadastre-se:</h1>
            

            </div><!--login-->
        </div><!--center-->
    </header>
    
    <section class="center">
           
         <div class="token">
            <?php
                if(isset($_SESSION['msg'])){
                    echo($_SESSION['msg']);
                    unset ($_SESSION['msg']);
                }
            ?>
            <form method="POST" action="../projeto_covid/banco/cadastra-usuario.php">
                
                <label>Nome: </label>
                <input type="text" name="nome" placeholder="Informe o seu apelido"><br><br>
                <label>Senha: </label>
                <input type="password" name="senha" placeholder="Informe a sua Senha"><br><br>
                <label>Confirmar Senha: </label>
                <input type="password" name="confirma" placeholder="Confirme a sua Senha"><br><br>
                
                <input type="submit" value="Cadastrar"><br><br>


            
            </form>
        
        </div>
    
    
    </section><!--center-->


</body>
</html>