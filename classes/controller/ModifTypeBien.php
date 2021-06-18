<?php
    require_once "../view/ViewTypeBien.php";
    require_once "../view/ViewTemplate.php";
    require_once "../model/ModelTypeBien.php";


    ViewTemplate::fichierCss();
    ViewTemplate::menu();

    if (isset($_GET['id'])) {
        
        if (ModelTypeBien::getTypebien ($_GET['id'])) {
            ViewTypeBien::modifTypeBien ($_GET['id']);
        } else {
            ViewTemplate::alert("La type bien n'existe pas.", "danger", "ListeTypeBien.php");
        }
    } else {
        if (isset($_POST['modif'])) {
            if (isset($_POST['id']) && ModelTypeBien::getTypebien($_POST['id'])) {
                ModelTypeBien::modifTypeBien($_POST['id'], $_POST['libelle']);
                ViewTemplate::alert("Modif faite avec succès.", "success", "ListeTypeBien.php");
            } else {
                ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeTypeBien.php");
            }
        } else
            ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeTypeBien.php");
    }

    ViewTemplate::footer();
    ViewTemplate::fichierJS()
    ?>

