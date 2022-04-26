<?php
session_start();
include_once("../projeto_covid/banco/conexao.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="../projeto_covid/menu-principal.css">

</head>
<body>
    <header>
        <div class="center">
            <div class="logo"><img class="img" src="../projeto_covid/image/mais.png" alt=""></div>
            <div class="menu">
                <a href="../projeto_covid/entrar.php">Entrar</a>
                <a href="../projeto_covid/cadusuario.php">Cadastrar Usuario</a>
                <a href="../projeto_covid/api/maps.php">Hospitais</a>
            </div><!--menu-->
        </div> <!--center-->

        
    </header>

    
    <div class="socialmidia">
        <a href="https://www.instagram.com/sus.brasil/"><img class="img" src="../projeto_covid/image/instagram.png" alt=""></a><br>
        <a href="https://www.facebook.com/PortalSus/"><img class="img" src="../projeto_covid/image/facebook.png" alt=""></a>
    </div>
    
    <section class="sobre">
        <div class="extras">
            <img class="logosus" src="../projeto_covid/image/logosus.png" alt="">
                
        </div><!--extras-->
        
        <div class="center">
            <div class="texto-sobre">
                <h1>Você irá conhecer todos os hospitais de urgência,  <br> Com sintomas de <span style="color: rgb(93, 114, 233);">COVID</span> da nossa grande Aracaju!</h1>
                <br>
                <p>Cadastre Unidade de Emergência</p>
                <a href="../projeto_covid/entrar.php"><button>Cadastrar</button></a>
                

            </div><!--texto-->
           
        </div><!--center-->
        
    </section>
    

</body>
</html>