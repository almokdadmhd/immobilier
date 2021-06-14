
   <?php session_start() ?>

   <?php
    require_once "../view/ViewUser.php";
    require_once "../view/ViewTemplate.php";
    require_once "../model/ModelUser.php";
    ViewTemplate::fichierCss();
    ViewTemplate::menu();
    if (isset($_GET['mail']) && isset($_GET['token'])) {
        ModelUser::confirmCnx($_GET['mail'], $_GET['token']);
        ViewTemplate::alert("confirmation a été", "success", "CreationConnexion.php");
    } else {
        ViewTemplate::alert("confirmation impossible", "danger", "CreationConnexion.php");
    }

    ViewTemplate::footer();
    ViewTemplate::fichierJS();
    ?>
    