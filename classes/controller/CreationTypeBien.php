<?php session_start() ?>

    <?php
    require_once "../model/ModelUser.php";
    require_once "../view/ViewUser.php";
    require_once "../view/ViewTypeBien.php";
    require_once "../view/ViewTemplate.php";
    require_once "../model/ModelTypeBien.php";
    require_once "../utils/Utils.php";


    viewTemplate::fichierCss();
    ViewTemplate::menu();
    if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
        viewTemplate::alert("Les données sont insérées avec succès", "success", "ListeTypeBien.php");

        if (isset($_POST["libelle"])) {
        } else {
            viewTypeBien::ajoutTypeBien();
        }
    } else {
        header("CreationConnexion.php");
    }
    ViewTemplate::footer();
    viewTemplate::fichierJS();
    ?>