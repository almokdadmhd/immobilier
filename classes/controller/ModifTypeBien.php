<?php
require_once "../view/ViewTypeBien.php";
require_once "../view/ViewTemplate.php";
require_once "../model/ModelTypeBien.php";


ViewTemplate::fichierCss();
ViewTemplate::menu();

if (isset($_GET['modif'])) {
    if (isset($_GET['libelle'])) {

        modelTypeBien::modifTypeBien($_POST["modif"], $_POST["libelle"]);
        ViewTemplate::alert("La type bien n'existe pas.", "danger", "ListeTypeBien.php");
    } else {
        ViewTemplate::alert("La type bien n'existe pas.", "danger", "ListeTypeBien.php");
    }
} else {

    ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeTypeBien.php");
}

ViewTemplate::footer();
ViewTemplate::fichierJS();
