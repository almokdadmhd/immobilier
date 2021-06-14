
    <?php
    require_once "../view/ViewAnnonce.php";
    require_once "../view/ViewTemplate.php";
    require_once "../model/ModelAnnonce.php";
    require_once "../utils/Utils.php";
    ViewTemplate::fichierCss();
    ViewTemplate::menu();

    if (isset($_GET['id'])) {
        if (ModelAnnonce::getAnnonce($_GET['id'])) {
            ModelAnnonce::SuppressioAnnonce($_GET['id']);
            ViewTemplate::alert("L'annonce a été supprimé avec succès.", "success", "ListeAnnonce.php");
        } else {
            ViewTemplate::alert("L'annonce n'existe pas.", "danger", "ListeAnnonce.php");
        }
    } else {
        ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeAnnonce.php");
    }

    ViewTemplate::footer();
    ViewTemplate::fichierJS();
    ?>
   