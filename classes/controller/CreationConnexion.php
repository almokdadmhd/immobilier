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
        if (ModelUser::getByMail($_POST["mail"])) {
            $userTab = ModelUser::getByMail($_POST["mail"]); // recuperation du user selon son mail dans un tab userTab
            $pass = $userTab['pass']; // recuperation du mdp
            if (password_verify($_POST["pass"], $pass)) { // test validité mdp
                $user = new ModelUser($userTab['id']);  // instanciation du user en fonction de son id
                $_SESSION["id"] = $user->getId();
                $_SESSION["role"] = $user->getRole();
                $_SESSION["nom"] = $user->getPrenom() . " " . $user->getNom();
                header('Location: Accueil.php');
                exit();
            } else {
                ViewTemplate::alert(" Mot de passe erronée ", " danger  ", "CreationConnexion.php");
            }
        } else {
            ViewTemplate::alert(" adresse mail erronée ", " danger  ", "CreationConnexion.php");
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