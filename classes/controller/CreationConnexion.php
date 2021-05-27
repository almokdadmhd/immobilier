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

    if (isset($_POST['mail'])) {
        if (ModelUser::mailExistant($_POST["mail"])) {
            if (ModelUser::confirmMail($_POST["mail"], (ModelUser::mailExistant($_POST["mail"])["token"]))) {
                $mdp1 = $_POST["pass"];
                $mdp2 = ModelUser::mailExistant($_POST["mail"])["pass"];
                if (Utils::verification($mdp1, $mdp2)) {
                    $_SESSION["id"] = ModelUser::mailExistant($_POST["mail"])["id"];
                    $_SESSION["nom"] = ModelUser::mailExistant($_POST["mail"])["nom"];
                    $_SESSION["mail"] = ($_POST["mail"]);
                    ViewUser::Connexion();
                } else {
                    ViewTemplate::alert("mail est existe  ", " danger  ", "CreationConnexion.php");
                }
            } else {
                ViewTemplate::alert("la connexion est pas bon  ", " danger  ", "CreationConnexion.php");
            }
        } else {
            ViewTemplate::alert("mail est n'existe pas  ", " danger  ", "CreationConnexion.php");
        }
    }
    ViewUser::Connexion();


    ViewTemplate::footer();


    ?>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/ctrl.js"></script>


</body>

</html>