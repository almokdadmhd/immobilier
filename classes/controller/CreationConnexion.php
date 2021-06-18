<?php session_start() ?>
    <?php
    require_once "../view/ViewUser.php";
    require_once "../view/ViewTemplate.php";
    require_once "../model/ModelUser.php";
    require_once "../utils/Utils.php";
    viewTemplate::fichierCss ();
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
                ViewTemplate::alert(" vous douvez aller à la page d'accueil ", " success  ", "Accueil.php");
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
    viewTemplate::fichierJS ();


    ?>
   
