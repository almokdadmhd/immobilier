
  <?php
  require_once "../view/ViewUser.php";
  require_once "../view/ViewTemplate.php";
  require_once "../model/ModelUser.php";
  ViewTemplate::fichierCss();
  ViewTemplate::menu();
  ViewUser::formHome();

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
    ViewUser::ajoutUser();
  }

  ViewTemplate::footer();
  ViewTemplate::fichierJS();
  ?>
  