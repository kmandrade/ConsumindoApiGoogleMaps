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
    <title>Atualizar</title>
    <link rel="stylesheet" href="../projeto_covid/login-cadastrar.css">
</head>
<body>


    <header>
        <div class="center">
        <div class="logo"><a href="../projeto_covid/home.php"><img class="img" src="../projeto_covid/image/mais.png" alt=""></div></a>
        <div><p class="home">Home</p> </div>
            <div class="titulo">
            <h1 >Alterar dados do Hospital:</h1>
            

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
            <form method="POST" action="../projeto_covid/banco/alterahosp.php">
                
                <label>Nome do Hospital que Deseja alterar: </label>
                <input type="text" name="unidade"><br><br>
                <label>Novo nome do hospital: </label>
                <input type="text" name="nome" placeholder="Nome da Unidade"><br><br>
                <label>Endereço: </label>
                <input type="text" name="address" placeholder="Endereço da Unidade"><br><br>
                <label>Latitude: </label>
                <input type="text" name="lat" placeholder="Latidude da Unidade"><br><br>
                <label>Longitude: </label>
                <input type="text" name="lng" placeholder="Longitude da Unidade"><br><br>
                <label>Tipo da Unidade </label>
                <input type="text" name="tipo" placeholder="Tipo da Unidade"><br><br>

                <input type="submit" value="Atualizar"><br><br>


            
            </form>
        
        </div>
    
    
    </section><!--center-->


</body>
</html>