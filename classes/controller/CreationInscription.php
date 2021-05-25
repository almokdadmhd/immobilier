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
    require_once "../view/ViewConnexion.php";
    require_once "../view/ViewTemplate.php";
    require_once "../model/MdelConnexion.php";
    ViewTemplate::menu();
    if (isset($_POST['ajout'])) {
        if (ModelConnexion::ajoutConnexion($_POST["mail"]) && ($_POST["pass"])) {
            ViewTemplate::alert("la connexion est exiseste ", "danger", "CreationConnexion.php");
        } else {
            viewTemplate::alert('la connexion a été bien fait ', 'success ', 'CreationInscription.php');
        }
    } else {
        ModelConnexion::ajoutConnexion();
    }
    if(isset($_POST['deconnexion'])){
        session_unset();
        session_destroy();
        header('location:Accueil.php');
    }
    if(isset($_SESSION['mail'])){
    ViewTemplate::footer();
    ?>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/ctrl.js"></script>
