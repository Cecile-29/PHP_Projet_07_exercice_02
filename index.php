<?php 
    session_start();
    $_SESSION['prenom'] = 'Ami';
    $_SESSION['nom'] = 'Kaouet';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet07 Exercice02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid cp-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet07 Exercice02</h1>
            <h2 class="col-12 text-info text-center">Créez deux variables de session (nom, prénom). Affichez les sur la même page.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php
            echo 'Les variables de session  prénom et nom sont L\' '. $_SESSION['prenom']. '  '. $_SESSION['nom'];
            ?> 
        </div>
        
    </div>
</body>
</html>