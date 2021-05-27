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
    require_once "../view/ViewUser.php";
    require_once "../view/ViewTemplate.php";
    require_once "../model/ModelUser.php";
    require_once "../utils/Utils.php";
    ViewTemplate::menu();
    if (isset($_POST['ajout'])) {
        if (ModelUser::existantCnx($_POST["mail"], ($_POST["pass"]))) {
            $_SESSION["mail"] = ($_POST["mail"]);
            $_SESSION["pass"] = ($_POST["pass"]);
        } else {
            ViewTemplate::alert(" alerte login ou mdp erronés ", " danger  ", "CreationConnexion.php");
        }
    } else {
        ViewUser::Connexion();
    }
    ViewTemplate::footer();


    ?>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/ctrl.js"></script>


</body>

</html>