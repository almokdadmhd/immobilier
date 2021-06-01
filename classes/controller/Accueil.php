<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1  shrink-to-fit=no" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/styles.css" />
    <title> immobilier</title>
</head>


<body>
    <?php
    require_once '../view/ViewUser.php';
    require_once '../view/ViewTemplate.php';
    require_once '../model/ModelUser.php';

    viewTemplate::menu();
    var_dump($_SESSION);
    ?>
    <p class="h1"> Bienvenue Chez ImmoZack </p>


   <?php

     

    viewTemplate::footer();


    ?>
    
</body>

</html>