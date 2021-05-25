<?php
require_once "../view/ViewInscreption.php";
require_once "../model/Modelnscreption.php";
require_once "../view/ViewTemplate.php";
if (isset($_GET['mail']) && isset ($_GET['token'])) {
  if (ModelInscreption::validermaitok ($_GET["mail"],$_GET["token"])) {
    ModelInscreption::ajoutInscreption()

  }
     );
  ViewTemplate::alert("L'enregistrée avec succès", "success", "ListeInscreption.php");
} else {
  ViewInscreption::ajoutInscreption();
}
ViewTemplate::footer();
?>


?>

