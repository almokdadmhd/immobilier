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
  require_once "../view/ViewInscription.php";
  require_once "../view/ViewTemplate.php";
  require_once "../model/ModelInscription.php";
  ViewTemplate::menu();
  if (isset($_POST['ajout'])) {
    if (ModelInscription::mailPresent($_POST["mail"])) {
      ViewTemplate::alert("l'adress mail existe deja", "danger", "CreatioInscription.php");
    } else {
      $token = mt_rand(10000, 99999);
      ModelInscription::ajoutInscription($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['pass'], $_POST['tel'], $token);
      viewTemplate::alert('inscreption a été bien fait pour confirmer votre inscription cliker ic' ,'success ', 'ConfirmationMail.php?mail=' . $_POST['mail'].'&token='.$token);
      

    }
  } else {
    ViewInscription::ajoutInscription();
  }
  ViewTemplate::footer();
  ?>
  <script src="../../js/jquery-3.5.1.min.js"></script>
  <script src="../../js/all.min.js"></script>
  <script src="../../js/bootstrap.bundle.min.js"></script>
  <script src="../../js/ctrl.js"></script>
</body>

</html>