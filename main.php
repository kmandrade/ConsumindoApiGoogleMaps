<?php
session_start();

if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: entrar.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../projeto_covid/login-cadastrar.css">
    <title>Menu Principal</title>
    
</head>
<body>

   <header>
        <div class="center">
        <div class="logo"><a href="../projeto_covid/home.php"><img class="img" src="../projeto_covid/image/mais.png" alt=""></div></a>   
        <div><p class="home">Home</p> </div>
        <div class="login">
               
                <h1 style="color: rgb(0, 134, 223); font-size: 50px ">MENU PRINCIPAL</h1>
            </div><!--login-->
        </div><!--CENTER-->
   </header> 
   
   <section>
        <div class="center">
        <a href="../projeto_covid/cadastrar.php"><button>Cadastrar Hospitais</button></a><br>
        <a href="../projeto_covid/alterar_hosp.php"><button>Atualizar Hospitais</button></a><br>
        <a href="../projeto_covid/delmapa.php"><button style="color:red">Deletar Hospitais</button></a><br>

                    
           
               
            </div><!--token-->
        </div><!--center-->
    
    
   </section>
        

</body>
</html>