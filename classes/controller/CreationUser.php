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
  ViewTemplate::menu();
  if (isset($_POST['ajout'])) {
    if (ModelUser::mailExistant($_POST["mail"])) {
      ViewTemplate::alert("l'adress mail existe deja", "danger", "CreatioUser.php");
    } else {
      $token = uniqid();
      $hash = password_hash($_POST['pass'], PASSWORD_BCRYPT);
      ModelUser::ajoutUser($_POST['nom'], $_POST['prenom'], $_POST['mail'], $hash, $_POST['tel'], $token);
      viewTemplate::alert('inscreption a été bien fait pour confirmer votre inscription cliker ic', 'success ', 'ConfirmationMail.php?mail=' . $_POST['mail'] . '&token=' . $token);
    }
  } else {
    ViewUser::ajoutUser ();
  }
  ViewTemplate::footer();
  ?>
  <script src="../../js/jquery-3.5.1.min.js"></script>
  <script src="../../js/all.min.js"></script>
  <script src="../../js/bootstrap.bundle.min.js"></script>
  <script src="../../js/ctrl.js"></script>
</body>

</html>