    <?php


    require_once "../model/ModelTypeBien.php";
    require_once "../view/ViewTemplate.php";
    require_once "../view/ViewTypeBien.php";
    require_once "../utils/Utils.php";
    require_once "../view/VoirTypeBien.php";









    ViewTemplate::fichierCss();
    ViewTemplate::menu();
    ViewTypeBien::listeTypeBien();
    FormBien::formTypeBien();
    ViewTemplate::footer();
    ViewTemplate::fichierJS();




    ?>


