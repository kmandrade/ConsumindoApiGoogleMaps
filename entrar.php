<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../projeto_covid/login-cadastrar.css">
    <title>Login</title>
    
</head>
<body>

   <header>
        <div class="center">
        <div class="logo"><a href="../projeto_covid/home.php"><img class="img" src="../projeto_covid/image/mais.png" alt=""></div></a>   
        <div><p class="home">Home</p> </div>
        <div class="login">
               
                <h1 style="color: rgb(0, 134, 223); font-size: 50px ">Login</h1>
            </div><!--login-->
        </div><!--CENTER-->
   </header> 
   
   <section>
        <div class="center">

                        
                    
                 <div class="token">
                         <?php
                            if(isset($_SESSION['loginError'])){
                                echo $_SESSION['loginError'];
                                unset($_SESSION['loginError']);
                            }


                        ?>
                            
                    <form method="POST" action="../projeto_covid/banco/valida.php"> <!--aqui foi usado action para ser enviado os dados recolhidos do formulario-->
                    <label>Nome:</label>
                    <input type="text" name="usuario" placeholder="digite seu nome"><br>
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="digite sua senha"><br>
                    <button type="submit" name="submit">Entrar</button>

                    </form>
               
            </div><!--token-->
        </div><!--center-->
    
    
   </section>
        

</body>
</html>