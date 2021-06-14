<?php session_start() ?>

<?php
require_once "../view/ViewTypeBien.php";
require_once "../view/ViewTemplate.php";
require_once "../model/ModelTypeBien.php";
require_once "../utils/Utils.php";

ViewTemplate::fichierCss();
ViewTemplate::menu();

if (isset($_GET['id'])) {
    if (ModelTypeBien::getTypebien($_GET['id'])) {
        ModelTypeBien::SuppressionTypeBien($_GET['id']);
        ViewTemplate::alert("Le type bien a été supprimé avec succès.", "success", "ListeTypeBien.php");
    } else {
        ViewTemplate::alert("Le type social n'existe pas.", "danger", "ListeTypeBien.php");
    }
} else {
    ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeTypeBien.php");
}

ViewTemplate::footer();
?>






<script src="../../js/jquery-3.5.1.min.js"></script>
<script src="../../js/all.min.js"></script>
<script src="../../js/bootstrap.bundle.min.js"></script>
<script src="../../js/ctrl.js"></script>
</body>

</html>