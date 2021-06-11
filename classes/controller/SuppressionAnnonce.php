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
    require_once "../view/ViewAnnonce.php";
    require_once "../view/ViewTemplate.php";
    require_once "../model/ModelAnnonce.php";
    require_once "../utils/Utils.php";
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
    ?>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/ctrl.js"></script>
</body>

</html>