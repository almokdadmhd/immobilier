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
    ViewUser::Connexion();

    if (isset($_POST['ajout'])) {
        if (ModelUser::mailExistant($_POST["mail"]) && ($_POST["pass"])) {
            ViewTemplate::alert("la connexion est correcte ", " success  ", "CreationConnexion.php");
        }
        if (isset($_POST['ajout'])) {
            ModelUser::confirmMail($_POST['mail'], $_POST['pass']);
            ViewTemplate::alert("La connexion est correcte ", "success", "CreationConnexion.php");
        } else {
        }
    }














    ViewTemplate::footer();

    if (isset($_POST['deconnexion'])) {
        session_unset();
        session_destroy();
        header('location:Accueil.php');
    } else {
    }
    ?>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/ctrl.js"></script>


</body>

</html>