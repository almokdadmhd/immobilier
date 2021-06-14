
    <?php


    require_once "../view/ViewAnnonce.php";
    require_once "../view/ViewTemplate.php";
    require_once "../model/ModelAnnonce.php";
    require_once "../utils/Utils.php";
    ViewTemplate::fichierCss();
    ViewTemplate::menu();

    if (isset($_GET['id'])) {
        if (ModelAnnonce::getAnnonce($_GET['id'])) {
            ViewAnnonce::ajoutAnnonce($_GET['id']);
        } else {
            ViewTemplate::alert("Le type d'annonce n'existe pas.", "danger", "ListeAnnonce.php");
        }
    } else {
        if (isset($_POST['modif'])) {
            if (isset($_POST['id']) && ModelAnnonce::getAnnonce($_POST['id'])) {
                ModelAnnonce::ModifAnnonce($_POST['id'], $_POST['type_soc']);
                ViewTemplate::alert("La modification a été faite avec succès.", "success", "ListeTypeAnnonce.php");
            } else {
                ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeTypeAnnonce.php");
            }
        } else {
            ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeTypeAnnonce.php");
        }
    }

    ViewTemplate::footer();
    ViewTemplate::fichierJS();

    ?>
    