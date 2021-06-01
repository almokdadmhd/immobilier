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
    require_once "../view/ViewTypeBien.php";
    require_once "../view/ViewTemplate.php";
    require_once "../model/ModelTypeBien.php";
    require_once "../utils/Utils.php";


    ViewTemplate::menu();


    if (isset($_POST['ajout'])) {
        $doonees = [$_POST['id'], $_POST['libelle']];
        $types = ["id", "libelle"];
        $datat = Utils::valider($doonees, $types);
        if ($data){ 
        ModelTypeBien::ajoutTypeBien ($_POST['type_bien']);
        ViewTemplate::alert("Les données sont insérées avec succès", "success", "ListeTypeBien.php");
    } else {
        ViewTypeBien::ajouTypeBien ();
    }
    ?>
    <?php
    }else { 
        ViewTypeBien::ajouTypeBien ();


    ViewTemplate::footer();
    ?>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/ctrl.js"></script>
</body>

</html>