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
    if (isset($_POST["ajout"])) {

        if ($_POST["libelle"]) {
            ModelTypeBien::ajoutTypeBien($_POST["libelle"]);
            viewTemplate::alert("Les données sont insérées avec succès", "success", "ListeTypeBien.php");
        } else {
            viewTemplate::alert("Les données ne sont pas insérées ", "danger", "CreationConnexion.php");
        }
    } else {
        viewTypeBien::ajoutTypeBien();
    }

    ViewTemplate::footer();
    viewTemplate::fichierJS();



    ?>