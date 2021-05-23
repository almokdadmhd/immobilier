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
  require_once "../view/ViewInscreption.php";
  require_once "../view/ViewTemplate.php";
  require_once "../model/Modelnscreption.php";
  ViewTemplate::menu();
  if (isset($_POST['ajout'])) {
    // generation de token avec la function mt_rand (11111,99999) 
    $dadta = $_POST["mail"];
    if (ModelInscreption::mailPresent($_POST["mail"])) {
      ViewTemplate::alert("l'adress mail existe deja", "danger", "CreatioInscreption.php");
    } else {
      $token = mt_rand(10000, 99999);
      ModelInscreption::ajoutInscreption($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['pass'], $_POST['tel'], $token);
      viewTemplate::alert('inscreption a été bien fait pour confirmer votre inscreption cliker ic' ,'success ', 'ConfirmationMail.php?mail=' . $_POST['mail'].'&token='.$token);
      

    }
  } else {
    ViewInscreption::ajoutInscreption();
  }
  ViewTemplate::footer();
  ?>
  <script src="../../js/jquery-3.5.1.min.js"></script>
  <script src="../../js/all.min.js"></script>
  <script src="../../js/bootstrap.bundle.min.js"></script>
  <script src="../../js/ctrl.js"></script>
</body>

</html>